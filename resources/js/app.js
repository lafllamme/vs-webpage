/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('welcome', require('./components/Welcome.vue').default);
Vue.component('eye', require('./components/Eye.vue').default);
Vue.component('book', require('./components/Book.vue').default);
Vue.component('custom-menu', require('./components/Menu.vue').default);
Vue.component('custom-button', require('./components/customButton.vue').default);
Vue.component('tickets', require('./components/Tickets.vue').default);
Vue.component('event-book', require('./components/EventBook.vue').default);
Vue.component('sound-cloud', require('./components/SoundCloud.vue').default);
Vue.component('upcoming', require('./components/Upcoming.vue').default);
Vue.component('calendar', require('./components/Calendar.vue').default);

Vue.component('music-player', require('./components/MusicPlayer.vue').default);





/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
