<script setup>
    let cart = JSON.parse(localStorage.getItem("cart"));
    let f_check_length_cart = false;
    
    if(cart.length > 0){
        f_check_length_cart = true;
    }



    function subtotal(array){
        let subtotal = 0;
        array.forEach(element => {
            subtotal += element.qty * element.price;
        });
        return subtotal;
    }
</script>

<template>
    <table border="1px" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>QTY</th>
                <th>TOTAL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr v-if="f_check_length_cart" v-for="(value, key) in cart">
                <td>{{ key + 1 }}</td>
                <td>{{ value.name }}</td>
                <td>{{ value.image }}</td>
                <td>{{ (value.price).toLocaleString() }}</td>
                <td id="qty">
                    <ul>
                        <li>
                            <button @click="increaseQtyInCart(key)" id="decrease" type="button">
                                <span class="material-symbols-outlined">
                                    remove
                                </span>
                            </button>
                        </li>
                        <li id="number_qty">{{ value.qty }}</li>
                        <li>
                            <button id="increase" type="button">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </button>
                        </li>
                    </ul>
                </td>
                <td>{{ (value.price * value.qty).toLocaleString() }}</td>
                <td style="text-align: center;">
                    <span class="material-symbols-outlined delete-btn">
                        delete
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>You don't have any orders!</span>
                </td>
            </tr>
            <tr>
                <td colspan="5">SUBTOTAL</td>
                <td>{{ subtotal(cart).toLocaleString() }}</td>
            </tr>
        </tbody>
    </table>
</template>

<style scoped>
    th, td{
        padding: 20px;
    }
    .delete-btn{
        cursor: pointer;
        transition: all .3s ease-in-out;
    }
    .delete-btn:hover{
        transform: scale(1.2);
        color: orangered;
    }
    #qty{
        text-align: center;
    }
    #qty ul{
        display: flex;
        align-items: center;
    }
    #number_qty{
        margin: 0px 20px;
        font-size: 20px;
    }
</style>