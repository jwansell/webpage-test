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

	fetch('http://localhost:8000/login.php', options)
	    .then(res => res.json())
	    .then(res => console.log(res));
}

var button = document.getElementById('submit');
button.addEventListener('click', onSubmit);