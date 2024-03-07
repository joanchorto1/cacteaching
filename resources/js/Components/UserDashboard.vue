<script setup>
import {router} from "@inertiajs/vue3";
import {random} from "nanoid";
import {ref} from "vue";

const props = defineProps({

    series: Array,
    categorias: Array,
    peliculas: Array,


})
//conseguir un numero random entre 0 i series.length para la capçalera
const serie = ref(props.series[Math.floor(Math.random() * props.series.length)]);
console.log(serie.value)









</script>

<template>
    <div class="w-full flex flex-col space-y-4 text-gray-200">

            <div style="background-image: url('/storage/fondo-welcome.jpeg'); height: 20em;background-repeat: no-repeat; background-size: cover;  " class="justify-end" >
                <div class="bg-black w-1/2 p-5 rounded-xl bg-opacity-80">

                    <h3 class="text-4xl  font-bold">{{ serie.titulo }}</h3>
                    <p class="mt-5">{{serie.descripcion }}</p>
                </div>

            </div>


        <!--Series-->
        <div class=" border-b-2 border-red-600 flex pb-5 items-center justify-between">
            <h3 class="text-4xl font-bold">Series populars</h3>
            <a href="#" class="text-red-600">Veure totes</a>
        </div>

        <template v-for="categoria in categorias">

            <div class="flex items-center justify-between">
                <h4 class="text-xl font-bold">{{ categoria.nombre }}</h4>
            </div>

            <div class="grid grid-cols-5 text-center gap-4">
                <template v-for="serie in series">
                    <div v-if="serie.categoria_id === categoria.id" class="bg-gray-800 p-4 rounded">
                        <!--        <img src="{{serie.url}}" alt="">-->
                        <img class="p-5 " src="/storage/fondo-welcome.jpeg" alt="">
                        <p class="text-sm font-semibold"><a :href="route('series.show', serie.id)">{{ serie.titulo }}</a> </p>
                    </div>
                </template>

            </div>
        </template>
        <!--Pelicules-->
        <div class=" border-b-2 border-red-600 flex pb-5 items-center justify-between">
            <h3 class="text-4xl font-bold">Pelicules populars</h3>
            <a href="#" class="text-red-600">Veure totes</a>
        </div>
        <!--Series-->
        <template v-for="categoria in categorias">

            <div class="flex items-center justify-between">
                <h4 class="text-xl font-bold">{{ categoria.nombre }}</h4>
            </div>

            <div class="grid grid-cols-5 gap-4">
                <template v-for="pelicula in peliculas">
                    <div v-if="pelicula.categoria_id === categoria.id" class="bg-gray-800 p-4 rounded">
                        <!--        <img src="{{pelicula.url}}" alt="">-->
<!--                        <img src="/storage/fondo-welcome.jpeg" alt="">-->
                        <p class="text-sm font-semibold">{{ pelicula.titulo }} </p>                    </div>
                </template>

            </div>
        </template>


    </div>
</template>

<style scoped>

</style>
