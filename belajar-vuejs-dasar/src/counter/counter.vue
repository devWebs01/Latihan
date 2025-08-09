<script setup>
    import { ref } from "vue";

    let count = 0;
    let count2 = ref(0);

    function increment() {
        count++;
        document.getElementById("count-display").innerText = "Nilai Count: " + count;
    }

    function decrement() {
        count--;
        document.getElementById("count-display").innerText = "Nilai Count: " + count;
    }

    function increment2() {
        count2.value++;
    }

    function decrement2() {
        count2.value--;
    }
</script>

<template>
    <div>
        <h1 id="count-display">Nilai Count : {{ count }}</h1>
        <button type="button" v-on:click="increment">Tambah</button>
        ||
        <button type="button" v-on:click="decrement">kurang</button>
        <p>=========================</p>
        <h1 id="count-display">Nilai Count : {{ count2 }}</h1>
        <button type="button" v-on:click="increment2">Tambah</button>
        ||
        <button type="button" v-on:click="decrement2">kurang</button>
    </div>
</template>

<style scoped>
    h1 {
        color: red;
    }
</style>
