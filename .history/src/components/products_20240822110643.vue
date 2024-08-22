<script setup>
    import ProductComponent from './product.vue'
</script>

<template>
    <div class="products">
        <ProductComponent/>
        <ProductComponent/>
        <ProductComponent/>
        <ProductComponent/>
    </div>
</template>

<style scoped>
    .products{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(4, 1fr));
        gap: 20px;
    }
</style>