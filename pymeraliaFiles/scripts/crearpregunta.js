var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
  overlay = document.getElementById('overlay'),
  popup = document.getElementById('popup'),
  btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function () {
  overlay.classList.add('active');
  popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function (e) {
  e.preventDefault();
  overlay.classList.remove('active');
  popup.classList.remove('active');
});

function increaseItem() {
  items++;
  quantity.textContent = items;
}

window.onload = ()=>{

  const quantity = document.getElementById("quantity");
  const button_plus = document.getElementById("button+");
  let items = 0;

  function increaseItem() {
    items++;
    quantity.textContent = items;
  }
  button_plus.addEventListener("click", increaseItem);
  
}