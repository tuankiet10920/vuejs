<template>

  <!-- header -->
  <Header />

  <!-- pages render here -->
  <RouterView />

</template>
<script>
import { RouterLink, RouterView } from 'vue-router'
import Header from './components/header.vue'
export default {
  components: {
    Header
  }
}

</script>