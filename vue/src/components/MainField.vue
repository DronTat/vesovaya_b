<template>
  <div class="main-field">
      <component v-bind:is="viewComponent"></component>
  </div>
</template>

<script>
import General from "./General.vue";
import Catalog from "./Catalog";
import Weight from "./Weight";
import Journal from "./Journal";

export default {
    name: 'MainField',
    props: ['viewComponent'],
    components: {
        Journal,
        Weight,
        Catalog,
        General,
    },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .main-field{
    margin-left: 110px;
  }
</style>
