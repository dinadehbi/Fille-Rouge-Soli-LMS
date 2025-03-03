import { createRouter, createWebHistory } from 'vue-router';
import Contact from '../components/Contact.vue';

const routes = [
    { path: '/Contact', component: Contact },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
