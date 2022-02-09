<template>
  <div class="post">
    <h4>{{post.title}}</h4>
    <p>{{breakText}}</p>
    <div class="data">{{changeDate}}</div>
  </div>
</template>

<script>
export default {
  name: "Post",

  props:{
    "post": Object
  },

  computed:{
    breakText(){
      return this.post.content.substr(0, 50) + "...";
    },

    changeDate(){
      const d = new Date(this.post.created_at);
      let day = d.getDate();
      let month = d.getMonth() + 1;
      const year = d.getFullYear();
      if(day < 10) day = "0" + day;
      if(month < 10) month = "0" + month;
      return `${day}/${month}/${year}`;
    }
  }
}
</script>

<style lang="scss" scoped>
.post{
  margin: 15px 0;
  .data{
    font-size: 12px;
  }
}
</style>