<template>
  <main>
    <div class="ab-container">
      <Post 
      v-for="post in posts"
      :key="post.id"
      :post="post"
      />
    </div>
  </main>
</template>

<script>
import Post from "./partials/Post.vue"

export default {
  name: "Main",

  components:{
    Post
  },

  data(){
    return{
      apiUrl: "http://127.0.0.1:8000/api/posts",
      posts: null,
    }
  },

  mounted(){
    this.getPosts();
  },

  methods:{
    getPosts(){
      axios.get(this.apiUrl)
      .then(res => {
        this.posts = res.data;
      })
    }
  }
}
</script>

<style lang="scss" scoped>

</style>