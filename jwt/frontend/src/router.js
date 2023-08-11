import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/LoginComponent.vue';
import Main from './components/MainComponent.vue';
import Home from './components/HomeComponent.vue';
import TokenController from './js/TokenController';


const configFlg = {
    main: true,
    login: false,

};
const beforeAuth = path => (to, from, next) => {
    const isToken = TokenController.getToken();
    const flg = configFlg[path];
    
    if( isToken && from.path == '/' && to.path == '/login') {
        next('/main');
    }
    else if( !isToken && from.path == '/' && to.path == '/main') {
        next('/login');
    }
    else if( isToken && (path == 'login') ) {
        next('/main');
    }
    else if ((flg && isToken ) || !flg) {
        return next();
    } else {
        next('/login');
    }
};

const routes = [
    {
        path: "/main",
        name: "main",
        component: Main,
        beforeEnter: beforeAuth('main'),
    },
    {
        path: "/login",
        name: "login",
        component: Login,
        beforeEnter: beforeAuth('login'),
    },
    {
        path: "/",
        name: "home",
        component: Home,
        beforeEnter: beforeAuth('/'),
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;