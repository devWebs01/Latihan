<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
  layout: AuthenticatedLayout,

  user: Object,
});

const form = useForm({
  name: props.user.name,
  email: props.user.email,
});

const updateData = () => {
  form.put(route("users.update", props.user)), {
    onSuccess: () => {
      console.log('data berhasil diupdate!');
    },
    onError: (errors) => {
      console.error('error update data, ', errors)
    }
  }
};
</script>


<template>

  <Head title="Show User" />

  <AuthenticatedLayout>

    <form @submit.prevent="updateData">
      <div class="d-gris gap-2 mb-3 md:grid-cols-2 m-6">
        <div>
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name User</label>

          <input type="text" id="name" v-model="form.name"
            class="bg-gray-50 my-3 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Name User .." required />

          <div v-if="form.errors.name" class="text-red-500 text-xs mt-1">{{ form.errors.name }}</div>

        </div>
        <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email User</label>

          <input type="email" id="email" v-model="form.email"
            class="bg-gray-50 my-3 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="email User .." required />

          <div v-if="form.errors.email" class="text-red-500 text-xs mt-1">{{ form.errors.email }}</div>

        </div>

        <button type="submit" class="text-center text-white bg-blue border rounded p-1 px-3"
          :disabled="form.processing">
          Submit
        </button>

      </div>
    </form>

  </AuthenticatedLayout>

</template>
