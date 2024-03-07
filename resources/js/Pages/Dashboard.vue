<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import AdminDashboard from "@/Components/AdminDashboard.vue";
import UserDashboard from "@/Components/UserDashboard.vue";

const props = defineProps({
    categorias: Array,
    series: Array,
    videos: Array,
    peliculas: Array
})


</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg">

                    <template v-if="$page.props.auth.user.admin">
                        <AdminDashboard />
                    </template>
                    <template v-else>

                        <UserDashboard v-bind:categorias="categorias" v-bind:series="series" v-bind:peliculas="peliculas"/>
                    </template>


                </div>
            </div>
        </div>
    </AppLayout>
</template>
