const confirmButton = document.querySelector('.confirm');
const modal = document.querySelector('dialog');

if (document.cookie.indexOf("politique=true") === -1) {
  modal.show();
}

if (document === "index.html"){
    confirmButton.addEventListener('click', () => {
        document.cookie = "politique=true";
        modal.close();
    });
}


let map = L.map('map').setView([48.87, 2.30], 14);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

marker = new L.marker([48.870502, 2.304897], {}).bindPopup("Boutique Addidous des Champs Elysées, 59 Avenue des Champs Elysées, 75008 Paris").addTo(map);

map.on();