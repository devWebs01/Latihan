<script setup>
import LearnLayout from '../Layouts/LearnLayout.vue';
import { Link } from '@inertiajs/vue3';


defineProps({
    dataObject: Object,
    datastring: String
});

</script>


<template>
    <LearnLayout>
        <header class="mb-5">
            <ul class="list-disc">
                <li>
                    <Link :href="route('test')" class="text-red-400 font-weight-bold"> Halaman Test dengan route Name
                    </Link>
                </li>
                <li>
                    <Link href="test" class="text-blue-400 font-weight-bold"> Halaman Test tanpa route
                    </Link>
                </li>
            </ul>
        </header>
        <main>
            <h1 class="text-black-50 mb-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quae neque quas iusto sit officia
                accusamus optio similique, fuga aspernatur possimus. Voluptatum quaerat nesciunt sequi omnis? Natus,
                neque
                asperiores. Consequuntur.
            </h1>

            <!-- pemanggilan data object -->
            <p class="mb-3">
                ini Object: {{ dataObject }}
            </p>

            <!-- pemanggilan data string dari data object (name) -->
            <p class="mb-3">
                ini string dari object {{ dataObject.name }}
            </p>

            <!-- pemanggilan data string dari data object (age) -->
            <p class="mb-3">
                ini object dengan string {{ dataObject.age }}
            </p>

            <!-- pemanggilan data string -->
            <p class="mb-3">
                ini String: {{ datastring }}
            </p>
        </main>
    </LearnLayout>
</template>
