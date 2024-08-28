<template>
    <div class="products">
        <Product />
    </div>
</template>

<script>
import Product from './product.vue'

export default {
    methods: {
        clickDebug() {
            console.log(this.products);
        }
    },
    components: {
        Product
    },
    data() {
        return {
            products: JSON.parse(localStorage.getItem('lsProduct'))
        }
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