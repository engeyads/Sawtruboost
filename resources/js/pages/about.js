import { createApp } from 'vue'
import About from '@/components/About.vue'
const app = createApp({});
app.component('about', About);
app.mount('#app');
