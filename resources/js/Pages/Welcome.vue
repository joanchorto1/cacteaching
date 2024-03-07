<script setup>
import {Head, Link, router} from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <div class="min-h-screen bg-black text-white">
        <header v-if="canLogin" class="p-7 flex items-center text-end justify-between ">
            <img class="size-1/6 sm:size-1/6 md:size-1/6 lg:size-1/12" src="/storage/Devflix_logo.png" alt="">
            <div v-if="!$page.props.auth.user">
                <Link class="bg-red-700 px-4 py-2 m-5 rounded-xl font-bold" :href="route('login')">Log in</Link>
                <Link class="bg-red-700 px-4 py-2 m-5 rounded-xl font-bold" v-if="canRegister" :href="route('register')">Register</Link>
            </div>
            <div v-else>
                <Link class="bg-red-700 px-4 py-2 m-5 rounded-xl font-bold" :href="route('dashboard')">Dashboard</Link>
            </div>
        </header>
        <main   class="bg-fixed bg-black bg-no-repeat bg-cover justify-center  flex-col  items-center  p-4 space-y-4">
            <section class="  pb-10 w-full flex text-center flex-col space-y-4 pt-16">
                <h2 class="text-5xl font-bold">Benvingut a Devflix!</h2>
                <p>Disfruta de pel·lícules i sèries il·limitades en el teu telèfon, tauleta, ordinador i TV sense pagar més.</p>
            </section>
            <section class="rounded-xl mx-5 bg-red-700  pb-10 text-start p-10 flex flex-col space-y-4 pt-16  sm:mx-16 md:mx-36 lg:mx-62">
                <h2 class="text-2xl font-bold">Explora</h2>
                <p>Descubre nuevos géneros, explora tus favoritos y encuentra la próxima serie o película que te enganchará.</p>
            </section>
            <section class=" rounded-xl mx-5 p-10 bg-gray-200 text-red-700 pb-10 flex flex-col space-y-4 pt-16 text-end sm:mx-16 md:mx-36 lg:mx-62">
                <h2 class="text-2xl font-bold">Descarga y disfruta</h2>
                <p>Guarda tus títulos favoritos en tu dispositivo móvil y disfrútalos cuando quieras, donde quieras, incluso sin conexión.</p>
            </section>

            <section class="rounded-xl mx-5 bg-red-700  pb-10 text-start p-10 flex flex-col space-y-4 pt-16  sm:mx-16 md:mx-36 lg:mx-62">
                <h2 class="text-2xl font-bold">Personaliza</h2>
                <p>Crea hasta cinco perfiles individuales en una sola cuenta para que cada miembro de tu hogar pueda tener su propia experiencia personalizada.</p>
            </section>
            <section class="flex-col pb-24 text-center space-y-10 pt-16">
                <h2 class="text-2xl font-bold">Previsualitza sèries gratis</h2>
                <p class="pb-10" >Previsualitza alguns dels nostres títols de sèries sense haver de registrar-te ni pagar.</p>
                <Link class=" bg-red-700 px-4 py-2 m-5 rounded-xl font-bold" :href="route('dashboard')" >Previsualitza</Link>

            </section>

        </main>
    </div>
</template>


