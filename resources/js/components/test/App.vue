<template>
    <div id="nav">
        <router-link to="/">Home</router-link> |
        <router-link to="/about">About</router-link> |
        <router-link to="/post">Post</router-link>
    </div>
    <router-view />
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
