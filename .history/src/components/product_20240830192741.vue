<template>
    <div class="box">
        <div class="image">
            <img :src="src" alt="product-1">
        </div>
        <div class="content">
            <div class="name">
                <p>{{ product.name }}</p>
            </div>
            <div class="price">
                <p>{{ product.price.toLocaleString() }}đ</p>
            </div>
            <Button @click="clickDeleteProduct" />
        </div>
    </div>
</template>

<script>
import Button from './button.vue'
import { deleteProduct } from '../../public/data/data.js'


export default {
    props: {
        id: String,
        name: String,
        price: Number,
        image: String,
        qty: Number
    },
    methods: {
        clickDeleteProduct() {
            deleteProduct(this.id)
                .then(() => {
                    console.log('Product was deleted successfully');
                    this.$emit('deleteProduct', this.id);
                })
                .catch((error) => {
                    console.log(error.message);
                })
        }
    },
    data() {
        return {
            product: {
                id: this.id,
                name: this.name,
                price: this.price,
                image: this.image,
                qty: 1
            },
            src: '../../public/img/' + this.image
        }
    },
    components: {
        Button
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