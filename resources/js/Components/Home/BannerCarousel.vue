<script setup>
import { useOwlCarousel } from '@/composables/useOwlCarousel';

defineProps({
    slides: {
        type: Array,
        default: () => [],
    },
});

useOwlCarousel('.owl-banner', {
    center: true,
    items: 1,
    loop: true,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    margin: 30,
    responsive: {
        992: { items: 1 },
        1200: { items: 1 },
    },
});
</script>

<template>
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div
                            v-for="slide in slides"
                            :key="slide.item_class"
                            class="item"
                            :class="slide.item_class"
                        >
                            <div class="header-text">
                                <span class="category">{{ slide.category }}</span>
                                <h2>{{ slide.title }}</h2>
                                <p>{{ slide.text }}</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a :href="slide.primary_url">{{ slide.primary_label }}</a>
                                    </div>
                                    <div class="icon-button">
                                        <a :href="slide.secondary_url">
                                            <i class="fa fa-play"></i>
                                            {{ slide.secondary_label }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
