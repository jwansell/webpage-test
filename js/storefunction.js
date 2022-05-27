import {notifications} from '../src/notifications/notifications.js'

notifications.success();

Vue.createApp({
    data() {
        return {
            products: []
        }
    },
    methods: {
    	fetchProducts: function () { 
            this.products =[]
            axios.get('/php/store.php')
            .then(response => {
                this.products = response.data;
                notifications.success();
            })
            .catch(error=> {
                console.log(error);
                notifications.error();
            });
       	},

        addtoBasket: function (product) {
        axios.post('http://localhost:8000/php/basketAPI.php', product)
            .then(response => {
                console.log(response);
                notifications.basket();
            })
            .catch(error=> {
                console.log(error);
                notifications.error();
            });
        }
	},
    mounted() {
        this.fetchProducts();
    }
}).mount('#app');