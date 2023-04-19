const modal_error = document.querySelector(".modal-error");
const cerrar_error = document.querySelector(".cerrar-error");

cerrar_error.classList.add('show');

cerrar_error.addEventListener('click', () => {
	modal_error.classList.remove('show');
})