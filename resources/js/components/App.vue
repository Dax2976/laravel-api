<template>
    <div class="container">
        <div class="">
            <PostList/>
        </div>
    </div>
</template>

<script>
    import PostList from 'PostList.vue'

    export default{
        name:'App',
        components:{
            PostList,
        }
    }
</script>
