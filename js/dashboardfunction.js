Vue.createApp({
    data() {
        return {
            messages: []
        }
    },
    methods: {
    	fetchMessages: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
    		this.messages = [];
            axios.get('/php/contactAPI.php')
            .then(response => {
                this.messages = response.data;
            })
            .catch(error => {
                console.log(error);
            });
       	}
	},
	mounted() {
		this.fetchMessages();
	}
}).mount('#app');