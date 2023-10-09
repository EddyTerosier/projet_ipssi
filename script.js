const confirmButton = document.querySelector('.confirm');
const modal = document.querySelector('dialog');

if (document.cookie.indexOf("politique=true") === -1) {
  modal.show();
}

confirmButton.addEventListener('click', () => {
    document.cookie = "politique=true";
    modal.close();
});
