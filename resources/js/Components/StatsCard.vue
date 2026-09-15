<script setup>
defineProps({
    value: {
        type: [String, Number],
        required: true,
    },
    label: {
        type: String,
        required: true,
    },
    color: {
        type: String,
        default: 'primary',
    },
    trend: {
        type: String,
        default: '',
    },
});
</script>

<template>
    <!-- TODO: Match stats card markup/classes from dashboard.html -->
    <div class="card">
        <div class="card-body">
            <h3 class="mb-1">{{ value }}</h3>
            <p class="mb-0">{{ label }}</p>
            <small v-if="trend" class="text-muted">{{ trend }}</small>
        </div>
    </div>
</template>
