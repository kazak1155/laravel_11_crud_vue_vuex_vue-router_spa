<template>

    <div>
        <div class="mb-3">
            <input type="text" v-model="post.title" placeholder="title" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="post.description" placeholder="description" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="post.author" placeholder="author" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('storePost', { title: post.title, description: post.description, author: post.author,})" type="submit" value="add" class="btn btn-primary">
        </div>
    </div>

</template>

<script>
import {mapGetters} from 'vuex'

export default {
    name: "index",

    mounted() {
        this.$store.commit('setPost', { title: null, description: null, author: null})
    },

    computed: {
        ...mapGetters({
            isDisabled: "isDisabled",
            post: "post",
        })
    },
}
</script>

<style scoped>

</style>
