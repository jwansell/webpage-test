Vue.createApp({
    data() {
        return {
            
            addressInput: '',
            postcodeInput: '',
            countyInput: '',
            cityInput: ''
        }
    },
    methods: {
        onSubmit: function() {
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

         fetchOrders: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
            this.orders = [];
            axios.get('/php/orders.php')
            .then(response => {
                this.orders = response.data;
            })
            .catch(error=> {
                console.log(error);
            });
        }
	},
    mounted() {
        this.fetchOrders();
    }
}).mount('#app');