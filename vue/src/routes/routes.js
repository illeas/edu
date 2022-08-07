import Students from '../components/Students.vue';
import Fields from '../components/Fields.vue'; 
import { createRouter, createWebHistory } from 'vue-router';


const routes = [
    {
        name: 'StudentList',
        path: '/',
        component: Students
    },{
        name:'Fields',
        path:'/fields',
        component: Fields
    }
];


const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;

