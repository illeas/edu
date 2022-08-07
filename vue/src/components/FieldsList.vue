<template>
    <div class="container">
        <table class="table table-hove">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Admission Date</th>
                    <th scope="col">Title</th>
                    <th scope="col">Type</th>
                    <th scope="col">Blood group</th>
                    <th scope="col">Height</th>
                    <th scope="col">Weight</th>
                </tr>
            </thead>
            <tbody v-for="fieldslist in fieldslist" :key="fieldslist.id">
                <tr class="table-secondary">
                    <th scope="row">{{ fieldslist.id }}</th>
                    <th scope="row">{{ fieldslist.student_id }}</th>
                    <th scope="row">{{ fieldslist.date_of_birth }}</th>
                    <th scope="row">{{ fieldslist.shift }}</th>
                    <th scope="row">{{ fieldslist.admission_date }}</th>
                    <th scope="row">{{ fieldslist.title }}</th>
                    <th scope="row">{{ fieldslist.type }}</th>
                    <th scope="row">{{ fieldslist.blood_group }}</th>
                    <th scope="row">{{ fieldslist.height }}</th>
                    <th scope="row">{{ fieldslist.weight }}</th>
                </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
import axios from 'axios';

    export default{
        name: 'FieldsList',
        data(){
            return{
                fieldslist: Array
            }
        }, 
        created(){
            this.getFieldslist();
        },
        methods: {
            async getFieldslist(){
                let url = 'http://127.0.0.1:8000/api/getFields';
                await axios.get(url).then(response => {
                    this.fieldslist = response.data.fields;
                }).catch(error => {
                    console.log(error);
                });
            }
        },
        mounted(){
            console.log('Student fields list component mounted!');
        }
    }
</script>