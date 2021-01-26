<template>
  <div class="container">
  <div id="app">

    <Header />

    <router-view></router-view>

    <Footer />
  </div>
  </div>
</template>


<script>
  import Header from './components/Header.vue';
  import Footer from './components/Footer.vue';

    export default{
    components: {
    Header,
    Footer
    }
    }
</script>
