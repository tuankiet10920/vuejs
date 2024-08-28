<script setup>
    import ProductComponent from './product.vue';


    let string = 'Hello World!';
    let data = JSON.parse(localStorage.getItem('lsProduct'));
    
    const addProductIntoCart = (id) => {
        const index = id - 1;
        let obj = {
            id : id,
            name : data[index].name,
            price : data[index].price,
            image : data[index].image,
            qty : 1
        }
        let cart = JSON.parse(localStorage.getItem('cart'));
        cart.push(obj);
        localStorage.setItem('cart', JSON.stringify(cart));
    }

</script>

<template>
    <div class="products">
        <ProductComponent @click="addProductIntoCart(el.id)" v-for="el in data" :key="el.id" :id="el.id" :name="el.name" :image="el.image" :price="el.price"/>
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