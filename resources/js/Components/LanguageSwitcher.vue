<script setup>
import { loadLanguageAsync } from 'laravel-vue-i18n';
import { computed } from 'vue';

const currentLang = computed(() => document.documentElement.lang || 'fr');

const changeLanguage = (lang) => {
    loadLanguageAsync(lang);
    localStorage.setItem('lang', lang);
}
</script>

<template>
    <div class="flex items-center space-x-2">
        <button 
            @click="changeLanguage('fr')" 
            class="px-2 py-1 text-sm font-medium rounded transition-colors"
            :class="currentLang === 'fr' ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-gray-100'"
        >
            FR
        </button>
        <div class="h-4 w-px bg-gray-300"></div>
        <button 
            @click="changeLanguage('en')" 
            class="px-2 py-1 text-sm font-medium rounded transition-colors"
            :class="currentLang === 'en' ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-gray-100'"
        >
            EN
        </button>
    </div>
</template>
