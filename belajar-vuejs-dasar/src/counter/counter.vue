<script setup>
    let count = 0;

    function increment() {
        count++;
        document.getElementById("count-display").innerText = "Nilai Count: " + count;
    }

    function decrement() {
        count--;
        document.getElementById("count-display").innerText = "Nilai Count: " + count;
    }
</script>

<template>
    <div>
        <h1 id="count-display">Nilai Count : {{ count }}</h1>
        <button type="button" v-on:click="increment">Tambah</button>
        ||
        <button type="button" v-on:click="decrement">kurang</button>
    </div>
</template>

<style scoped>
    h1 {
        color: red;
    }
</style>
