<script setup>
import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    categorias: Array,
})

const data = reactive ({
    form:{
        titulo: '',
        descripcion: '',
        imagen: null,
        categoria_id: '',
        video: null,



    }
});
const handleImagenChange = (event) => {
    data.form.imagen = event.target.files[0];
};

const handleVideoChange = (event) => {
    data.form.video = event.target.files[0];
};
const submitForm = () => {
    console.log(data.form);
    Inertia.post(route('peliculas.store'), data.form);
}
</script>

<template>
    <AppLayout>


        <div class="max-w-md mt-24 mx-auto">
            <form @submit.prevent="submitForm"  >
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="titulo">
                        Título
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titulo" type="text" v-model="data.form.titulo" required>
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="descripcion">
                        Descripción
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" v-model="data.form.descripcion" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="categoria_id">
                        Serie
                    </label>
                    <select class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="categoria_id" v-model="data.form.categoria_id" required>
                        <option v-for="categoria in categorias" :value="categoria.id" :key="categoria.id">
                            {{ categoria.nombre }}
                        </option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="imagen">
                        Imagen
                    </label>
                    <input class="file:border-red-600  file:rounded-xl file:px-2 file:font-bold file:text-red-800 file:py-1 file:border-2 file:bg-white  appearance-auto border rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:shadow-outline" id="imagen" type="file" @change="handleImagenChange" required>
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="video">
                        Video
                    </label>
                    <input type="file" id="video" name="video" @change="handleVideoChange" class="file:border-red-600  file:rounded-xl file:px-2 file:font-bold file:text-red-800 file:py-1 file:border-2 file:bg-white  appearance-auto border rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Crear Pelicula
                    </button>
                </div>
            </form>
        </div>

    </AppLayout>
</template>

<style scoped>

</style>
