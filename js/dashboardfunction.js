

function updateMessage(messages){
	var ourMessage = document.getElementById('message-text');
	var outputString = '';
		messages.forEach(function (message) {
			outputString += `<div class="contact-message">
								<p>Name: ${message.fname} ${message.lname}</p> 
								<p> Email: ${message.email}</p> 
								<p> Message: ${message.message}</p>
							 </div>`;
		})
	ourMessage.innerHTML = outputString;
}

function onSubmit(){
	fetch('http://localhost:8000/php/contactAPI.php',{
		method: 'GET',
	})
		.then(response => response.json())
		.then(data => updateMessage(data));
	
}

function loadMessage(){
		var loadingMessage = document.getElementById('message-text');
		var outputString = '';
		outputString += `<p>Now Loading...</p>`;
		loadingMessage.innerHTML = outputString;
		onSubmit();
}
//note for self: figuring out how to get above code to display when button is clicked

var button = document.getElementById('refresh');
button.addEventListener('click', loadMessage);

