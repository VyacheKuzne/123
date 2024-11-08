import { createApp } from 'vue';
import BtnCartComponent from './components/BtnCartComponent.vue';
import ProfileComponent from './components/ProfileComponent.vue';
import CrossComponent from './components/CrossComponent.vue';

const app = createApp({});
app.component('btn-cart', BtnCartComponent);
app.component('log_in', ProfileComponent);
app.component('btn-cross', CrossComponent);
app.mount('#app');