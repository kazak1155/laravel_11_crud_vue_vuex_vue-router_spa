import App from './components/post/Post.vue'
import router from './router.js'
import store from './store/index.js'
import { createApp } from "vue";
import Vuex from 'vuex'

const app = createApp(App).use(router).use(store).use(Vuex).mount('#app')
