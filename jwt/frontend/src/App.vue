<template>
  <div>
    <router-view></router-view>
  </div>
</template>

<script>
// import axios from 'axios';
// import router from './router';

export default {
  name: 'App',
  
  methods: {
    // login() {
    //   router.push('main');
      // axios.get('http://localhost:8000/api/token?id=ppp')
      //   .then(res => {
      //     console.log(res.data);
      //     this.$store.state.token = res.data.token;
      //     // 로그인 성공 시 로그인 페이지로 이동
      //     // localStorage.setItem('token', this.token);
      //     // this.$router.push('/login');
      //   })
      //   .catch(error => {
      //     if(error.status >= 400) {
      //       console.log(error);
      //     }
      //   });
    // },
    // logout() {
    //   router.push('login');
      // axios.get('http://localhost:8000/api/token?id=ppp')
      //   .then(res => {
      //     console.log(res.data);
      //     this.$store.state.token = res.data.token;
      //     // 로그인 성공 시 로그인 페이지로 이동
      //     // localStorage.setItem('token', this.token);
      //     // this.$router.push('/login');`
      //   })
      //   .catch(error => {
      //     if(error.status >= 400) {
      //       console.log(error);
      //     }
      //   });
  //   },
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