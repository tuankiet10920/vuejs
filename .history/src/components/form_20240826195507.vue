<template>
    <div class="form">
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="Input name">
        </div>
        <div class="form-group">
            <label for="price">Price: </label>
            <input type="number" name="price" id="price" placeholder="Input price">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" placeholder="Input image">
        </div>
        <div class="form-group">
            <label for="qty">Quantity</label>
            <input type="number" name="qty" id="qty" value="1" placeholder="Input quantity">
        </div>

    </div>
</template>

<script>
export default {
    components: {

    }
}
</script>

<style></style>
