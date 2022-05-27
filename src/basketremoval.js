import axios from 'axios'
Vue.createApp({
    data() {
        return {
            baskets: []
        }
    },
    methods: {
        
        clearBasket: function () {
            axios.get('/php/clearbasket.php')
            .then(response => {
                window.location.reload();
            })
            .catch(error=> {
                console.log(error);
            });
        },

        clearItem: function () {
            axios.get('/php/removeitem.php')
            .then(response => {
                //window.location.reload();
            })
            .catch(error=> {
                console.log(error)
            });
        }
        
	},
    mounted() {
        
    }
}).mount('#app');
export default {
    clearBasket: clearBasket
    clearItem: clearItem
}
