<script setup>
    import ProductComponent from './product.vue';


    let data = JSON.parse(localStorage.getItem('lsProduct'));

    function checkIdExists(id, data){
        let flag = false;
        data.forEach(element => {
            if(element.id === id){
                flag = true;
            }
        });
        return flag;
    }
    
    const addProductIntoCart = (id) => {
        let cart = JSON.parse(localStorage.getItem('cart'));
        if(!checkIdExists(id, cart)){
            let index = id - 1;
            let obj = {
                id : id,
                name : data[index].name,
                price : data[index].price,
                image : data[index].image,
                qty : 1
            }
            cart.push(obj);
            localStorage.setItem('cart', JSON.stringify(cart));
        }else{

        }
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