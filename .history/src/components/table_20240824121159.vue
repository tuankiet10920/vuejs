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
                <td id="btn-delete" style="text-align: center;">
                    <button type="button">
                        <span class="material-symbols-outlined">
                            close
                        </span>
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
    padding: 15px 20px;
}

#image {
    width: 50px;
}
</style>