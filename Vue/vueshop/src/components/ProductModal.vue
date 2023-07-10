<template>
   <div class="bg_black" v-if="modalFlg">
    <div class="bg_white">
      <img :src="products[productNum].url">
      <h4>상품명 : {{ products[productNum].name }}</h4>
      <p>설명 : {{ products[productNum].content }}</p>
      <p>가격 :  {{ products[productNum].price }}원</p>
      <!-- <p>수량 :  {{ products[productNum].count }}개</p> -->
      <p>수량 :  {{ countProduct ? countProduct : 0 }}개</p>
      <p>총가격 : {{ products[productNum].price * countProduct }} 원</p>
      <button @click="$emit('plus')">수량증가</button>
      <button @click="$emit('minus')">수량감소</button>
      <br>
      <br>
      <input type="text" v-model="countProduct">
      <br>
      <br>
      <button @click="$emit('closeModal'); countProduct='';">취소</button>
    </div>
  </div>
</template>
<script>
export default {
    name : 'ProductModal',
    data() {
      return {
        countProduct: '',
      }
    },
    props: {
        modalFlg: Boolean,
        products: Array,
        productNum: Number,
    },
    watch: {
      countProduct(input) {
        if(isNaN(input)) {
          alert('숫자로만 입력해 주세요');
        } else if(input >= 11) {
          alert('숫자는 최대 10까지만 입력해 주세요');
          this.countProduct = 10;
        }
      }
    },
}
</script>
<style>
    
</style>