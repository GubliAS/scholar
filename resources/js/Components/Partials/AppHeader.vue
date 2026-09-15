<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <!-- TODO: Replace with markup from template index.html header -->
    <header class="app-header border-bottom mb-4">
        <nav class="container py-3 d-flex gap-3">
            <Link href="/">Home</Link>
            <Link href="/dashboard">Dashboard</Link>
            <Link href="/profile">Profile</Link>
        </nav>
    </header>
</template>
