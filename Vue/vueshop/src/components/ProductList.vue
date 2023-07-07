<template>
    <div>
      <img :src="products.url" alt="사진">
      <h4 @click="$emit('openModal');">{{ products.name }}</h4>
      <p>{{ products.price }} 원</p>
      <p>수량 : {{ products.count }} 개</p>
    </div>
  </template>
  
  <script>
  export default {
      name: 'ProductList',
      props: {
        products: Object,
      },
  }
  </script>
  