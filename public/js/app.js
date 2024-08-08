import './bootstrap';
  // JavaScript para abrir y cerrar el popup del TIPO USUARIO
  function mostrarPopup() {
    document.getElementById('popupOverlay').style.display = 'flex';
    document.querySelector('.popup').style.display = 'block';
}

function cerrarPopup() {
    document.getElementById('popupOverlay').style.display = 'none';
    document.querySelector('.popup').style.display = 'none';
}

 // JavaScript para abrir y cerrar el popup del CLIENTE
 function mostrarPopupCliente() {
    document.getElementById('popupCliente').style.display = 'block';
}

function cerrarPopupCliente() {
    document.getElementById('popupCliente').style.display = 'none';
}