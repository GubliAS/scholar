<script setup>
defineProps({
    members: {
        type: Array,
        default: () => [],
    },
});
</script>

<template>
    <div class="team section" id="team">
        <div class="container">
            <div class="row">
                <div
                    v-for="member in members"
                    :key="member.id ?? member.name"
                    class="col-lg-3 col-md-6"
                >
                    <div class="team-member">
                        <div class="main-content">
                            <img :src="member.image" :alt="member.name" />
                            <span class="category">{{ member.role }}</span>
                            <h4>{{ member.name }}</h4>
                            <ul class="social-icons">
                                <li>
                                    <a :href="member.facebook_url">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a :href="member.twitter_url">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a :href="member.linkedin_url">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
