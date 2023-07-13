<template>
    <!-- 등록 -->
    <Header @addItem="addItem(items)"/>

    <!-- 리스트 -->
    <Content :items="items" />
</template>
<script>
import Content from './Content.vue';
import Header from './Header.vue';

export default {
    name: 'App',
    data() {
        return {
            items: [],
        }
    },

    created() {
        this.getList(); // 컴포넌트가 생성될 때 getList()를 호출합니다.
    },
    methods: {
        addItem(data) {
            const newItem = {
                content: data.content,
                completed: 0,
            }
            axios.update('/api/items/'+ data.id, newItem)
            .then(res => {
                    this.items = res.data;
                })
                .catch(err => {
                    console.log(err);
                });
            
        },
        getList() {
            axios.get('/api/items')
                .then(res => {
                    this.items = res.data;
                })
                .catch(err => {
                    console.log(err);
                });
        },


    },
    components: {
        Content: Content,
        Header: Header,
    }
}

</script>
<style></style>