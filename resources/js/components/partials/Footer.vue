<template>
  <footer>
    <h3>I &hearts; Boolpress</h3>
  </footer>
</template>

<script>
export default {
  name: "Footer"
}
</script>

<style lang="scss" scoped>
footer{
  width: 100%;
  height: 60px;
  background-color: rgb(88, 88, 88);
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  bottom: 0;
  h3{
    color: white;
    font-weight: 700;
  }
}
</style>