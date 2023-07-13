<template>
    <div class="header1">
        <h1>TODO List</h1>
        <input type="text" name="todoinsert" id="todoinsert">
        <button type="button" @click="$emit('addItem')">등록</button>
    </div>
</template>
<script>
export default {
    name: 'Header'
}
</script>
<style>
    #todoinsert {
        border: solid 1px black;
    }
    .header1 {
        text-align: center;
        width: 500px;
        height: 300px;
        border: solid 1px black;
        vertical-align: middle;
        background-color: skyblue;
    }
</style>