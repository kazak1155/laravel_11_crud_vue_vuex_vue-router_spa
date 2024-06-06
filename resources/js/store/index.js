import { createStore } from "vuex";
import post from './modules/post.js'
const store = createStore({
    modules: {
        post
    }
});
export default store
