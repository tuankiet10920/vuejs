<script setup>
import Product from './product.vue'
import { getData, add, addProduct } from '../../public/data/data.js'
import { ref } from 'vue'

const products = ref([])
const componentKey = ref(0)

function ReRenderComponent() {
    componentKey.value++
    console.log(componentKey.value);
}

function clickDebug() {
    console.log(this.products);
}

function clickAddProduct() {
    addProduct()
    ReRenderComponent()
}


getData()
    .then(arrPr => {
        if (!Array.isArray(arrPr)) {
            let array = []
            array.push(arrPr)
            arrPr = array
        }
        products.value = arrPr;
        console.log(11111);
    });



</script>

<template>
    <div class="products">
        <Product v-for="element in products" :key="componentKey" :id="element.id" :name="element.name"
            :price="element.price" :image="element.image" />
        <button @click="clickAddProduct">Add Product</button>
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