<template>
    <div class="general">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="weighting">
                        <div class="weight-val">
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221" v-bind:style="numberSvg[4]"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221" v-bind:style="numberSvg[3]"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221" v-bind:style="numberSvg[2]"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221" v-bind:style="numberSvg[1]"></use>
                            </svg>
                            <svg height="100">
                                <use xlink:href="../../public/svg/Seven_Segment_clip_art.svg#svg2221" v-bind:style="numberSvg[0]"></use>
                            </svg>
                        </div>
                        <div class="weight-button">
                            <div class="row justify-content-between no-gutters">
                                <div class="col bg-success font-weight-bold" id="stable-weight">Стабильный вес</div>
                                <div class="col-1 border"></div>
                                <div class="col border">Вес фиксации</div>
                                <div class="col border">{{random}}</div>
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
        data(){
            return{
                numberSvg: Array,
            }
        },
        computed:{
            random() {
                var min = -9999;
                var max = 99999;
                min = Math.ceil(min);
                max = Math.floor(max);
                var number = String(Math.floor(Math.random() * (max - min + 1)) + min);
                var arrayNumber = number.split('');
                this.number(arrayNumber.reverse());
                return number;
            },
        },
        methods: {
            number(array){
                var temp = [];
                // array.forEach(function (item) {
                //     temp.push(this.segment(item));
                // });
                array.forEach((item) => {
                    temp.push(this.segment(item));
                });
                this.numberSvg = temp;
            },
            segment(number) {
                switch (number){
                    case '0':
                        return{
                            '--segment-1' : 'yellow',
                            '--segment-2' : 'yellow',
                            '--segment-3' : 'yellow',
                            '--segment-4' : 'yellow',
                            '--segment-5' : 'yellow',
                            '--segment-6' : 'yellow',
                        };
                    case '1':
                        return{
                            '--segment-1' : 'yellow',
                            '--segment-2' : 'yellow'
                        };
                    case '2':
                        return{
                            '--segment-6' : 'yellow',
                            '--segment-1' : 'yellow',
                            '--segment-7' : 'yellow',
                            '--segment-4' : 'yellow',
                            '--segment-3' : 'yellow',
                        };
                    case '3':
                        return{
                            '--segment-6' : 'yellow',
                            '--segment-7' : 'yellow',
                            '--segment-1' : 'yellow',
                            '--segment-2' : 'yellow',
                            '--segment-3' : 'yellow',
                        };
                    case '4':
                        return{
                            '--segment-5' : 'yellow',
                            '--segment-7' : 'yellow',
                            '--segment-1' : 'yellow',
                            '--segment-2' : 'yellow',
                        };
                    case '5':
                        return{
                            '--segment-6' : 'yellow',
                            '--segment-7' : 'yellow',
                            '--segment-5' : 'yellow',
                            '--segment-2' : 'yellow',
                            '--segment-3' : 'yellow',
                        };
                    case '6':
                        return{
                            '--segment-6' : 'yellow',
                            '--segment-7' : 'yellow',
                            '--segment-5' : 'yellow',
                            '--segment-2' : 'yellow',
                            '--segment-3' : 'yellow',
                            '--segment-4' : 'yellow',
                        };
                    case '7':
                        return{
                            '--segment-1' : 'yellow',
                            '--segment-2' : 'yellow',
                            '--segment-6' : 'yellow',
                        };
                    case '8':
                        return{
                            '--segment-1' : 'yellow',
                            '--segment-2' : 'yellow',
                            '--segment-3' : 'yellow',
                            '--segment-4' : 'yellow',
                            '--segment-5' : 'yellow',
                            '--segment-6' : 'yellow',
                            '--segment-7' : 'yellow',
                        };
                    case '9':
                        return{
                            '--segment-1' : 'yellow',
                            '--segment-2' : 'yellow',
                            '--segment-3' : 'yellow',
                            '--segment-5' : 'yellow',
                            '--segment-6' : 'yellow',
                            '--segment-7' : 'yellow',
                        };
                    case '-':
                        return{
                            '--segment-7' : 'yellow',
                        };
                }
            }
        },
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .weighting{
        width: 100%;
        border: 1px solid white;
        border-radius: 4px;
        background: black;
    }
    .weight-val{
        height: 120px;
        display: flex;
        margin: 0 auto;
        padding: 10px 20%;
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