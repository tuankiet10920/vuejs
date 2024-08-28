<script setup>
    import ProductComponent from './product.vue';


    let data = JSON.parse(localStorage.getItem('lsProduct'));

    function checkIdExists(id, data){
        let flag = false;
        let index = null;
        
        data.forEach((element, key) => {
            if(element.id === id){
                flag = true;
                index = key;
            }
        });
        return {
            flag,
            index 
        };
    }
    
    const addProductIntoCart = (id) => { 
        let cart = JSON.parse(localStorage.getItem('cart'));
        console.log(checkIdExists(id, cart));
        
        
        // if(checkIdExists.flag == false){
        //     console.log(1);
            
        //     let index = id - 1;
        //     let obj = {
        //         id : id,
        //         name : data[index].name,
        //         price : data[index].price,
        //         image : data[index].image,
        //         qty : 1
        //     }
        //     cart.push(obj);
        //     localStorage.setItem('cart', JSON.stringify(cart));
        // }else{
        //     let pos = checkIdExists.index;
        //     cart[pos].qty++;
        //     cart.push(obj);
        //     localStorage.setItem('cart', JSON.stringify(cart));
        // }
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