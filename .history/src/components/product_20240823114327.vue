<script setup>
    import buttonComponent from './button.vue';

    const props = defineProps({
        key : Number,
        name : String,
        price : Number,
        image : String
    });

    const srcImage ="../../public/img/" + props.image;
    
    
</script>

<template>
    <div class="box">
        <div class="image">
            <img :src="srcImage" alt="">
        </div>
        <div class="content">
            <div class="name">
                <p>{{ name }}</p>
            </div>
            <div class="price">
                <p>{{ price }}đ</p>
            </div>
            <buttonComponent/>
        </div>
    </div>
</template>

<style scoped>
    .box{
        width: 100%;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        padding: 20px 0px;
        transition: all .3s ease-in-out;
    }
    .box:hover img{
        transform: scale(1.2);
    }
    .box:hover{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
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
    .price{
        margin: 20px 0px;
    }
</style>