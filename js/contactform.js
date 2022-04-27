
Vue.createApp({
	data() {
		return {
			fnameInput: '',
			lnameInput: '',
			emailInput: '',
			messageInput: ''
		}
	},
	methods:{
		onSubmit: function () {
			var data = new FormData();
			data.append('first_name', this.fnameInput);
			data.append('last_name', this.lnameInput);
			data.append('email', this.emailInput);
			data.append('message', this.messageInput);

			// const options = {
		 //    	method: 'POST',
		 //    	body: data,
			// };

			// fetch('http://localhost:8000/php/contact.php', options)
			//     .then(res => res.json())
			//     .then(res => console.log(res));

			axios.post('http://localhost:8000/php/contact.php', {
			firstName: this.fnameInput,
			lastName: this.lnameInput,
			email: this.emailInput,
			message: this.messageInput
		})
		    .then(response => {
		    	console.log(response);
		    })
		    .catch(error=> {
		    	console.log(error);
		    });
		}	
	},
}).mount('#app');