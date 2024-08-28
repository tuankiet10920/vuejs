<script setup>
import { RouterLink, RouterView } from 'vue-router'

let a1= 1;
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
  <RouterView/>
</template>




