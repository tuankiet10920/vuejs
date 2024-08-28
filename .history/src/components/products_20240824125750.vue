<template>
    <div class="products">
        <Product />
        <Product />
        <Product />
        <Product />
    </div>
</template>

<script>
import Product from './product.vue'
export default {
    components: {
        Product
    },
    data() {

    }

}
</script>

<style scoped>
.products {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(calc(100% / 5), 1fr));
    gap: 20px;
}
</style>