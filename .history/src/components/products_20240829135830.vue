<script setup>
import Product from './product.vue'
import { getData, add, addProduct } from '../../public/data/data.js'
import { ref } from 'vue'

const products = ref([])
const componentKey = ref(0)

function ReRenderComponent() {
    componentKey.value++
}

function clickDebug() {
    console.log(this.products);
}




getData()
    .then(arrPr => {
        if (!Array.isArray(arrPr)) {
            let array = []
            array.push(arrPr)
            arrPr = array
        }
        products.value = arrPr;
    });


</script>

<template>
    <div class="products">
        <Product v-for="element in products" :key="element.id" :id="element.id" :name="element.name"
            :price="element.price" :image="element.image" />
        <button @click="addProduct">Add Product</button>
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