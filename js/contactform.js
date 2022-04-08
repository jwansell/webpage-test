
function onSubmit(){

	var fnameInput = document.getElementById('fname');
	var lnameInput = document.getElementById('lname');
	var emailInput = document.getElementById('email');
	var messageInput = document.getElementById('message');

	var data = new FormData();
	data.append('first_name', fnameInput.value);
	data.append('last_name', lnameInput.value);
	data.append('email', emailInput.value);
	data.append('message', messageInput.value);

	const options = {
    	method: 'POST',
    	body: data,
	};

	fetch('http://localhost:8000/php/contact.php', options)
	    .then(res => res.json())
	    .then(res => console.log(res));
}

var button = document.getElementById('submit');
button.addEventListener('click', onSubmit);