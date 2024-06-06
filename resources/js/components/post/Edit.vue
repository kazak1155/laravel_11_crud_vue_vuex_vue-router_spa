<template>
    <div v-if="post">
        <div  class="mb-3">
            <label>title</label>
            <input type="text" v-model="post.title" placeholder="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>description</label>
            <input type="text" v-model="post.description" placeholder="description" class="form-control">
        </div>
        <div  class="mb-3">
            <label>author</label>
            <input type="text" v-model="post.author" placeholder="author" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('updatePost', {id: post.id, title: post.title, description: post.description, author: post.author,})"  type="submit" value="update" class="btn btn-primary">
        </div>
    </div>
</template>

<script>
import store from "../../store/index.js";
import {mapGetters} from "vuex";

export default {

    name: "Edit",

    mounted() {
        store.dispatch('getPost', this.$route.params.id)
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
