<script setup>
import { useCountTo } from '@/composables/useCountTo';

defineProps({
    facts: {
        type: Array,
        default: () => [],
    },
});

useCountTo();
</script>

<template>
    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div
                                v-for="fact in facts"
                                :key="fact.label"
                                class="col-lg-3 col-md-6"
                            >
                                <div class="counter" :class="{ end: fact.is_end }">
                                    <h2
                                        class="timer count-title count-number"
                                        :data-to="fact.value"
                                        :data-speed="fact.speed"
                                    />
                                    <p class="count-text ">{{ fact.label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
