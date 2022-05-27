var webpack = require('webpack');
var path = require('path');



module.exports = {
	mode: 'development',
	entry: { 
		dashboard: path.resolve(__dirname, './js/dashboardfunction.js'),
		checkout: path.resolve(__dirname, './js/checkoutfunction.js'),
		confirm: path.resolve(__dirname, './js/confirmorder.js'),
		contact: path.resolve(__dirname, './js/contactform.js'),
		login: path.resolve(__dirname, './js/loginform.js'),
		orders: path.resolve(__dirname, './js/ordersfunction.js'),
		store: path.resolve(__dirname, './js/storefunction.js'),
		// do this for all js functions /\

	},

	output: {
		path: path.resolve(__dirname, './dist'),
	  	filename: '[name].js'
	},

	module: {
		rules: [
			{
				test: /\.css$/,

				use: ['style-loader', 'css-loader']//, 'vue-loader']
			},

			{
				test: /\.ce\.vue$/,

				use: ['vue-loader']
			},
		]
	}
}