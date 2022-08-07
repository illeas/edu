import StudentList from '../components/StudentList.vue';
import AddFields from '../components/AddFields.vue';
import AddStudent from '../components/AddStudent.vue';
import { createRouter, createWebHistory } from 'vue-router';


const routes = [
    {
        name: 'StudentList',
        path: '/',
        component: StudentList
    }, {
        name: 'AddFields',
        path: '/addfields',
        component: AddFields
    }, {
        name: 'AddStudent',
        path: '/addstudent',
        component: AddStudent
    },
];

const router = createRouter({
    history: createWebHistory(), routes
});

export default router;