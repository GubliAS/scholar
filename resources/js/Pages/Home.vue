<script setup>
import { onMounted, ref } from 'vue';
import AppHeader from '@/Components/Partials/AppHeader.vue';
import BannerCarousel from '@/Components/Home/BannerCarousel.vue';
import ServicesSection from '@/Components/Home/ServicesSection.vue';

defineProps({
    slides: {
        type: Array,
        default: () => [],
    },
    services: {
        type: Array,
        default: () => [],
    },
});

const preloaderLoaded = ref(false);

onMounted(() => {
    preloaderLoaded.value = true;
});
</script>

<template>
    <div>
        <div id="js-preloader" class="js-preloader" :class="{ loaded: preloaderLoaded }">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <AppHeader />
        <BannerCarousel :slides="slides" />
        <ServicesSection :services="services" />

        <!-- Teammates: add remaining index.html sections here with matching ids -->
        <!-- id="courses"  Courses -->
        <!-- id="team"     Team -->
        <!-- id="events"   Events -->
        <!-- id="contact"  Register / Contact -->
    </div>
</template>
