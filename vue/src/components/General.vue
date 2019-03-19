<template>
    <div class="general">
        <div class="input">
            <div class="weight-val" style="height: 62px">
                <span></span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'General',
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .weight-val{
        background-color: #1b1b1b;
        border-radius: 5px;
        border: 2px solid #00aa00;
        height: auto;
        color: yellow;
        font-size: 250%;
        display: flex;
        justify-content: center; /*Центрирование по горизонтали*/
        align-items: center;     /*Центрирование по вертикали */
    }
</style>