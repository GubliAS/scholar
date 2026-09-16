<script setup>
defineProps({
    title: {
        type: String,
        required: true,
    },
    text: {
        type: String,
        required: true,
    },
    icon: {
        type: String,
        required: true,
    },
    iconAlt: {
        type: String,
        default: '',
    },
    url: {
        type: String,
        default: '#',
    },
});
</script>

<template>
    <div class="col-lg-4 col-md-6">
        <div class="service-item">
            <div class="icon">
                <img :src="icon" :alt="iconAlt" />
            </div>
            <div class="main-content">
                <h4>{{ title }}</h4>
                <p>{{ text }}</p>
                <div class="main-button">
                    <a :href="url">Read More</a>
                </div>
            </div>
        </div>
    </div>
</template>
