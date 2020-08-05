const buttons = [ ...document.querySelectorAll('.button') ];
const artboard = document.querySelector('.artboard');

function isSelected({ currentTarget }) {
	const { theme } = currentTarget.dataset;
	buttons.forEach((button) => button.classList.remove('pressed'));
	this.classList.toggle('pressed');
	artboard.dataset.theme = theme;
}
buttons.forEach((button) => button.addEventListener('click', isSelected));
