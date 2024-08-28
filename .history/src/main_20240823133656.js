import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import lsProduct from '../public/data/lsProduct.json';

if(!localStorage.getItem('lsProduct')){
    localStorage.setItem('lsProduct', JSON.stringify(lsProduct));
}
if(!localStorage.getItem('cart')){
    let cart = [];
    localStorage.setItem('cart', JSON.stringify(cart));
}
const app = createApp(App)

app.use(router)

app.mount('#app')
