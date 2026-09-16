<script setup>
import ServiceCard from '@/Components/Home/ServiceCard.vue';

defineProps({
    services: {
        type: Array,
        default: () => [],
    },
});
</script>

<template>
    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <ServiceCard
                    v-for="service in services"
                    :key="service.title"
                    :title="service.title"
                    :text="service.text"
                    :icon="service.icon"
                    :icon-alt="service.icon_alt"
                    :url="service.url"
                />
            </div>
        </div>
    </div>
</template>
