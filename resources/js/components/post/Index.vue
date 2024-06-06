<template>
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">author</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="post in posts">
                <td>{{post.id}}</td>
                <td>
                    <router-link v-if="post && post.id" :to="{ name: 'post.show', params: { id: post.id }}">
                        {{post.title}}
                    </router-link>
                </td>
                <td>{{post.description}}</td>
                <td>{{post.author}}</td>
                <td>
                    <router-link class="btn btn-primary" v-if="post && post.id" :to="{ name: 'post.edit', params: { id: post.id }}">Edit</router-link>
                </td>
                <td>
                    <a class="btn btn-danger" @click.prevent="$store.dispatch('deletePost', post.id)" href="#">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import store from "../../store/index.js";

export default {
    name: "index",

    props: [
        'id'
    ],

    mounted() {
        store.dispatch('getAllPosts')
    },

    methods: {
    },

    computed: {
        posts() {
            return this.$store.getters.posts
        }
    }
}
</script>

<style scoped>

</style>
