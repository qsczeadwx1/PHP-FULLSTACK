<template>
    <div>
        <ul>
            <li v-for="item in items" :key="item">
                <input id="completedflg" type="checkbox" @click="toggleCompleted(item)">
                <span :class="item.completed == 1 ? 'completed' : '' ">{{ item.content }}</span>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    name: 'Content',
    data() {
        return {
            
        };
    },
    methods: {
        toggleCompleted(item) {
            let checkbox = document.getElementById('completedflg');
            if(checkbox.checked) {
                item.completed = 1;
                console.log(item);
            } else {
                item.completed = 0;
                console.log(item);
            }
        },
    },
    props: {
        items: Object,
    },
}
</script>
<style>
.completed {
    text-decoration: line-through;
}
</style>