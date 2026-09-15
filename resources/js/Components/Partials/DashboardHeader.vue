<script setup>
import { usePage } from '@inertiajs/vue3';

defineEmits(['toggle-sidebar']);

const page = usePage();
</script>

<template>
    <!-- TODO: Replace with markup from template dashboard.html header -->
    <nav class="main-header navbar navbar-expand border-bottom">
        <ul class="navbar-nav">
            <li class="nav-item">
                <button type="button" class="nav-link btn btn-link" @click="$emit('toggle-sidebar')">
                    Menu
                </button>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <span class="nav-link">{{ page.props.auth.user?.name ?? 'Guest' }}</span>
            </li>
        </ul>
    </nav>
</template>
