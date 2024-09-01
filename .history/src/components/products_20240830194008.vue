<script setup>
import Product from './product.vue'
import { getData, add, addProduct } from '../../public/data/data.js'
import { ref, onMounted } from 'vue'
import { deleteProduct } from '../../public/data/data.js'

const products = ref([])


function clickDebug() {
    console.log(this.products);
}

function clickAddProduct() {
    addProduct()
        .then(() => {
            console.log('Product was added successfully')
            reGetData()
        })
        .catch((error) => {
            console.error("Error adding product:", error);
        })
}

onMounted(() => {

    onMounted(() => {
        this.$on('deleteProduct', (id) => {
            // Update products reactively by re-fetching data
            reGetData.bind(this)(id); // Pass deleted product ID for potential filtering
        });
    });
})

function reGetData() {
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
}

reGetData()


</script>

<template>
    <div class="products">
        <Product v-for="element in products" :key="element.id" :id="element.id" :name="element.name"
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