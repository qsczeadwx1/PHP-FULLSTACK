<template>
    <div>
        <h1>Home</h1>
        <!-- 토큰이 있으면 메인페이지로 -->
        <button><router-link to="/login">Login페이지로</router-link></button>
        <!-- 토큰이 없으면 로그인으로 -->
        <button><router-link to="/main">Main페이지로</router-link></button>
    </div>
</template>
<script>
export default {
    name: 'HomeComponent',
}
</script>
<style></style>