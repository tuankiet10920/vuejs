<script setup>
import Product from './product.vue'
import { getData, add, addProduct } from '../../public/data/data.js'

let products = []


function clickDebug() {
    console.log(this.products);
}





getData()
    .then(products => {
        if (!Array.isArray(products)) {
            let array = []
            array.push(products)
            products = array
        }
        this.products = products;
    });

</script>

<template>
    <div class="products">
        <Product v-for="element in products" :key="element.id" :id="element.id" :name="element.name"
            :price="element.price" :image="element.image" />
        <button @click="addProduct">adas</button>
    </div>
</template>







<style scoped>
.products {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(calc(100% / 5), 1fr));
    gap: 20px;
}
</style>