Vue.createApp({
	data() {
		return{
			unameInput: '',
			pswInput: ''
		}
	},
	methods:{
		onSubmit: function() {
		
		var data = new FormData();
		data.append('username', this.unameInput);
		data.append('password', this.pswInput);

		const options = {
	    	method: 'POST',
	    	body: data,
		};

		fetch('http://localhost:8000/php/login.php', options)
		    .then(res => res.json())
		    .then(res => {
		    	window.location.reload();
		    });
		}
	},
}).mount('#app')