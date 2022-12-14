import StudentList from '../components/StudentList.vue';
import FieldsList from '../components/FieldsList'
import AddFields from '../components/AddFields.vue';
import AddStudent from '../components/AddStudent.vue';
import EditStudent from '../components/editStudent.vue';
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
    },{
        name: 'FieldsList',
        path: '/fieldslist',
        component: FieldsList
    },{
        name: 'EditStudent',
        path: '/student/edit/:id?',
        component: EditStudent
    }
];

const router = createRouter({
    history: createWebHistory(), routes
});

export default router;