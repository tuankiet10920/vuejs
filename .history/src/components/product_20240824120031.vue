<template>
    <div class="box">
        <div class="image">
            <img src="../../public/img/product-1.webp" alt="product-1">
        </div>
        <div class="content">
            <div class="name">
                <p>Product 1</p>
            </div>
            <div class="price">
                <p>1000000đ</p>
            </div>
            <Buttom />
        </div>
    </div>
</template>

<script>
import Buttom from './button.vue'
export default {
    components: {
        Buttom
    }
}
</script>


<style scoped>
.box {
    width: 100%;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    padding: 20px 0px;
    transition: all .3s ease-in-out;
    border-radius: 10px;
}

.box:hover img {
    transform: scale(1.2);
}

.box:hover {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

.image {
    width: 100%;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image img {
    width: 70%;
    height: 80%;
    transition: all .3s ease-in-out;
}

.content {
    text-align: center;
}

.price {
    margin: 20px 0px;
}
</style>