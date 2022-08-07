<template>
    <div class="container">
        <table class="table table-hove">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Class</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Contact Number</th>
                </tr>
            </thead>
            <tbody v-for="studentlist in studentlist" :key="studentlist.id">
                <tr class="table-secondary">
                    <th scope="row">{{ studentlist.id }}</th>
                    <th scope="row">{{ studentlist.class }}</th>
                    <th scope="row">{{ studentlist.name }}</th>
                    <th scope="row">{{ studentlist.email_address }}</th>
                    <th scope="row">{{ studentlist.contact_number }}</th>
                </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
import axios from 'axios';

    export default{
        name: 'StudentList',
        data(){
            return{
                studentlist: Array
            }
        }, 
        created(){
            this.getStudent();
        },
        methods: {
            async getStudent(){
                let url = 'http://127.0.0.1:8000/api/student';
                await axios.get(url).then(response => {
                    this.studentlist = response.data.student;

                }).catch(error => {
                    console.log(error);
                });
            }
        },
        mounted(){
            console.log('Student list component mounted!');
        }
    }
</script>