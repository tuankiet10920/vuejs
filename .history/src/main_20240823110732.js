import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)
let a1= 1;
app.use(router)

app.mount('#app')
