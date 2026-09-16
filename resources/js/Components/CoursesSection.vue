<script setup>
import { computed, ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    courses: {
        type: Array,
        default: () => [],
    },
});

const categories = [
    { label: 'Show All', value: '*' },
    { label: 'Webdesign', value: 'design' },
    { label: 'Development', value: 'development' },
    { label: 'Wordpress', value: 'wordpress' },
];

const activeFilter = ref('*');

const filteredCourses = computed(() => {
    if (activeFilter.value === '*') {
        return props.courses;
    }

    return props.courses.filter((course) =>
        (course.filters ?? course.category?.split(/\s+/) ?? []).includes(activeFilter.value),
    );
});

function setFilter(value) {
    activeFilter.value = value;
}
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
                <li v-for="category in categories" :key="category.value">
                    <a
                        href="#!"
                        :class="{ is_active: activeFilter === category.value }"
                        @click.prevent="setFilter(category.value)"
                    >
                        {{ category.label }}
                    </a>
                </li>
            </ul>
            <div class="row event_box">
                <div
                    v-for="course in filteredCourses"
                    :key="course.id ?? course.title"
                    class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6"
                    :class="course.filters ?? course.category"
                >
                    <div class="events_item">
                        <div class="thumb">
                            <Link href="#" @click.prevent>
                                <img :src="course.image" :alt="course.title" />
                            </Link>
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
