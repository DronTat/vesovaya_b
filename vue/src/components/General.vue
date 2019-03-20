<template>
    <div class="general">
        <div class="row">
            <div class="col-2">
                <div class="weight-val">
                    <span>88888</span>
                </div>
                <div class="weight-button">
                    <button type="button" class="btn btn-primary btn-sm btn-block">Обнуление</button>
                    <button type="button" class="btn btn-primary btn-sm btn-block">Принудительная фиксация веса</button>
                    <button type="button" class="btn btn-primary btn-sm btn-block">Новое взвешивание</button>
                </div>
                <div class="weight-status">
                    <span>Взвешивание завершено</span>
                </div>
            </div>
            <div class="col-10">

            </div>
        </div>
        <div class="row">

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
        width: 70%;
        background-color: #1b1b1b;
        border-radius: 5px;
        border: 2px solid #00aa00;
        height: 62px;
        color: yellow;
        font-size: 250%;
        display: flex;
        justify-content: center; /*Центрирование по горизонтали*/
        align-items: center;     /*Центрирование по вертикали */
        margin: 50px auto 10px;
    }
</style>