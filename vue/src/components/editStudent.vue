<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-danger mt-4" v-if="errors.length">
                    <ul class="mb-0">
                        <li v-for="(error, index) in errors" :key="index">
                            {{ error }}
                        </li>
                    </ul>
                </div>
                <form @submit.prevent="updateStudent" novalidate>
                    <fieldset>
                        <div class="form-group">
                          <label class="form-level mt-4">Student Class</label>
                          <input type="text" name="" class="form-control" v-model="students.class" placeholder="Enter student class" aria-describedby="helpId">
                          <!-- <small id="helpId" class="text-muted">Help text</small> -->
                        </div>
                        <div class="form-group">
                          <label class="form-level mt-4">Student name</label>
                          <input type="text" name="" class="form-control" v-model="students.name" placeholder="Enter student name">
                        </div>
                        <div class="form-group">
                          <label class="form-level mt-4">Email</label>
                          <input type="email" name="" class="form-control" v-model="students.email_address" placeholder="Student Email">
                        </div>
                        <div class="form-group">
                          <label class="form-level mt-4">Contact Number</label>
                          <input type="number" name=""  class="form-control" v-model="students.contact_number" placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                          <label class="form-level mt-4">Password</label>
                          <input type="password" name="" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-primary mt-4">Update</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default{
    name: 'EditStudents',
    data(){
        return {
            students: {},
            class: '',
            name: '',
            email_address: '',
            contact_number: '',
            password: '',
            errors: [],
        }
    },
    created(){
        this.getStudentByID();
    },
    methods: {
        async getStudentByID(){
            let url = `http://127.0.0.1:8000/api/getStudent/${this.$route.params.id}`;
            await axios.get(url).then(response => {
                this.students = response.data;
            });
        },
        async updateStudent(){
            this.errors = [];
            if(!this.students.class){
                this.errors.push("This class is required");
            }
            if(!this.students.name){
                this.errors.push("Name is required");
            }
            if(!this.students.email_address){
                this.errors.push("Email address is required");
            }
            if(!this.students.contact_number){
                this.errors.push("Contact Number is required");
            }

            if(!this.errors.length){
                let formData = new FormData();
                formData.append('class', this.students.class);
                formData.append('name', this.students.name);
                formData.append('email_address', this.students.email_address);
                formData.append('contact_number', this.students.contact_number);
                if(this.students.password){
                    formData.append('password', this.students.password);
                }
               
                let url = `http://127.0.0.1:8000/api/updateStudent/${this.$route.params.id}`;
                await axios.post(url, formData).then((response) => { 
                    console.log(response); 
                    if(response.status == 200){
                        alert(response.data.message);
                    }else{
                        console.log('error');
                    }
                }).catch(error => {
                    this.errors.push(error.response);
                });
            }
        }
    },
    mounted: function(){
        console.log('Edit component........');
    }
}
</script>