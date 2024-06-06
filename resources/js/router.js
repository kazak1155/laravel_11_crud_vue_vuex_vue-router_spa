import { createWebHistory, createRouter } from "vue-router";


const routes = [
    // {
    //     path: "/",
    //     name: "home",
    //     component: () => import('./components/post/Post.vue'),
    // },
    {
        path: "/post",
        name: "post.index",
        component: () => import('./components/post/Index.vue'),
    },

    {
        path: "/post/create",
        name: "post.create",
        component: () => import('./components/post/Create.vue'),
    },
    {
        path: "/post/:id/edit",
        name: "post.edit",
        component: () => import('./components/post/Edit.vue'),
    },
    {
        path: "/post/:id",
        name: "post.show",
        component: () => import('./components/post/Show.vue'),
        props: {id: true}
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
