<script setup>
    import ProductComponent from './product.vue';
    import lsProduct from '../../public/data/lsProduct.json';


    let string = 'Hello World!';
    let data = lsProduct;
    console.log(data);
    
    const users = [
        {
            name : 'John',
            age : '23',
            address : '123'
        }
    ]
    
</script>

<template>

    <ul>
        <li v-for="(value, key, index) in users" :key="key">
            {{ key }}: {{ value }}({{ index }})
        </li>
    </ul>

    <div class="products">
        <ProductComponent v-for="el in data" :key="el.id" :id="el.id" :name="el.name" :image="el.image" :price="el.price"/>
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