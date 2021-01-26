require('./bootstrap');
import Vue from 'vue'



// Vue Declaration


Vue.component('Apollo', require('./components/Apollo.vue').default)



//

const app = new Vue({
    el: '#app'
    
});


