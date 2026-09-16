<script setup>
import { onMounted, onUnmounted, ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const menuOpen = ref(false);
const isSticky = ref(false);
const activeSection = ref('top');

const navItems = [
    { id: 'top', label: 'Home' },
    { id: 'services', label: 'Services' },
    { id: 'courses', label: 'Courses' },
    { id: 'team', label: 'Team' },
    { id: 'events', label: 'Events' },
    { id: 'contact', label: 'Register Now!' },
];

function toggleMenu() {
    menuOpen.value = !menuOpen.value;
}

function scrollToSection(event, id) {
    event.preventDefault();

    const target = document.getElementById(id);

    if (!target) {
        return;
    }

    menuOpen.value = false;
    activeSection.value = id;
    window.scrollTo({
        top: target.offsetTop - 80,
        behavior: 'smooth',
    });
}

function onScroll() {
    const bannerText = document.querySelector('.header-text');
    const header = document.querySelector('header');
    const boxHeight = bannerText?.offsetHeight ?? 200;
    const headerHeight = header?.offsetHeight ?? 80;

    isSticky.value = window.scrollY >= boxHeight - headerHeight;

    navItems.forEach((item) => {
        const section = document.getElementById(item.id);

        if (!section) {
            return;
        }

        const top = section.offsetTop - 90;
        const bottom = top + section.offsetHeight;

        if (window.scrollY >= top && window.scrollY < bottom) {
            activeSection.value = item.id;
        }
    });
}

onMounted(() => {
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', onScroll);
});
</script>

<template>
    <header
        class="header-area header-sticky"
        :class="{ 'background-header': isSticky }"
    >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <Link href="/" class="logo">
                            <h1>Scholar</h1>
                        </Link>

                        <div class="search-input">
                            <form id="search" action="#" @submit.prevent>
                                <input
                                    id="searchText"
                                    type="text"
                                    name="searchKeyword"
                                    placeholder="Type Something"
                                />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>

                        <ul class="nav" :class="{ 'is-open': menuOpen }">
                            <li
                                v-for="item in navItems"
                                :key="item.id"
                                class="scroll-to-section"
                            >
                                <a
                                    :href="`#${item.id}`"
                                    :class="{ active: activeSection === item.id }"
                                    @click="scrollToSection($event, item.id)"
                                >
                                    {{ item.label }}
                                </a>
                            </li>
                        </ul>

                        <a
                            class="menu-trigger"
                            :class="{ active: menuOpen }"
                            @click.prevent="toggleMenu"
                        >
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</template>

<style>
@media (max-width: 767px) {
    .header-area .main-nav .nav.is-open {
        display: flex !important;
        flex-direction: column;
    }
}
</style>
