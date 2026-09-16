<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    phone: '',
    message: '',
});

function submitForm() {
    form.post('/register-lead', {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
}
</script>

<template>
    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Feel free to contact us anytime</h2>
                        <p>
                            Thank you for choosing our templates. We provide you best CSS templates at
                            absolutely 100% free of charge. You may support us by sharing our website to
                            your friends.
                        </p>
                        <div class="special-offer">
                            <span class="offer">off<br><em>50%</em></span>
                            <h6>Valide: <em>24 April 2036</em></h6>
                            <h4>Special Offer <em>50%</em> OFF!</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" @submit.prevent="submitForm">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input
                                            id="name"
                                            v-model="form.name"
                                            type="text"
                                            name="name"
                                            placeholder="Your Name..."
                                            autocomplete="name"
                                            required
                                        />
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input
                                            id="email"
                                            v-model="form.email"
                                            type="email"
                                            name="email"
                                            placeholder="Your E-mail..."
                                            autocomplete="email"
                                            required
                                        />
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input
                                            id="phone"
                                            v-model="form.phone"
                                            type="tel"
                                            name="phone"
                                            placeholder="Your Phone..."
                                            autocomplete="tel"
                                            required
                                        />
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea
                                            id="message"
                                            v-model="form.message"
                                            name="message"
                                            placeholder="Your Message"
                                        />
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button
                                            id="form-submit"
                                            type="submit"
                                            class="orange-button"
                                            :disabled="form.processing"
                                        >
                                            {{ form.processing ? 'Sending...' : 'Send Message Now' }}
                                        </button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
