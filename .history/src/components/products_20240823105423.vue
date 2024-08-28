<script setup>
    import ProductComponent from './product.vue';
    import buttonComponent from './button.vue';
</script>

<template>
        <buttonComponent/>
    <div class="products">
        <!-- <ProductComponent/>
        <ProductComponent/>
        <ProductComponent/>
        <ProductComponent/> -->
    </div>
</template>

<style scoped>
    .products{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(calc(100% / 5), 1fr));
        gap: 20px;
    }
</style>