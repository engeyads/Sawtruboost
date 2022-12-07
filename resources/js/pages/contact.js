import { createApp } from 'vue'
import Contact from '@/components/Contact.vue'
const app = createApp({});
app.component('contact', Contact);
app.mount('#app');
