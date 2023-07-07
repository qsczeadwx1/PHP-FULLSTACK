<template>
   <div class="bg_black" v-if="modalFlg">
    <div class="bg_white">
      <img :src="products[productNum].url">
      <h4>상품명 : {{ products[productNum].name }}</h4>
      <p>설명 : {{ products[productNum].content }}</p>
      <p>가격 :  {{ products[productNum].price }}원</p>
      <p>수량 :  {{ products[productNum].count }}개</p>
      <p>총가격 : {{ products[productNum].price * products[productNum].count }} 원</p>
      <button @click="$emit('plus')">수량증가</button>
      <button @click="$emit('minus')">수량감소</button>
      <br>
      <br>
      <button @click="$emit('closeModal')">취소</button>
    </div>
  </div>
</template>
<script>
export default {
    name : 'ProductModal',
    props: {
        modalFlg: Boolean,
        products: Array,
        productNum: Number,
    },
}
</script>
<style>
    
</style>