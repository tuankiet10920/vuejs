<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
<!-- <RouterLink to="/">Home</RouterLink> -->
  <header>
    <ul>
      <li>
        <RouterLink to="/">Home</RouterLink>
      </li>
      <li>
        <RouterLink to="/about">About</RouterLink>
      </li>
    </ul>
  </header>

  <RouterView />
</template>




