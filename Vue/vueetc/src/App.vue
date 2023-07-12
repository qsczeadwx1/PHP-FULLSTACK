<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <hr>

  <PostComponent :propsTest="1"/>
  <p>{{ data.name + data.age }}</p>

  <button @click="data.name = '김김김'">김김김</button>
  <br>
  
  <!-- <button @click="test = '5000'">김김</button> -->
  <router-link to="/">홈으로</router-link>
<router-link to="/post">post</router-link>

  <router-view>
    <span>222</span>
  </router-view>



</template>

<script>
import { ref } from 'vue';
import PostComponent from './components/PostComponent.vue'

export default {
  name: 'App',
  
  setup() {
        let data = ref({name: 'aaaaa', age: 20} );
        let test = 'aaa';
        return {test, data};
        
    },
  components: {
    PostComponent,
  }
}
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
