<template>
    <div>
        <div class="min-h-full">
            <Menu />
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                    <router-view v-slot="{ Component, route }">
                        <div :key="route.name">
                            <Component :is="Component" />
                        </div>
                    </router-view>
                </div>
            </main>
        </div>
    </div>
</template>

<script setup>
import Menu from './Components/Web/Menu.vue'
import { useHead } from '@vueuse/head';

useHead({
    title: 'Главная страница',
    meta: [
        {
            name: 'description',
            content: 'My page description',
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