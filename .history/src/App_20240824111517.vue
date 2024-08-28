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
      <li>
        Go to <RouterLink to="/cart">Cart</RouterLink>
      </li>
    </ul>
  </header>
</template>
