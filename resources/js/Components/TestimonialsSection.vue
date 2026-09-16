<script setup>
import { useOwlCarousel } from '@/composables/useOwlCarousel';

defineProps({
    testimonials: {
        type: Array,
        default: () => [],
    },
});

useOwlCarousel('.owl-testimonials', {
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
    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div
                            v-for="testimonial in testimonials"
                            :key="testimonial.id ?? testimonial.author"
                            class="item"
                        >
                            <p>“{{ testimonial.quote }}”</p>
                            <div class="author">
                                <img :src="testimonial.image" alt="" />
                                <span class="category">{{ testimonial.role }}</span>
                                <h4>{{ testimonial.author }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>TESTIMONIALS</h6>
                        <h2>What they say about us?</h2>
                        <p>
                            You can search free CSS templates on Google using different keywords such as
                            templatemo portfolio, templatemo gallery, templatemo blue color, etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
