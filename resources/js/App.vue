<template>
  <div>
    <Header />
    <Main />
    <Footer />
  </div>
</template>

<script>
import Header from "./components/partials/Header";
import Main from "./components/Main";
import Footer from "./components/partials/Footer";

export default {
  name: "App",
  components:{
    Header,
    Main,
    Footer
  }
}
</script>

<style lang="scss">

</style>