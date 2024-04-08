<script setup>
const props = defineProps({
    pelicula: Object,
    categoria: Object
})
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
<AppLayout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                <div class=" flex flex-col space-y-4  text-gray-200">

                    <div :style="{backgroundImage: `url(${pelicula.imagen})`, backgroundPosition:'center', height: '20em',backgroundRepeat: 'no-repeat', backgroundSize: 'cover'  }" class="justify-end " >



                    </div>
                    <div class="">
                        <div class=" p-5  border-b-2 border-gray-700 ">
                            <h3 class="text-4xl  font-bold">{{ pelicula.titulo }}</h3>
                            <p class="mt-5">{{ pelicula.descripcion }}</p>
                            <p class="text-sm text-gray-500">Categoria:{{categoria.nombre}}</p>
                            <button class="mt-12 border-red-600 border-2 font-bold px-4 py-2 rounded-xl ">
                                <a :href="route('peliculas.show', pelicula.id)"> Anar-hi</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</AppLayout>
</template>

<style scoped>

</style>
