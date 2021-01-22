<template>
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/create" class="nav-link">Create Product</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/products" class="nav-link">Products</router-link>
        </li>
      </ul>
    </nav><br />
      <router-view></router-view>

  </div>
</template>

<script>
    export default{}
</script>
