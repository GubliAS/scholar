<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import StatsCard from '@/Components/StatsCard.vue';

defineProps({
    stats: {
        type: Array,
        default: () => [],
    },
});
</script>

<template>
    <DashboardLayout title="Dashboard">
        <div class="row">
            <div
                v-for="stat in stats"
                :key="stat.label"
                class="col-lg-3 col-md-6 col-sm-12 mb-4"
            >
                <StatsCard
                    :label="stat.label"
                    :value="stat.value"
                    :color="stat.color"
                    :trend="stat.trend"
                />
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <p class="mb-0 text-muted">
                    Replace this area with charts and widgets from
                    <code>dashboard.html</code>.
                </p>
            </div>
        </div>
    </DashboardLayout>
</template>
