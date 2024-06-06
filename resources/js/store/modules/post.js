import axios from "axios";
import router from "../../router.js";

export default  {
    state: () =>({
        post: {
            title: null,
            description: null,
            author: null,
        },
        posts: null,
    }),

    getters: {
        post: state => state.post,
        posts: state => state.posts,
        isDisabled: (state) => {
            return state.post.title && state.post.description && state.post.author
        },
    },

    mutations: {
        setPost(state, post) {
            state.post = post
        },

        setAllPost(state, posts) {
            state.posts = posts
        }
    },

    actions: {
        getPost({commit}, id) {
            axios.get(`/api/post/${id}`)
                .then(response => {
                    commit('setPost', response.data.data)
                })
                .catch(error => {
                    console.log(error.message)
                })
        },

        getAllPosts({ commit }) {
            axios.get('/api/post')
                .then(response => {
                    commit ('setAllPost', response.data.data)
                })
                .catch(error => {
                    console.log(error.message)
                })
        },

        deletePost({dispatch}, id) {
            axios.delete(`/api/post/${id}`,
            )
                .then(response => {
                    dispatch('getAllPosts')
                })
                .catch(error => {
                    console.log(error.response)
                });
        },

        updatePost({}, data) {
            axios.patch(`/api/post/${data.id}`,
                {
                    title: data.title,
                    description: data.description,
                    author: data.author,
                }
            )
                .then(response => {
                    router.push({ name: 'post.show', params: {id: data.id} })
                })
                .catch(error => {
                    console.log(error.response)
                });
        },

        storePost({}, data) {
            axios.post('/api/post',
                {
                    title: data.title,
                    description: data.description,
                    author: data.author,
                }
            )
                .then( res => {
                    router.push({ name: 'post.index'})
                })
                .catch(error=>{
                    console.log(error.response)
                });
        },
    },
}
