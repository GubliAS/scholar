<script setup>
import { useIsotope } from '@/composables/useIsotope';

defineProps({
    courses: {
        type: Array,
        default: () => [],
    },
});

useIsotope();
</script>

<template>
    <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Latest Courses</h6>
                        <h2>Latest Courses</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".design">Webdesign</a>
                </li>
                <li>
                    <a href="#!" data-filter=".development">Development</a>
                </li>
                <li>
                    <a href="#!" data-filter=".wordpress">Wordpress</a>
                </li>
            </ul>
            <div class="row event_box">
                <div
                    v-for="course in courses"
                    :key="course.id ?? course.title"
                    class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6"
                    :class="course.filters ?? course.category"
                >
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#">
                                <img :src="course.image" alt="" />
                            </a>
                            <span class="category">{{ course.category_label }}</span>
                            <span class="price">
                                <h6><em>$</em>{{ course.price }}</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">{{ course.author }}</span>
                            <h4>{{ course.title }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
