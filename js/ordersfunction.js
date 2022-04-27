// function fetchOrders() {
// 	 const container = document.getElementById('grid-container');
//     container.innerHTML = '<div class="loading">Loading... </div>';
//     fetch('/api/messages')
//         .then(async response => {
//             var body = await response.json();
//             if (response.status == 200) {
//                 var string = '';
//                 body.data.forEach(message => {
//                     string += createHtmlForMessage(message);
//                 });
//                 container.innerHTML = string;
//             } else {
//                 showError(body.messages);
//             }
//         });
// }

// function createHtmlForMessage(message) {
//     return `<div class="user-id">0</div>
// 			<div class="time-ordered">0:00</div>
// 			<div class="quantity">0</div>  
// 			<div class="item-ordered">Text</div>  
// 			<div class="value">£0.00</div>`;
// }

// fetchOrders();

// document.getElementById('refresh').addEventListener('click', fetchOrders);

Vue.createApp({
    data() {
        return {
            orders: []
        }
    },
    methods: {
        fetchOrders: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
            this.orders = [];
            fetch('/php/orders.php')
                .then(async response => {
                    var body = await response.json();
                    if (response.status == 200) {
                        var string = '';
                        this.orders = body;
                    } else {
                        showError(body.orders);
                    }
                })
        }
    },
    mounted() {
        this.fetchOrders();
    }
}).mount('#app');