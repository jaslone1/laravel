<template>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/rides" class="nav-link">Cycling The City</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/addRide" class="nav-link">Add rides</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/bikes" class="nav-link">check the status of your bike</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/addbike" class="nav-link">add bike</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/login" class="nav-link">login</router-link>
        </li>
        <li>
        <span v-if="isLoggedIn"> | <a @click="logout">Logout</a></span>
        </li>
        <li class="nav-item">
          <router-link to="/register" class="nav-link">register</router-link>
        </li>
      </ul>
    </nav>

</template>
<script>
  export default {
    computed : {
      isLoggedIn : function(){ return this.$store.getters.isLoggedIn}
    },
    methods: {
      logout: function () {
        this.$store.dispatch('logout')
        .then(() => {
          this.$router.push('/')
        })
      }
    },
  }
</script>
