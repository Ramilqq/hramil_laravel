<template>
    <div>
        <h1>HOME</h1>
        <router-link to="/test"> Take me to Test page </router-link>

        <button @click.prevent="getValue">Trigger Endpoint</button>
        <p v-if="response">{{ response.data }}</p>

        <div class="columns-2">
            <div>
                <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2952&q=80" alt="">
            </div>
            <h1>HOME</h1>
            <h1>HOME</h1>
            <h1>HOME</h1>
        </div>

    </div>
</template>

<script setup>

import axios from "axios";
import { ref } from "vue";
import { useHead } from '@vueuse/head';

const response = ref();

const getValue = async () => {
    try {
        response.value = await axios.get("/api/test-me");
    } catch (error) {
        console.log(error);
    }
};

useHead({
    title: 'Главная страница 2',
    meta: [
        {
            name: 'description',
            content: 'My page description 2',
        },
        {
            property: 'og:title',
            content: 'My Amazing Site',
        },
        {
            property: 'og:description',
            content: 'My Amazing Site',
        },
        {
            property: 'og:image',
            content: 'My Amazing Site',
        },
        {
            property: 'twitter:card',
            content: 'My Amazing Site',
        },
    ],
    style : [],
    script : [],
    noscript : [],
});

</script>
