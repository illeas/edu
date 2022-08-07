<template>
  <div>
    <Header title="Vue assessment" />
    <router-view></router-view>
  </div>
</template>


<script>
import Header from './components/Header.vue';

export default {
  name: 'App',
  components: {
    Header 
  }
}
</script>

<style>

</style>
