// success show toast
export function showSuccessToast() {
	// Add some html to the dom
	var body = document.querySelector('body');
	var container = document.createElement('div');

	container.innerHTML = '<div class="toast toast-success">Success! Executed with no issues.</div>'

	body.prepend(container);
	// Set a timeout to remove the html from the dom
	setTimeout(() => {
		container.remove()
	}, 3000)

}
