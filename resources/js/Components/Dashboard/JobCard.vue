<script setup lang="ts">
import { useTimeAgo } from '@vueuse/core'

defineProps({
    title: String,
    company: String,
    experience: String,
    salary: String,
    location: String,
    description: String,
    skills: Array,
    tags: Array,
    postedTime: String,
    logo: String
});

</script>
<template>
    {{ timeAgo }}

    <div class="bg-white shadow-md rounded-xl p-5 border border-gray-200">
      <div class="flex items-start space-x-4">
        <!-- Company Logo Placeholder -->
        <div class="flex-shrink-0 w-12 h-12 bg-orange-300 rounded-full flex items-center justify-center">
          <!-- <span class="text-white text-xl font-bold">*</span> -->
          <img :src="'/storage/' + logo" class="flex-shrink-0 w-12 h-12 bg-orange-300 rounded-full flex items-center justify-center"> 
        </div>
  
        <!-- Job Details -->
        <div class="flex-1">
          <h2 class="text-lg font-semibold text-gray-800">{{ title }}</h2>
          <p class="text-gray-500 text-sm">{{ company }}</p>
  
          <!-- Job Info -->
          <div class="flex items-center space-x-3 text-gray-500 text-sm mt-2">
            <span class="flex items-center space-x-1">
              <i class="fas fa-briefcase"></i>
              <span>{{ experience }}</span>
            </span>
            <span class="flex items-center space-x-1">
              <i class="fas fa-wallet"></i>
              <span>{{ salary }}</span>
            </span>
            <span class="flex items-center space-x-1">
              <i class="fas fa-map-marker-alt"></i>
              <span>{{ location }}</span>
            </span>
          </div>
  
          <!-- Job Description -->
          <p class="text-gray-600 text-sm mt-3">{{ description.substr(0,50)  }}</p>
  
          <!-- Skills List -->
          <div class="flex space-x-2 mt-3">
            <span v-for="skill in skills" :key="skill" class="text-xs bg-gray-100 px-2 py-1 rounded-md text-gray-700">
              {{ skill.name }}
            </span>
          </div>
        </div>
  
        <!-- Job Tags -->
        <div class="flex space-x-2">
          <span v-for="tag in tags" :key="tag" class="text-xs bg-gray-200 text-gray-600 px-3 py-1 rounded-full">
            {{ tag }}
          </span>
        </div>
      </div>
  
      <!-- Footer -->
      <div class="text-right text-xs text-gray-400 mt-3">
        {{ useTimeAgo(postedTime) }} 
      </div>
    </div>
  </template>
  
 
  