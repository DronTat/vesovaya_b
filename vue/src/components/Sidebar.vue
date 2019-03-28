<template>
  <div class="sidebar">
    <div class="item" v-for="item in items" :key="item.id" @click="viewClick(item.component)">
      <div class="image">
        <img v-bind:src="item.picture" alt="">
      </div>
      <small>{{item.name}}</small>
    </div>
  </div>
</template>

<script>
export default {
    name: 'Sidebar',
    data(){
      return{
          items: [
              {
                  id: 1,
                  name: "Основное",
                  component: 'general',
                  picture: "img/general.png"
              },
              {
                  id: 2,
                  name: "Новое взвешивание",
                  component: 'weight',
                  picture: "img/weight48.png"
              },
              {
                  id: 3,
                  name: "Справочник",
                  component: 'catalog',
                  picture: "img/catalog48.png"
              },
              {
                  id: 4,
                  name: "Журнал",
                  component: 'journal',
                  picture: "img/journal48.png"
              }
          ]
      }
    },
    methods: {
        viewClick(tag){
            this.$emit('viewComponent', tag)
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .sidebar {
    position: absolute;
    width: 100px;
    /*left: 0;*/
    /*top: 0;*/
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
