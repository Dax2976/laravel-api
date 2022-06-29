<template>
        <div v-if="posts.length" class="my-5">
            <div class="card text-center" v-for="post in posts" :key="post.id">
                <div class="card-body">
                    <h2>{{post.title}}</h2>
                    <p>{{post.description}}</p>
                    <img :src="`{{post.image}}`" class="img-fluid w-50" alt="">
                </div>
            </div>
        </div>
</template>

<script>
    import axios from 'axios';

        export default{
            name:'PostList',
            data(){
                return{
                    posts:[],
                }
            },
            methods:{
                getPosts(){
                    axios.get("/api/posts").then((response)=>{
                        this.posts = response.data.posts;
                        console.log(posts)
                    })
                }
            },
            mounted(){
                this.getPosts();
            }
        }
        
</script>
