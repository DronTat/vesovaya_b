<template>
  <div class="main-field">
      <router-view></router-view>
  </div>
</template>

<script>
export default {
    name: 'MainField',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .main-field {
      padding-top: 30px;
      padding-left: 10px;
      margin-left: 100px;
      background-color: #eef1f5;
  }
</style>
