<template>
    <h2>show post</h2>
    <div v-if="post">
        <div>
            Title: {{ post.title }}
        </div>
        <div>
            Dscription: {{ post.description }}
        </div>
        <div>
            Author: {{ post.author }}
        </div>
        <div>
            <router-link :to="{ name: 'post.edit', params: { id: this.post.id }}">Edit</router-link>
        </div>
    </div>
</template>

<script>
import store from "../../store/index.js";

export default {
    name: "show",

    props: [
        'id'
    ],

    mounted() {
        store.dispatch('getPost', this.$route.params.id)
    },

    methods: {

    },

    computed: {
        post() {
            return this.$store.getters.post
        }
    }
}
</script>

<style scoped>

</style>
