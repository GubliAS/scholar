<script setup>
import { onMounted, ref } from 'vue';
import AppHeader from '@/Components/Partials/AppHeader.vue';
import AppFooter from '@/Components/Partials/AppFooter.vue';
import BannerCarousel from '@/Components/Home/BannerCarousel.vue';
import ServicesSection from '@/Components/Home/ServicesSection.vue';
import CoursesSection from '@/Components/CoursesSection.vue';
import TeamSection from '@/Components/TeamSection.vue';
import EventsSection from '@/Components/EventsSection.vue';
import RegisterSection from '@/Components/RegisterSection.vue';

defineProps({
    slides: {
        type: Array,
        default: () => [],
    },
    services: {
        type: Array,
        default: () => [],
    },
    courses: {
        type: Array,
        default: () => [],
    },
    teamMembers: {
        type: Array,
        default: () => [],
    },
    events: {
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
        <CoursesSection :courses="courses" />
        <TeamSection :members="teamMembers" />
        <EventsSection :events="events" />
        <RegisterSection />
        <AppFooter />
    </div>
</template>
