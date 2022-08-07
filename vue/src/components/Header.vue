<!-- eslint-disable vue/multi-word-component-names -->
<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ title }}</a>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link class="nav-link" to="/">Student List</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="fields">Fields</router-link>
                </li>
                
            </ul>
        </div>
    </div>
    </nav>
</template>

<script>
export default{
    name: 'Header',
    props: {
        title: String,
    }
}
</script>