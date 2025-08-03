<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <main>
        <header class="bg-gray-300">
            <div class="max-w-7xl mx-auto px-2 lg:px-4">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                    </div>

                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-center">
                        <div class="flex-shrink-0">
                            <h1 class="text-xl font-bold text-gray-800">Logo</h1>
                        </div>
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                                <a href="#"
                                    class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">About</a>
                                <a href="#"
                                    class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                                <a :href="route('test')"
                                    class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>
