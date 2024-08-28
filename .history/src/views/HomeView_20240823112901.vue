<script setup>
    import Products from "../components/products.vue";

    let srcImage ='"' +  "../../public/img/" + 1000 + '"';
    console.log(srcImage);
</script>

<template>
  <h1>Home</h1>
  <!-- products -->
  <Products/>


</template>