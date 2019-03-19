<template>
  <div class="sidebar">
    <div class="item">
      <a href="#"></a>
      <div class="image">
        <img src="img/general.png" alt="">
      </div>
      <small>Главная</small>
    </div>
    <div class="item">
      <a href="#"></a>
      <div class="image">
        <img src="img/weight48.png" alt="">
      </div>
      <small>Новое взвешивание</small>
    </div>
    <div class="item">
      <a href="#"></a>
      <div class="image">
        <img src="img/catalog48.png" alt="">
      </div>
      <small>Справочник</small>
    </div>
    <div class="item">
      <a href="#"></a>
      <div class="image">
        <img src="img/journal48.png" alt="">
      </div>
      <small>Журнал</small>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Sidebar',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .sidebar {
    position: absolute;
    width: 100px;
    left: 0;
    top: 0;
    height: 100%;
    background: #222d32;
    z-index: 0;
    padding-top: 10px;
  }
  .item{
    height: auto;
    text-align: center;
    display: block;
    overflow: hidden;
    padding: 5px 0;
  }
  .item small{
    margin: auto;
    color: #b8c7ce;
  }
  .item:hover small{
    color: white;
  }
  .item:hover {
    background: #1e282c;
    color: white;
    cursor: pointer;
  }
</style>
