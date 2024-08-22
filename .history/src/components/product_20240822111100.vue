<template>
    <div class="box">
        <div class="image">
            <img src="../../public/img/product-1.webp" alt="">
        </div>
        <div class="content">
            <div class="name">
                <p>Product 1</p>
            </div>
            <div class="price">
                <p>20000đ</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .box{
        width: 100%;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        padding: 20px 0px;
    }
    .box:hover img{
        transform: scale(1.2);
    }
    .image{
        width: 100%;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .image img{
        width: 70%;
        height: 80%;
        transition: all .3s ease-in-out;
    }
    .content{
        text-align: center;
    }
</style>