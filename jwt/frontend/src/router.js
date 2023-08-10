import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/loginLogin.vue'; // login.vue 파일의 경로에 맞게 수정해주세요.

const routes = [
    {
        path: '/login'
        , component: Login,
    },
    // 다른 라우트들도 필요하면 이곳에 추가할 수 있습니다.
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;