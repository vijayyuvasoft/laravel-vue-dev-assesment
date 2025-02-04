<script setup lang="ts">
import Hero from '@/Components/Dashboard/Hero.vue';
import JobCard from '@/Components/Dashboard/JobCard.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';



const props = defineProps({
    jobs: Object,
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <!-- Hero -->
        <Hero />
        

        <!-- Job List -->
        <div class="grid grid-cols-2 gap-4">
        <JobCard
        :title="job.title"
        :company="job.company_name"
        :experience="job.experience"
        :salary="job.salary"
        :location="job.location"
        :description="job.description"
        :skills="job.skills"
        :tags="job.extra_info.split(',')"
        :logo="job.logo"
        :postedTime="job.created_at"
        v-for="job in props.jobs" :key="job.id"
        />
        </div>
        
        

        
    </AuthenticatedLayout>
</template>
