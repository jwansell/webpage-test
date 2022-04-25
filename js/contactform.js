
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

			const options = {
		    	method: 'POST',
		    	body: data,
			};

			fetch('http://localhost:8000/php/contact.php', options)
			    .then(res => res.json())
			    .then(res => console.log(res));
		}	
	},
}).mount('#app');