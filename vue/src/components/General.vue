<template>
    <div class="general">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="weighting">
                        <div class="weight-val">
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221"></use>
                            </svg>
                        </div>
                        <div class="weight-button">
                            <div class="row justify-content-between no-gutters">
                                <div class="col bg-success font-weight-bold" id="stable-weight">Стабильный вес</div>
                                <div class="col-1 border"></div>
                                <div class="col border">Вес фиксации</div>
                                <div class="col border">123545</div>
                            </div>
                            <div class="row align-items-center no-gutters">
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-sm btn-block">Обнуление</button>
                                </div>
                                <div class="col-2"></div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-sm btn-block">Принудительная фиксация веса</button>
                                </div>
                            </div>
                        </div>
                        <div class="weight-status">
                            <span>Взвешивание завершено</span>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <div class="camera"></div>
                        </div>
                        <div class="col-6">
                            <div class="camera"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <journal></journal>
    </div>
</template>

<script>
    import Journal from "./Journal";
    export default {
        name: 'General',
        components: {Journal},
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .weighting{
        width: 100%;
        border: 1px solid #4f5a67;
        border-radius: 3px;
        background-color: #fff;
    }
    .weight-val{
        /*background-color: #1b1b1b;*/
        /*border-radius: 5px;*/
        /*border: 2px solid #00aa00;*/
        height: 100px;
        width: 65%;
        /*color: blue;*/
        /*font-size: 250%;*/
        display: flex;
        /*justify-content: center; !*Центрирование по горизонтали*!*/
        /*align-items: center;     !*Центрирование по вертикали *!*/
        margin: 10px auto 10px;
    }
    .weight-button,
    .weight-status{
        border-top: 1px solid #e7ecf1;
    }
    .camera{
        width: 100%;
        height: 338px;
        background-color: grey;
    }
    #stable-weight{
        color: yellow;
    }
</style>