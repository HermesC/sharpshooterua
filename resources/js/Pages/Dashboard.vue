<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Trainings from "@/sharpshooteruaComponents/userCabinet/dashboard/Trainings.vue";
import History from "@/sharpshooteruaComponents/userCabinet/dashboard/History.vue";
import Weapons from "@/sharpshooteruaComponents/userCabinet/dashboard/Weapons.vue";
import Ammo from "@/sharpshooteruaComponents/userCabinet/dashboard/Ammo.vue";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="pages-container">
            <Trainings/>
            <History/>
            <Weapons/>
            <Ammo/>
        </div>
    </AuthenticatedLayout>
</template>
<style scoped>

.pages-container {
    display: flex;
    justify-content: space-between;
    padding-left: 20%;
    padding-right: 20%;
    padding-top: 10%;
}
</style>
