Vue.createApp({
    data() {
        return {
            messages: []
        }
    },
    methods: {
    	fetchMessages: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
    		this.messages = [];
            fetch('/php/contactAPI.php')
                .then(async response => {
                    var body = await response.json();
                    if (response.status == 200) {
                        var string = '';
                        this.messages = body;
                    } else {
                        showError(body.messages);
                    }
                })
       	}
	},
	mounted() {
		this.fetchMessages();
	}
}).mount('#app');