import axios from 'axios';
import tc from './TokenController';

const ApiController = axios.create({
    baseURL: "http://localhost:8000"
});

ApiController.interceptors.request.use(
    config => {
        config.headers["Content-Type"] = "application/json; charset=utf-8";
        if( tc.getToken() ) {
            config.headers["Authorizaiton"] = tc.getToken();
        }
        return config;
    },
    error => {
        console.log(error);
        return Promise.reject(error);
    }
);

export default ApiController