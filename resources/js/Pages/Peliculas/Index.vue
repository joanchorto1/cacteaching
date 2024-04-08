<script setup>
import {ref} from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    peliculas: Array,
    categorias: Array,
    peliculaInicio: Object
})
//conseguir un numero random entre 0 i series.length para la capçalera
const peliculaInicio = ref(props.peliculas[Math.floor(Math.random() * props.peliculas.length)]);
console.log(peliculaInicio.value)

</script>

<template>
    <AppLayout>


        <div class="bg-black">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="w-full flex flex-col space-y-4 text-gray-200">

                        <div :style="{backgroundImage: `url(${peliculaInicio.imagen})`, backgroundPosition:'center', height: '20em',backgroundRepeat: 'no-repeat', backgroundSize: 'cover'  }" class="justify-end " >
                            <div class="flex space-x-5 bg-black  p-5  bg-opacity-60">

                                <h3 class="text-4xl w-4/5 font-bold">{{ peliculaInicio.titulo }}</h3>
                                <button class="end-0 border-gray-50 px-5 py-2 rounded-xl border-2 ">
                                    <a :href="route('peliculas.preshow', peliculaInicio.id)">Ver</a>
                                </button>
                            </div>

                        </div>


                        <!--Series-->
                        <div class=" border-b-2 border-red-600 flex pb-5 items-center justify-between">
                            <h3 class="text-4xl font-bold">Peliculas populars</h3>

                        </div>


                        <template v-for="categoria in categorias">

                            <div class="flex items-center justify-between">
                                <h4 class="text-xl font-bold">{{ categoria.nombre }}</h4>
                            </div>

                            <div class="grid grid-cols-5 text-center border-b mb-5 border-gray-500 pb-5 gap-4">
                                <template v-for="pelicula in peliculas">
                                    <div v-if="pelicula.categoria_id === categoria.id" class="  bg-gray-800 p-4 rounded">
                                                <img :src="pelicula.imagen" alt="">
<!--                                        <img class="mb-3" src="/storage/fondo-welcome.jpeg" alt="">-->
                                        <p class="text-sm font-semibold"><a :href="route('peliculas.preshow', pelicula.id)">{{ pelicula.titulo }}</a> </p>
                                    </div>
                                </template>

                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>

</template>

<style scoped>

</style>
