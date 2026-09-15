<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

defineProps({
    profile: {
        type: Object,
        required: true,
    },
    activities: {
        type: Array,
        default: () => [],
    },
});
</script>

<template>
    <DashboardLayout title="Profile">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ profile.name }}</h5>
                        <p class="text-muted mb-1">{{ profile.email }}</p>
                        <span class="badge bg-primary">{{ profile.role }}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">Recent activity</div>
                    <ul class="list-group list-group-flush">
                        <li
                            v-for="activity in activities"
                            :key="activity.id"
                            class="list-group-item"
                        >
                            {{ activity.description }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <p class="text-muted">
            Replace this layout with markup from <code>profile.html</code>.
        </p>
    </DashboardLayout>
</template>
