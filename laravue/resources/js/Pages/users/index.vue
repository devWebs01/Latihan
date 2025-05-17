<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link, Head } from "@inertiajs/vue3";

const props = defineProps({
  layout: AuthenticatedLayout,

  users: Array,
});
</script>

<template>

  <Head title="Users" />

  <AuthenticatedLayout>

    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Data User</h2>
    </template>



    <div class="py-12">

      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <Link :href="route('users.create')"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mb-5">
        Create User</Link>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-6 rounded-lg">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
            <tr>
              <th scope="col" class="px-6 py-3">Name</th>
              <th scope="col" class="px-6 py-3">Email</th>
              <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr v-for="user in props.users" :key="user.id"
              class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ user.name }}
              </th>
              <td class="px-6 py-4">{{ user.email }}</td>
              <td class="px-6 py-4">
                <div class="d-flex">
                  <Link :href="`/users/${user.id}`" class="text-blue-600 hover:underline">
                  Edit
                  </Link>

                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
