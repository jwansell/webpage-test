
Vue.createApp({
    data() {
        return {
            orders: []
        }
    },
    methods: {
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