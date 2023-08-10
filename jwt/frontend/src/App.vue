<template>
  <div id="app">
    <h1 v-if="token"><loginLogin/></h1>
    <button v-else @click="login">로그인</button>
  </div>
</template>

<script>
import axios from 'axios';
import loginLogin from './components/loginLogin.vue';

export default {
  name: 'App',
  data(){
    return {
      token: localStorage.getItem('token') || '',
    }
  },
  components: {
    loginLogin,
  },
  methods: {
    login() {
      axios.get('http://localhost:8000/api/token?id=ppp')
        .then(res => {
          console.log(res.data);
          this.token = res.data.token;
          // 로그인 성공 시 로그인 페이지로 이동
          localStorage.setItem('token', this.token);
          this.$router.push('/login');
        })
        .catch(error => {
          if(error.status >= 400) {
            console.log(error);
          }
        });
    },
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>