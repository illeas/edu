<template>
    <div>
      <Header title="Vue Assessment"/>
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

