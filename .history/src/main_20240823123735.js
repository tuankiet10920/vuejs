import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import lsProduct from '../public/data/lsProduct.json';

if(!localStorage.getItem('lsProduct')){
    localStorage.setItem('lsProduct', JSON.stringify(lsProduct));
}

const app = createApp(App)

app.use(router)

app.mount('#app')
