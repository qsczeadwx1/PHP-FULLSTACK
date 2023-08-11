// import axios from 'axios';
import { createStore } from 'vuex';
import TokenController from './js/TokenController';
import ApiController from './js/ApiController';
import router from './router';

const store = createStore({
    state() {
        return {
            isToken: false,

        }
    },
    mutations: {
        setToken(state, token) {
            TokenController.setToken(token);
            state.isToken = true;
        },
        destroyToken(state) {
            TokenController.destoryToken();
            state.isToken = false;
        },
    },
    actions: {
        login(context, id) {
            ApiController.post('/api/token', {id: id})
            .then(res => {
                let token = res.data["token"];
                console.log(token);
                context.commit("setToken", token);
                router.push('/main');
            })
            .catch(error => {
                console.log(error);
            });
        },
        logout(context) {
            context.commit("destroyToken");
            router.push("/login");
        },
        // goToPath(context, path) {
        //     console.log(context);
        //     if (path === 'login' && context.state.isToken) {
        //         router.push('/main');
        //     } else if (path === 'main' && !context.state.isToken) {
        //         router.push('/login');
        //     } else {
        //     router.push(path);
        //     }
        // }
    },
})

export default store;