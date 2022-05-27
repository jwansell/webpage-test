
export function showErrorToast() {
	// console.log('some sort of error')
	var body = document.querySelector('body');
	var container = document.createElement('div');

	container.innerHTML = '<div class="toast toast-error">Oops! Something has gone wrong, and an error has occurred.</div>'

	body.prepend(container);
	// Set a timeout to remove the html from the dom
	setTimeout(() => {
		container.remove()
	}, 3000)
	//fix this to be an error popup instead
}