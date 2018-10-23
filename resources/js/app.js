
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./includes/sidenav');
require('./includes/left-sidebar');
require('./pages/homepage');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

var questionId = 0;
var questionBodyElement = null;


$('.vote').on('click', function(event) {
    event.preventDefault();
    var isUpVote = event.target.previousElementSibling == null ? true : false;
    console.log(isUpVote);
});