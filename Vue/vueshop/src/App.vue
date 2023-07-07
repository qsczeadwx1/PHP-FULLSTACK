<template>
  <img alt="Vue logo" src="./assets/logo.png">

  <!-- 네비 -->
  <Navi :navList="navList"/>
  
  <!-- 리스트 -->
  <ProductList @openModal="modalFlg = true; productNum=i;" :modalFlg="modalFlg" :products="products" :key="i" v-for="(products, i) in products"/>
  
  <!-- 모달 -->
  <ProductModal @minus="minus(productNum)" @plus="plus(productNum)" :productNum="productNum" :products="products" :modalFlg="modalFlg" @closeModal="modalFlg = false;" />

</template>

<script>
import data from './assets/js/data.js';
import Navi from './components/Navi.vue';
import ProductList from './components/ProductList.vue';
import ProductModal from './components/ProductModal.vue';

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      navList: ['홈', '상품', '기타'],
      productNum: 0,
      count: 1,
      modalFlg: false,
      products: data,
      product1: '장갑',
      price1: '30,000',
      product2: '바지',
      price2: '50,000',
      styleR: 'color:blue',
      styleL: 'list-style: none'
    }
  },
  methods: { // 함수를 설정하는 영역
    plus(i) {
      this.products[i].count++;
    },
    minus(i) {
      if(this.products[i].count > 0){
        this.products[i].count--;
      }
    },
    openModal(i) {
      this.modalFlg = true;
      this.productNum = i;
    },
  },
  components: { // 컴포넌트 정의
    Navi : Navi,
    ProductList : ProductList,
    ProductModal : ProductModal,
  },
}
</script>

<style>
@import url('./assets/css/app.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>