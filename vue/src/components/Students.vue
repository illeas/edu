<template>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Class</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email Address </th>
                    <th scope="col">Contact Number</th>
                </tr>
            </thead>
            <tbody v-for="student in student" :key="student.id">
                <tr class="table-secondary">
                    <th scope="row">{{ student.id }}</th>
                    <th scope="row">{{ student.class }}</th>
                    <th scope="row">{{ student.name }}</th>
                    <th scope="row">{{ student.email_address }}</th>
                    <th scope="row">{{ student.contact_number }}</th>
                </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
    import axios from 'axios';
import { response } from 'express';
    export default{
       name: 'StudentList',
       data(){
        return {
            student:Array
        }
       }, 
       created(){
            this.getStudent();
       },
       methods:{
        async getStudent(){
            let url = 'http://127.0.0.1:8000/api/student/';
            await axios.get(url).then(response => {
                this.student = response.data.student;
                console.log(this.student);
            }).catch(error => {
                console.log(error);
            });
        }
       },
       mounted(){
        console.log('Student list component mounted');
       }
    }
</script>