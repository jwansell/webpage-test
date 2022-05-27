import {notifications} from '../src/notifications/notifications.js'

Vue.createApp({
    data() {
        return {
            addresses: [],
            orders: []
        }
    },
    methods: {
    	fetchAddresses: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
    		this.addresses = [];
            axios.get('/php/confirm.php')
            .then(response => {
                this.addresses = response.data;
            })
            .catch(error => {
                console.log(error);
            });
       	},

        fetchOrders: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
            this.orders = [];
            axios.get('/php/confirm.php')
            .then(response => {
                this.orders = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        }
	},
	mounted() {
		this.fetchAddresses();
        this.fetchOrders();
	}
}).mount('#app');