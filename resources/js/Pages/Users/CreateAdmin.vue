<script setup>
import {Inertia} from "@inertiajs/inertia";

const data = reactive ({
    form:{
        name: '',
        email: '',
        password: 'password',
        admin: true

    }
});
const submitForm = () => {
    Inertia.post(route('users.store'), data.form);
}

import AppLayout from "@/Layouts/AppLayout.vue";
import {reactive} from "vue";
</script>

<template>
    <AppLayout>
        <div class="mx-24 mt-16">

    <div class="w-full flex flex-col space-y-4 text-gray-200">
        <h1 class="text-4xl font-bold">Crear administrador</h1>
        <div   class="flex flex-col space-y-4">

            <div class="flex flex-col space-y-2">
                <label for="name">Nombre</label>
                <input type="text" v-model="data.form.name" class="p-2 rounded text-black">
            </div>
            <div class="flex flex-col space-y-2">
                <label for="email">Correo </label>
                <input type="email" v-model="data.form.email" class="p-2 rounded text-black">
            </div>

            <button type="submit" @click="submitForm" class="font-bold bg-red-600 p-2 rounded ">Crear</button>
        </div>
        <div class="flex opacity-50 space-x-5">
            <p>Default admin= True</p>
            <p>Default password = password</p>
        </div>

    </div>
        </div>

    </AppLayout>
</template>


