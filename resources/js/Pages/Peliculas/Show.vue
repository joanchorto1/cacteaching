
<template>
    <div class="relative w-full bg-black">


        <video ref="videoPlayer" class="w-full h-screen"  @play="handlePlay" @pause="handlePause">
            <source :src="videoSrc" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
        <div class="absolute inset-0 flex items-center justify-center" v-if="!isPlaying">
            <button @click="playVideo" class="text-white hover:text-gray-300">

                <svg class=" border-gray-200 border-4 p-2 rounded-xl w-10 h-10  fill-red-700 stroke-0" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" >
                    <path d="M20.463,7.713l-9.1-6.677A5.317,5.317,0,0,0,2.9,5.323V18.677a5.311,5.311,0,0,0,8.46,4.287l9.105-6.677a5.315,5.315,0,0,0,0-8.574Zm-1.774,6.155-9.1,6.677A2.317,2.317,0,0,1,5.9,18.677V5.323a2.276,2.276,0,0,1,1.27-2.066A2.328,2.328,0,0,1,8.223,3a2.3,2.3,0,0,1,1.362.455l9.1,6.677a2.316,2.316,0,0,1,0,3.736Z"/>
                </svg>


            </button>
        </div>
        <div class=" border-red-600 border-t-4 absolute text-white inset-x-0 bottom-0 bg-black bg-opacity-50 flex justify-between items-center px-4 py-2">
            <button @click="togglePlay" class="text-white">
                <svg v-if="isPlaying" class=" border-gray-200 border-4 p-2 rounded-xl w-10 h-10  fill-red-700 stroke-0" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                    <path d="M6.5,0A3.5,3.5,0,0,0,3,3.5v17a3.5,3.5,0,0,0,7,0V3.5A3.5,3.5,0,0,0,6.5,0Z"/>
                    <path d="M17.5,0A3.5,3.5,0,0,0,14,3.5v17a3.5,3.5,0,0,0,7,0V3.5A3.5,3.5,0,0,0,17.5,0Z"/>
                </svg>
                <svg v-else class=" border-gray-200 border-4 p-2 rounded-xl w-10 h-10  fill-red-700 stroke-0" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" >
                    <path d="M20.463,7.713l-9.1-6.677A5.317,5.317,0,0,0,2.9,5.323V18.677a5.311,5.311,0,0,0,8.46,4.287l9.105-6.677a5.315,5.315,0,0,0,0-8.574Zm-1.774,6.155-9.1,6.677A2.317,2.317,0,0,1,5.9,18.677V5.323a2.276,2.276,0,0,1,1.27-2.066A2.328,2.328,0,0,1,8.223,3a2.3,2.3,0,0,1,1.362.455l9.1,6.677a2.316,2.316,0,0,1,0,3.736Z"/>
                </svg>

            </button>
            <button @click="closePlayer" >
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <p>Curso:</p>
            <p>Titulo</p>


            <input type="range" min="0" max="1" step="0.1" v-model="volume" class="w-32 h-3 border-4 border-gray-200  p-2 accent-gray-200 appearance-none bg-red-700 rounded-xl outline-none" />
            <button @click="toggleFullScreen" class="text-white">

                <svg class=" border-gray-200 border-4 p-2 rounded-xl w-10 h-10  fill-red-700 stroke-0" xmlns="http://www.w3.org/2000/svg" id="Bold" viewBox="0 0 24 24" width="512" height="512">
                    <path d="M22.5,15.5A1.5,1.5,0,0,0,21,17v1.5A2.5,2.5,0,0,1,18.5,21H17a1.5,1.5,0,0,0,0,3h1.5A5.506,5.506,0,0,0,24,18.5V17A1.5,1.5,0,0,0,22.5,15.5Z"/>
                    <path d="M7,0H5.5A5.506,5.506,0,0,0,0,5.5V7A1.5,1.5,0,0,0,3,7V5.5A2.5,2.5,0,0,1,5.5,3H7A1.5,1.5,0,0,0,7,0Z"/>
                    <path d="M7,21H5.5A2.5,2.5,0,0,1,3,18.5V17a1.5,1.5,0,0,0-3,0v1.5A5.506,5.506,0,0,0,5.5,24H7a1.5,1.5,0,0,0,0-3Z"/>
                    <path d="M18.5,0H17a1.5,1.5,0,0,0,0,3h1.5A2.5,2.5,0,0,1,21,5.5V7a1.5,1.5,0,0,0,3,0V5.5A5.506,5.506,0,0,0,18.5,0Z"/>
                </svg>

            </button>
        </div>
    </div>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";
export default {
    props: {
        pelicula: Object

        },

    data() {
        return {
            videoSrc: this.pelicula.video,
            isPlaying: false,
            volume: 0.5
        };
    },
    methods: {
        playVideo() {
            this.$refs.videoPlayer.play();
            this.isPlaying = true;
        },
        togglePlay() {
            if (this.isPlaying) {
                this.$refs.videoPlayer.pause();
            } else {
                this.$refs.videoPlayer.play();
            }
            this.isPlaying = !this.isPlaying;
        },
        stopVideo() {
            this.$refs.videoPlayer.pause();
            this.$refs.videoPlayer.currentTime = 0;
            this.isPlaying = false;
        },
        toggleFullScreen() {
            if (this.$refs.videoPlayer.requestFullscreen) {
                this.$refs.videoPlayer.requestFullscreen();
            } else if (this.$refs.videoPlayer.mozRequestFullScreen) {
                this.$refs.videoPlayer.mozRequestFullScreen();
            } else if (this.$refs.videoPlayer.webkitRequestFullscreen) {
                this.$refs.videoPlayer.webkitRequestFullscreen();
            } else if (this.$refs.videoPlayer.msRequestFullscreen) {
                this.$refs.videoPlayer.msRequestFullscreen();
            }
        },
        handlePlay() {
            this.isPlaying = true;
        },
        handlePause() {
            this.isPlaying = false;
        },
        closePlayer() {
            //Redireccionar a dashboard
            Inertia.visit('/dashboard');

        }
    }
};
</script>

<style>
</style>
```
