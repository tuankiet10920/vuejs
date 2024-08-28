<template>
    <table border="1px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>
                    <img id="image" src="../../public/img/product-1.webp" alt="product-1">
                </td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td style="text-align: center;">
                    <button id="btn-delete" type="button">
                        Del
                    </button>
                </td>
            </tr>
            <tr>
                <td colspan="5">Subtotal</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {

}
</script>

<style>
table {
    border-collapse: collapse;
}

th,
td {
    padding: 15px 40px;
}

#image {
    width: 70px;
}

#btn-delete {
    border: none;
    padding: 10px 25px;
    background: orangered;
    color: #fff;
    font-size: 18px;
    border-radius: 10px;
}

#btn-delete:hover {
    background: #822706;
}
</style>