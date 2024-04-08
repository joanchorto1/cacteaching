<script setup>
import {router} from "@inertiajs/vue3";

const props = defineProps({
    categorias: Array,
    series: Array,
    videos: Array,
    peliculas: Array,
    admins: Array,
    clients: Array,
})



import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>

        <div class="flex-col text-white justify-start w-full space-x-10 space-y-5">
            <h1 class="text-5xl text-center  font-bold pb-5 ">Panel de control</h1>

        <div class="justify-center">
            <div class="mt-10 p-5">
                <h2 class="text-3xl border-b-2 border-gray-50 font-bold pb-4">USUARIOS</h2>
            </div>
            <div class="  p-5 space-y-5 border-gray-700 border-b-2 pb-3">
                <h3 class=" text-xl font-bold  mb-5 ">Gestion de usuarios Administradores</h3>
                <a class="rounded-xl px-4 py-2 border-4 font-bold border-red-600" :href="route('users.createAdmin')">Crear Admin</a>
                <div>
                    <table >
                        <thead class="border-gray-400 border-b-2">
                            <tr >
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr  v-for="admin in admins">
                                <td class="pr-10 pt-5">{{admin.name}}</td>
                                <td class="pr-10 pt-5">{{ admin.email }}</td>
                                <td class="pr-10 pt-5">Acciones</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="  my-10 p-5 space-y-5 border-gray-700 border-b-2 pb-3">
                <h3 class=" text-xl font-bold  mb-5 ">Gestion de usuarios Clientes</h3>
                <div>
                    <Table>
                        <thead class="border-gray-400 border-b-2">
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr  v-for="admin in clients">
                            <td class="pr-10 pt-5">{{admin.name}}</td>
                            <td class="pr-10 pt-5">{{ admin.email }}</td>
                            <td class="pr-10 pt-5">Acciones</td>
                        </tr>
                        </tbody>
                    </Table>

                </div>
            </div>
        </div>
            <div class="justify-center">
                <div class="mt-10 p-5">
                    <h2 class="text-3xl border-b-2 border-gray-50 font-bold pb-4">CATEGORIAS</h2>
                </div>

                <div class="  p-5 space-y-5 border-gray-700 border-b-2 pb-3">
                    <a class="rounded-xl px-4 py-2 border-4 font-bold border-red-600" :href="route('categoria.create')">Crear Categoria</a>
                    <div>
                        <table>
                            <thead class="border-gray-600 border-b-2">
                            <tr >
                                <th>Nombre</th>
                                <th>Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="categoria in categorias">
                                <td class="pr-10 pt-5">{{categoria.nombre}}</td>
                                <td class="pr-10 pt-5">Acciones</td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="justify-center">
                    <div class="mt-10 p-5">
                        <h2 class="text-3xl border-b-2 border-gray-50 font-bold pb-4">SERIES</h2>
                    </div>

                    <div class="  p-5 space-y-5 border-gray-700 border-b-2 pb-3">
                        <a class="rounded-xl px-4 py-2 border-4 font-bold border-red-600" :href="route('series.create')">Crear Serie</a>
                        <div>
                            <table>
                                <thead class="border-gray-600 border-b-2">
                                <tr >
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Acciones</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="serie in series">
                                    <template v-for="categoria in categorias">
                                        <template v-if="categoria.id === serie.categoria_id">


                                    <td class="pr-10 pt-5" >{{serie.titulo}}</td>
                                        <td class="pr-10 pt-5">{{categoria.nombre}}</td>
                                    <td class="pr-10 pt-5">Acciones</td>
                                        </template>
                                    </template>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="justify-center">
                    <div class="mt-10 p-5">
                        <h2 class="text-3xl border-b-2 border-gray-50 font-bold pb-4">PELICULAS</h2>
                    </div>

                    <div class="  p-5 space-y-5 border-gray-700 border-b-2 pb-3">
                        <a class="rounded-xl px-4 py-2 border-4 font-bold border-red-600" :href="route('peliculas.create')">Crear Pelicula</a>
                        <div>
                            <table>
                                <thead class="border-gray-600 border-b-2">
                                <tr >
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Acciones</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="pelicula in peliculas">
                                    <template v-for="categoria in categorias">
                                        <template v-if="categoria.id === pelicula.categoria_id">


                                            <td class="pr-10 pt-5" >{{pelicula.titulo}}</td>
                                            <td class="pr-10 pt-5">{{categoria.nombre}}</td>
                                            <td class="pr-10 pt-5">Acciones</td>
                                        </template>
                                    </template>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class=" justify-center pb-10">
                    <div class="mt-10 p-5">
                        <h2 class="text-3xl border-b-2 border-gray-50 font-bold pb-4">Videos</h2>
                    </div>
                    <div class="  p-5 space-y-5 border-gray-700 border-b-2 pb-3">


                    <a class="rounded-xl px-4 py-2 border-4 font-bold border-red-600" :href="route('videos.create')">Crear Video</a>
                    <div >
                        <table>
                            <thead class="border-gray-600 border-b-2">
                            <tr >
                                <th>Nombre</th>
                                <th>Serie</th>
                                <th>Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="video in videos">
                                <template v-for="serie in series">
                                    <template v-if="serie.id === video.serie_id">


                                        <td class="pr-10 pt-5" >{{video.titulo}}</td>
                                        <td class="pr-10 pt-5">{{serie.titulo}}</td>
                                        <td class="pr-10 pt-5">Acciones</td>
                                    </template>
                                </template>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
        </div>





</template>

<style scoped>

</style>
