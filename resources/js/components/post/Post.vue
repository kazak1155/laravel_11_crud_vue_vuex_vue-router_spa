<template>
    <div id="nav">
        <router-link :to="{ name: 'post.index' }">index</router-link> |
        <router-link :to="{ name: 'post.create' }">add post</router-link>
    </div>
    <router-view />
</template>

<script setup>


</script>

<style scoped>

</style>
