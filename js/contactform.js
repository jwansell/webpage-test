import {notifications} from '../src/notifications/notifications.js'

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
			// fetch('http://localhost:8000/php/contact.php', options)
			//     .then(res => res.json())
			//     .then(res => console.log(res));

			axios.post('http://localhost:8000/php/contact.php', {
			first_name: this.fnameInput,
			last_name: this.lnameInput,
			email: this.emailInput,
			message: this.messageInput
			})
		    .then(response => {
		    	console.log(response);
		    	notifications.success();
		    })
		    .catch(error=> {
		    	console.log(error);
		    	notifications.error();
		    });
		}	
	},
}).mount('#app');