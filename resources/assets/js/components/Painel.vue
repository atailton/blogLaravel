<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{titulo}}</div>

            <div class="panel-body">
                <slot></slot>
            </div>

        </div>
</template>

<script>
    export default {
        props:['titulo', 'cor'],
        computed:{
            defineCor: function(){
                return "panel "+ (this.cor || "panel-default");
            }
        }
    }
</script>

<style type="text/css" media="screen">

    .blue{
        border-color: #ff25d3;
    }

    .blue > .panel-heading {
        color: #aeff25;
        background-color: #ff25d3;
        border-color: #ff25d3;
    }


</style>