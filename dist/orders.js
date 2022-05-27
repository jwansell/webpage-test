/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./js/ordersfunction.js":
/*!******************************!*\
  !*** ./js/ordersfunction.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _src_notifications_notifications_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../src/notifications/notifications.js */ \"./src/notifications/notifications.js\");\n\r\n\r\nVue.createApp({\r\n    data() {\r\n        return {\r\n            orders: []\r\n        }\r\n    },\r\n    methods: {\r\n        fetchOrders: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax\r\n            this.orders = [];\r\n            axios.get('/php/orders.php')\r\n            .then(response => {\r\n                this.orders = response.data;\r\n                _src_notifications_notifications_js__WEBPACK_IMPORTED_MODULE_0__.notifications.success();\r\n            })\r\n            .catch(error=> {\r\n                console.log(error);\r\n                _src_notifications_notifications_js__WEBPACK_IMPORTED_MODULE_0__.notifications.error();\r\n            });\r\n        }\r\n    },\r\n    mounted() {\r\n        this.fetchOrders();\r\n    }\r\n}).mount('#app');\n\n//# sourceURL=webpack://webpage/./js/ordersfunction.js?");

/***/ }),

/***/ "./src/notifications/basket.js":
/*!*************************************!*\
  !*** ./src/notifications/basket.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"showBasketToast\": () => (/* binding */ showBasketToast)\n/* harmony export */ });\nfunction showBasketToast() {\r\n\t// Add some html to the dom\r\n\tvar body = document.querySelector('body');\r\n\tvar container = document.createElement('div');\r\n\r\n\tcontainer.innerHTML = '<div class=\"toast toast-success\">Success! The item has been added to your basket.</div>'\r\n\r\n\tbody.prepend(container);\r\n\t// Set a timeout to remove the html from the dom\r\n\tsetTimeout(() => {\r\n\t\tcontainer.remove()\r\n\t}, 3000)\r\n\r\n}\r\n\n\n//# sourceURL=webpack://webpage/./src/notifications/basket.js?");

/***/ }),

/***/ "./src/notifications/error.js":
/*!************************************!*\
  !*** ./src/notifications/error.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"showErrorToast\": () => (/* binding */ showErrorToast)\n/* harmony export */ });\n\r\nfunction showErrorToast() {\r\n\t// console.log('some sort of error')\r\n\tvar body = document.querySelector('body');\r\n\tvar container = document.createElement('div');\r\n\r\n\tcontainer.innerHTML = '<div class=\"toast toast-error\">Oops! Something has gone wrong, and an error has occurred.</div>'\r\n\r\n\tbody.prepend(container);\r\n\t// Set a timeout to remove the html from the dom\r\n\tsetTimeout(() => {\r\n\t\tcontainer.remove()\r\n\t}, 3000)\r\n\t//fix this to be an error popup instead\r\n}\n\n//# sourceURL=webpack://webpage/./src/notifications/error.js?");

/***/ }),

/***/ "./src/notifications/notifications.js":
/*!********************************************!*\
  !*** ./src/notifications/notifications.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"notifications\": () => (/* binding */ notifications)\n/* harmony export */ });\n/* harmony import */ var _success_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./success.js */ \"./src/notifications/success.js\");\n/* harmony import */ var _error_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./error.js */ \"./src/notifications/error.js\");\n/* harmony import */ var _basket_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./basket.js */ \"./src/notifications/basket.js\");\n\r\n\r\n\r\n\r\nconst notifications = {\r\n\tsuccess() {\r\n\t\t(0,_success_js__WEBPACK_IMPORTED_MODULE_0__.showSuccessToast)();\r\n\t},\r\n\terror() {\r\n\t\t(0,_error_js__WEBPACK_IMPORTED_MODULE_1__.showErrorToast)();\r\n\t},\r\n\tbasket() {\r\n\t\t(0,_basket_js__WEBPACK_IMPORTED_MODULE_2__.showBasketToast)();\r\n\t}\r\n}\n\n//# sourceURL=webpack://webpage/./src/notifications/notifications.js?");

/***/ }),

/***/ "./src/notifications/success.js":
/*!**************************************!*\
  !*** ./src/notifications/success.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"showSuccessToast\": () => (/* binding */ showSuccessToast)\n/* harmony export */ });\n// success show toast\r\nfunction showSuccessToast() {\r\n\t// Add some html to the dom\r\n\tvar body = document.querySelector('body');\r\n\tvar container = document.createElement('div');\r\n\r\n\tcontainer.innerHTML = '<div class=\"toast toast-success\">Success! Executed with no issues.</div>'\r\n\r\n\tbody.prepend(container);\r\n\t// Set a timeout to remove the html from the dom\r\n\tsetTimeout(() => {\r\n\t\tcontainer.remove()\r\n\t}, 3000)\r\n\r\n}\r\n\n\n//# sourceURL=webpack://webpage/./src/notifications/success.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./js/ordersfunction.js");
/******/ 	
/******/ })()
;