import axios from 'axios'
Vue.createApp({
	data() {
		return {
			fnameInput: '',
			lnameInput: '',
			emailInput: '',
			messageInput: '',
			addressInput: '',
            postcodeInput: '',
            countyInput: '',
            cityInput: '',
			unameInput: '',
			pswInput: ''
		}
	},
	methods:{
		addContact: function () {
			axios.post('http://localhost:8000/php/contact.php', {
			first_name: this.fnameInput,
			last_name: this.lnameInput,
			email: this.emailInput,
			message: this.messageInput
			})
		    .then(response => {
		    	console.log(response);
		    })
		    .catch(error=> {
		    	console.log(error);
		    });
		},

		updateAddresses: function() {
        axios.post('http://localhost:8000/php/checkoutAPI.php', {
            address: this.addressInput,
            postcode: this.postcodeInput,
            county: this.countyInput,
            city: this.cityInput
            })
            .then(response => {
                console.log(response);
            })
            .catch(error=> {
                console.log(error);
            });
        },

        verifyLogin: function() {
		var data = new FormData();
		data.append('username', this.unameInput);
		data.append('password', this.pswInput);

		axios.post('http://localhost:8000/php/login.php', {
			username: this.unameInput,
			password: this.pswInput
			})
		    .then(response => {
		    	window.location.reload();
		    })
		    .catch(error=> {
		    	console.log(error);
		    });
		},

		addtoBasket: function (product) {
        axios.post('http://localhost:8000/php/basketAPI.php', product)
            .then(response => {
                console.log(response);
            })
            .catch(error=> {
                console.log(error);
            });
        }	
	},
}).mount('#app');
export default {
	addContact:addContact
	updateAddresses:updateAddresses
	verifyLogin:verifyLogin
	addtoBasket:addtoBasket
};