<template>
  <div class="main-field">
      <general></general>
  </div>
</template>

<script>
import General from "./General.vue";

export default {
    name: 'MainField',
    components: {
        General
    },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .main-field{
    margin-left: 100px;
  }
</style>
