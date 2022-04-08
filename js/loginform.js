function onSubmit(){

	var unameInput = document.getElementById('uname');
	var pswInput = document.getElementById('psw');
	

	var data = new FormData();
	data.append('username', unameInput.value);
	data.append('password', pswInput.value);

	const options = {
    	method: 'POST',
    	body: data,
	};

	fetch('http://localhost:8000/php/login.php', options)
	    .then(res => res.json())
	    .then(res => {
	    	window.location.reload();
	    });
}

var button = document.getElementById('submit');
button.addEventListener('click', onSubmit);

window.addEventListener('keydown', function (event) {
	if (event.keyCode == 13) {
		onSubmit();
	}
});