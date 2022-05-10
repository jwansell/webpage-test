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
    mounted() {
        this.fetchProducts();
    }
}).mount('#app');