<script setup>
    import ProductComponent from './product.vue';


    let string = 'Hello World!';
    let data = JSON.parse(localStorage.getItem('lsProduct'));
    console.log(data);
    var value = (100000).toLocaleString(
  undefined, // leave undefined to use the visitor's browser 
             // locale or a string like 'en-US' to override it.
  { minimumFractionDigits: 2 }
);
console.log(value)
    
</script>

<template>
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