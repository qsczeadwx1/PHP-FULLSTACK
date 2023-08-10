import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/LoginComponent.vue';
import Main from './components/MainComponent.vue';

const routes = [
    {
        path: "/main",
        name: "main",
        component: Main,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;