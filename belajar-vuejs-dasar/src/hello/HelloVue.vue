<script setup>
console.log("Hello vue");

const hello = "<b>Hello Vue.js!</b>";

const classHello = "hello";

const id = "hello";

const buttonDisabled = true;

const data = {
   'id': '1',
   'class': 'hello',
}

function helloFunction() {
   return 'hello vue';
}
</script>

<template>
   <!-- v-bind berfungsi untuk memanggil variabel -->
   <h1 v-bind:id="id" v-bind:class="classHello">{{ hello }}</h1>

   <!-- jika binding pada "id" dalam penamaan variabel nya cukup dipanggil :id saja daripada :id="id"  -->
   <div :id="id" :class="classHello" v-html="hello">
   </div>

   <button v-bind:disabled="buttonDisabled">Button</button> ||
   <button :disabled="buttonDisabled">Button</button>

   <h1 v-bind="data">{{ data }}</h1>
   <h1 v-bind="data">{{ data.id }}</h1>
   <h1 v-bind="data">{{ data.class }}</h1>

   <h2>{{ 100 * 300 }}</h2>
   <h1 v-bind="data">{{ data.class.toUpperCase() }}</h1>
   <h2>{{ helloFunction() }}</h2>
</template>

<style scoped>
.hello {
   color: green;
}
</style>
