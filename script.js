const confirmButton = document.querySelector(".confirm");
const modal = document.querySelector("dialog");

if (document.cookie.indexOf("politique=true") === -1) {
  modal.show();
}

if (document.location.pathname.endsWith("/")) {
  confirmButton.addEventListener("click", () => {
    document.cookie = "politique=true";
    modal.close();
  });



  if (localStorage.getItem('dark') == 'true'){
    document.querySelector('body').classList.toggle("dark")
}

var buttonDark = document.querySelector(".darkMode");

buttonDark.addEventListener('click', () => {
  if (localStorage.getItem('dark') === 'true'){
      document.querySelector('body').classList.remove("dark");
      localStorage.setItem('dark', false);
  } else {
      document.querySelector('body').classList.add("dark");
      localStorage.setItem('dark', true); 
  }
});

}

if (document.location.pathname.endsWith("contact.html")) {
  let map = L.map("map").setView([48.87, 2.3], 14);

  L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
  }).addTo(map);

  marker = new L.marker([48.870502, 2.304897], {}).bindPopup("Boutique Addidous des Champs Elysées, 59 Avenue des Champs Elysées, 75008 Paris").addTo(map);
}

// PAGE PRODUIT

// Fonction pour charger les données JSON depuis le fichier
function chargerDonnees() {
  fetch("data.json")
    .then((response) => response.json())
    .then((data) => {
      afficherCartes(data.chaussures); // Appelez la fonction pour afficher les cartes avec les données chargées
    })
    .catch((error) => {
      console.error("Erreur de chargement des données JSON :", error);
    });
}

// Fonction pour afficher les cartes de chaussures
function afficherCartes(chaussures) {
  const cartesChaussures = document.getElementById("cartes-chaussures");

  chaussures.forEach((chaussure) => {
    const carte = document.createElement("div");
    carte.classList.add("col-md-4", "mb-4");
    carte.innerHTML = `
          <div class="card">
              <img src="${chaussure.image}" class="card-img-top" alt="${chaussure.nom}">
              <div class="card-body">
                  <h5 class="card-title">${chaussure.nom}</h5>
                  <p class="card-text">${chaussure.description}</p>
                  <p class="card-text">Prix : $${chaussure.prix.toFixed(2)}</p>
              </div>
          </div>
      `;

    cartesChaussures.appendChild(carte);
  });
}

// Charger les données lorsque la page est chargée
document.addEventListener("DOMContentLoaded", () => {
  chargerDonnees();
});

// Fonction pour gérer la recherche par nom
function rechercherParNom() {
  const cartesChaussures = document.getElementById("cartes-chaussures");
  const champRecherche = document.getElementById("recherche");
  const termeRecherche = champRecherche.value.toLowerCase();

  // Récupérer toutes les cartes de chaussures
  const chaussures = Array.from(cartesChaussures.querySelectorAll(".col-md-4"));

  // Filtrer les chaussures en fonction du terme de recherche
  const chaussuresFiltrees = chaussures.filter((chaussure) => {
    const nomChaussure = chaussure.querySelector(".card-title").innerText.toLowerCase();
    return nomChaussure.toLowerCase().includes(termeRecherche);
  });
  // Afficher toutes les chaussures si le champ de recherche est vide
  if (termeRecherche === "") {
    cartesChaussures.innerHTML = "";
    chaussures.forEach((chaussure) => {
      cartesChaussures.appendChild(chaussure);
    });
  } else {
    // Sinon, afficher les chaussures filtrées
    cartesChaussures.innerHTML = "";
    chaussuresFiltrees.forEach((chaussure) => {
      cartesChaussures.appendChild(chaussure);
    });
  }
}

// Ajouter un écouteur d'événement pour déclencher la recherche lorsque l'utilisateur tape
document.getElementById("recherche").addEventListener("input", rechercherParNom);
