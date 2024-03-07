<script setup>

</script>

<template>

        <div class="flex justify-center ">

            <a href="{{route('users.index')}}" class="mb-16 bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
                Gestionar usuaris
            </a>
        </div>

        <div class="flex justify-center mb-16">
            <a href="{{route('series.index')}}" class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
                Gestionar series
            </a>
        </div>

        <div class="flex justify-center">
            <a href="{{route('categories.index')}}" class="mb-16 bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
                Gestionar categories
            </a>
        </div>

</template>

<style scoped>

</style>
