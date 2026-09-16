<script setup>
defineProps({
    faqs: {
        type: Array,
        default: () => [],
    },
});
</script>

<template>
    <div class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div
                            v-for="faq in faqs"
                            :key="faq.anchor"
                            class="accordion-item"
                        >
                            <h2 class="accordion-header" :id="'heading' + faq.anchor">
                                <button
                                    class="accordion-button"
                                    :class="{ collapsed: !faq.is_open }"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    :data-bs-target="'#collapse' + faq.anchor"
                                    :aria-expanded="faq.is_open ? 'true' : 'false'"
                                    :aria-controls="'collapse' + faq.anchor"
                                >
                                    {{ faq.question }}
                                </button>
                            </h2>
                            <div
                                :id="'collapse' + faq.anchor"
                                class="accordion-collapse collapse"
                                :class="{ show: faq.is_open }"
                                :aria-labelledby="'heading' + faq.anchor"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body" v-html="faq.answer" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>What make us the best academy online?</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravid risus commodo.
                        </p>
                        <div class="main-button">
                            <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
