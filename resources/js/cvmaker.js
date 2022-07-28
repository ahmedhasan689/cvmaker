import {createApp} from '@vue/runtime-dom';
import Content from "./components/form/form.vue";


const cvmaker = createApp({}).component('Content', Content).mount('#form');
