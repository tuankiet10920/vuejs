<script setup>
    let cart = JSON.parse(localStorage.getItem("cart"));
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
            <tr v-for="(value, key) in cart">
                <td>{{ key + 1 }}</td>
                <td>{{ value.name }}</td>
                <td>{{ value.image }}</td>
                <td>{{ (value.price).toLocaleString() }}</td>
                <td id="qty">
                    <ul>
                        <li>-</li>
                        <li>{{ value.qty }}</li>
                        <li>+</li>
                    </ul>
                </td>
                <td>{{ (value.price * value.qty).toLocaleString() }}</td>
                <td style="text-align: center;">
                    <span class="material-symbols-outlined delete-btn">
                        delete
                    </span>
                </td>
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
</style>