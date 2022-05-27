import {notifications} from '../src/notifications/notifications.js'

Vue.createApp({
    data() {
        return {
            baskets: [],
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
                notifications.success();
            })
            .catch(error=> {
                console.log(error);
                notifications.error();
            });
        },

        displayBasket: function () {
            this.baskets = [];
            axios.get('/php/basket.php')
            .then(response => {
                this.baskets = response.data.items;
            })
            .catch(error => {
                console.log(error)
                notifications.error();
            })
        },

        clearBasket: function () {
            axios.get('/php/clearbasket.php')
            .then(response => {
                window.location.reload();
                notifications.success();
            })
            .catch(error=> {
                console.log(error);
                notifications.error();
            });
        },

        clearItem: function () {
            axios.get('/php/removeitem.php')
            .then(response => {
                //window.location.reload();
                notifications.success();
            })
            .catch(error=> {
                console.log(error)
                notifications.error();
            });
        }
        
	},
    mounted() {
        this.displayBasket();
    }
}).mount('#app');