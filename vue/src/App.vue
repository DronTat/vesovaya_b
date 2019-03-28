<template>
    <div id="app">
        <sidebar @viewComponent="viewClicked"></sidebar>
        <main-field :viewComponent="viewTag"></main-field>
    </div>
</template>

<script>
    import Sidebar from "./components/Sidebar.vue";
    import MainField from "./components/MainField.vue";

    export default {
        name: 'app',
        data(){
            return{
                viewTag: {}
            }
        },
        components: {
            MainField,
            Sidebar,
        },
        methods:{
            viewClicked(tag){
                this.viewTag = tag
            }
        }
    }
</script>

<style>
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        /*margin-top: 60px;*/
    }
</style>
