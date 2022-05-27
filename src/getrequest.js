import axios from 'axios'





// Vue.createApp({
//     data() {
//         return {
//             addresses: [],
//             orders: [],
//             messages: [],
//             baskets: [],
//             products: []
//         }
//     },
//     methods: {
//     	fetchAddresses: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
//     		this.addresses = [];
//             axios.get('/php/confirm.php')
//             .then(response => {
//                 this.addresses = response.data;
//             })
//             .catch(error => {
//                 console.log(error);
//             });
//        	},

//         fetchOrders: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
//             this.orders = [];
//             axios.get('/php/confirm.php')
//             .then(response => {
//                 this.orders = response.data;
//             })
//             .catch(error => {
//                 console.log(error);
//             });
//         },

//         fetchMessages: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
//             this.messages = [];
//             axios.get('/php/contactAPI.php')
//             .then(response => {
//                 this.messages = response.data;
//             })
//             .catch(error => {
//                 console.log(error);
//             });
//         },

//         displayBasket: function () {
//             this.baskets = [];
//             axios.get('/php/basket.php')
//             .then(response => {
//                 this.baskets = response.data.items;
//             })
//             .catch(error => {
//                 console.log(error)
//             })
//         },

//         fetchProducts: function () { 
//             this.products =[]
//             axios.get('/php/store.php')
//             .then(response => {
//                 this.products = response.data;
//             })
//             .catch(error=> {
//                 console.log(error);
//             });
//         }

// 	},
// 	mounted() {
// 		this.fetchAddresses();
//         this.fetchOrders();
//         this.fetchMessages();
//         this.displayBasket();
//         this.fetchProducts();
// 	}
// }).mount('#app');
// export default{
//     fetchAddresses:fetchAddresses
//     fetchOrders:fetchOrders
//     fetchMessages:fetchMessages
//     displayBasket:displayBasket
//     fetchProducts:fetchProducts
// };

