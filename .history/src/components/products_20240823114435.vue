<script setup>
    import ProductComponent from './product.vue';
    import lsProduct from '../../public/data/lsProduct.json';


    let string = 'Hello World!';
    let data = lsProduct;
    console.log(data);
    
    
</script>

<template>

    <div class="products">
        <ProductComponent v-for="el in data" :id="el.id" :name="el.name" :image="el.image" :price="el.price"/>
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