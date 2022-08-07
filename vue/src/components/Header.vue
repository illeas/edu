<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <router-link class="navbar-brand" to="/">{{ title }}</router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    
                    <li class="nav-item">
                        <router-link class="nav-link" to="/">Students Details</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/fieldslist">Students Fields</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/addstudent">Add Student</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/addfields">Add Student Fields</router-link>
                    </li>
                </ul>
                
                </div>
            </div>
            </nav>
    </div>
</template>


<script>
    export default{
        name: 'Header',
        props: {
            title: String
        }
    }
</script>