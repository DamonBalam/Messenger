
require('./bootstrap');

import Vue from 'vue'
import store from './store'
import BootstrapVue from 'bootstrap-vue'
import VueRouter from 'vue-router'
import MessengerComponent from './components/MessengerComponent.vue'

Vue.use(BootstrapVue);
Vue.use(VueRouter);



import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'



// Vue.component('messenger-component', require('./components/MessengerComponent.vue'));}
Vue.component('contact-component', require('./components/ContactComponent.vue'));
Vue.component('contact-form-component', require('./components/ContactFormComponent.vue'));
Vue.component('contact-list-component', require('./components/ContactListComponent.vue'));
Vue.component('active-conversation-component', require('./components/ActiveConversationComponent.vue'));
Vue.component('message-conversation-component', require('./components/MessageConversationComponent.vue'));
Vue.component('status-component', require('./components/StatusComponent.vue'));
Vue.component('profile-form-component', require('./components/ProfileComponent.vue'));


const routes = [
    {path:'/chat', component: MessengerComponent },
    {path:'/chat/:conversationId', component: MessengerComponent }
];

const router = new VueRouter({
    routes,
    mode: 'history'
});


const app = new Vue({
    el: '#app',
    store,
    router,
    methods:{
    	logout(){
    		event.preventDefault();
            document.getElementById('logout-form').submit();
    	}
    }
});

