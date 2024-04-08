<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    serie: Object,
    videos: Array,


})
</script>

<template>
    <AppLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                    <div class=" flex flex-col space-y-4  text-gray-200">

                        <div
                            :style="{backgroundImage: `url(${serie.imagen})`, height: '20em',backgroundRepeat: 'no-repeat', backgroundSize: 'cover', backgroundPosition:'center'} "
                            class="justify-end">


                        </div>
                        <div class=" w-1/2  rounded-xl bg-opacity-80">
                            <h3 class="text-4xl  font-bold">{{ serie.titulo }}</h3>
                            <p class="mt-5">{{ serie.descripcion }}</p>
                        </div>
                        <!--Series-->
                        <div class="   border-b-2 border-red-600 flex.col pb-5 items-center justify-between">
                            <h3 class="text-4xl  font-bold">Capitulos</h3>
                        </div>
                        <template v-for="video in videos">
                            <div class="p-5 flex  border-b-2 border-gray-500 gap-4 ">
                                <div class="text-white">

                                    <a :href="route('videos.show', video.id)">
                                        <img class="h-48 " :src="video.imagen" alt="">
                                    </a>


                                </div>
                                <div class="space-y-2  p-5 flex-col  text-white">
                                    <h4 class="font-bold">{{ video.titulo }}</h4>
                                    <p class="text-sm"> {{ video.descripcion }}</p>

                                </div>
                                <div>

                                </div>


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
