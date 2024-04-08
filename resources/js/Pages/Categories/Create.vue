<script setup>
import {Inertia} from "@inertiajs/inertia";
import {reactive} from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const data = reactive ({
    form:{
        nombre: '',


    }
});
const submitForm = () => {
    Inertia.post(route('categoria.store'), data.form);
}
</script>

<template>
    <AppLayout>

    <div class="mx-24 mt-16">

        <div class="w-full flex flex-col space-y-4 text-gray-200">
            <h1 class="text-4xl font-bold">Crear Categoria</h1>
            <div   class="flex flex-col space-y-4">

                <div class="flex flex-col space-y-2">
                    <label for="name">Nombre</label>
                    <input type="text"  v-model="data.form.nombre" class="p-2 rounded text-black">
                </div>


                <button type="submit" @click="submitForm" class="bg-red-600 p-2 rounded">Crear</button>
            </div>


        </div>
    </div>
    </AppLayout>

</template>

<style scoped>

</style>
