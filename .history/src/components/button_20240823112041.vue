<script setup>
    const props = defineProps({
        message : String
    });
    
</script>

<template>
    <button type="button" class="button-component">
        Buy Now
    </button>
    <h1>{{ message }}</h1>
</template>

<style scoped>
    .button-component{
        border: none;
        background: orangered;
        color: #fff;
        font-size: 18px;
        padding: 10px 40px;
        transition: all .3s ease-in-out;
        width: fit-content;
    }
    .button-component:hover{
        background: brown;
        border-radius: 20px;
    }
</style>