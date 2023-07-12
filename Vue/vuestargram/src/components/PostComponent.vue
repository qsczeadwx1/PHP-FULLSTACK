<template>
    <div class="post" v-for="boardData in $store.state.boardData" :key="boardData">
        <div class="post-img" :class="boardData.filter" :style="{ backgroundImage : `url('${boardData.img}')`}"></div>
        <div class="post-content">
            <p><strong>{{ boardData.name }}</strong></p>
            <p>{{ boardData.content }}</p>
            <p>{{ boardData.likes }} 좋아요</p>
            <hr>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PostComponent',
}
</script>
<style>
    
</style>