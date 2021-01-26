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
    },
    created: function () {
    this.$http.interceptors.response.use(undefined, function (err) {
      return new Promise(function (resolve, reject) {
        if (err.status === 401 && err.config && !err.config.__isRetryRequest) {
          this.$store.dispatch(logout)
        }
        throw err;
      });
    });
  }
    }
</script>
