<template>
    <div class="form">
        <h1>Create New Product</h1>
        <div class="form-group">
            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name" placeholder="Input name">
        </div>
        <div class="form-group">
            <label for="price">Price: </label><br>
            <input type="number" name="price" id="price" placeholder="Input price">
        </div>
        <div class="form-group">
            <label for="image">Image</label><br>
            <input type="file" name="image" id="image" placeholder="Input image">
        </div>
        <div class="form-group">
            <label for="qty">Quantity</label><br>
            <input type="number" name="qty" id="qty" value="1" placeholder="Input quantity">
        </div>
        <Button />
    </div>
</template>

<script>
import Button from './button.vue'


export default {
    components: {
        Button
    }
}
</script>

<style>
.form {
    width: 40%;
    min-width: 40%;
    border: 1px solid red;
    padding: 20px 30px;
}

.form-group {
    width: 100%;
}

.form-group input {
    width: 100%;
}
</style>
