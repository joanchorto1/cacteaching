<script setup>
import {ref} from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    series: Array,
    categorias: Array,
    serieInicio: Object
})
//conseguir un numero random entre 0 i series.length para la capçalera
const serieInicio = ref(props.series[Math.floor(Math.random() * props.series.length)]);
console.log(serieInicio.value)

</script>

<template>
    <AppLayout>


    <div class="bg-black text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg">
    <div class="w-full flex flex-col space-y-4 text-gray-200">

        <div :style="{backgroundImage: `url(${serieInicio.imagen})`, backgroundPosition:'center', height: '20em',backgroundRepeat: 'no-repeat', backgroundSize: 'cover'  }" class="justify-end " >
            <div class="flex space-x-5 bg-black  p-5  bg-opacity-60">

                <h3 class="text-4xl w-4/5 font-bold">{{ serieInicio.titulo }}</h3>
                <button class="end-0 border-gray-50 px-5 py-2 rounded-xl border-2 ">
                    <a :href="route('series.show', serieInicio.id)">Ver</a>
                </button>
            </div>

        </div>

        </div>


        <!--Series-->
        <div class=" border-b-2 border-red-600 flex pb-5 items-center justify-between">
            <h3 class="text-4xl font-bold">Series populars</h3>

        </div>


        <template v-for="categoria in categorias">

            <div class="flex items-center justify-between">
                <h4 class="text-xl font-bold">{{ categoria.nombre }}</h4>
            </div>

            <div class="grid grid-cols-5 text-center border-b mb-5 border-gray-500 pb-5 gap-4">
                <template v-for="serie in series">
                    <div v-if="serie.categoria_id === categoria.id" class="  bg-gray-800 p-4 rounded">

                        <img class="mb-3" :src="serie.imagen" alt="">
                        <p class="text-sm font-semibold"><a :href="route('series.show', serie.id)">{{ serie.titulo }}</a> </p>
                    </div>
                </template>

            </div>
        </template>
    </div>
            </div>
        </div>

    </AppLayout>

</template>

<style scoped>

</style>
