<script setup>
import { ref } from 'vue';
import DashboardHeader from '@/Components/Partials/DashboardHeader.vue';
import DashboardSidebar from '@/Components/Partials/DashboardSidebar.vue';
import DashboardFooter from '@/Components/Partials/DashboardFooter.vue';

defineProps({
    title: {
        type: String,
        default: 'Dashboard',
    },
});

const sidebarCollapsed = ref(false);

const toggleSidebar = () => {
    sidebarCollapsed.value = !sidebarCollapsed.value;
};
</script>

<template>
    <div class="wrapper" :class="{ 'sidebar-collapsed': sidebarCollapsed }">
        <DashboardHeader @toggle-sidebar="toggleSidebar" />
        <DashboardSidebar :collapsed="sidebarCollapsed" />

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0">{{ title }}</h1>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <slot />
                </div>
            </div>
        </div>

        <DashboardFooter />
    </div>
</template>
