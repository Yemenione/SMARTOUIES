<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { getActiveLanguage } from 'laravel-vue-i18n';
import { computed } from 'vue';

const props = defineProps({
    project: Object,
});

const currentLang = computed(() => getActiveLanguage() || 'fr');

const title = computed(() => props.project.title[currentLang.value] || props.project.title.en || 'Untitled Project');
const description = computed(() => props.project.description[currentLang.value] || props.project.description.en || '');

</script>

<template>
    <Head :title="title" />
    <FrontendLayout>
        <div class="bg-white py-16 sm:py-24">
             <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-4xl">
                    <div class="mb-10">
                        <Link :href="route('portfolio')" class="text-sm font-semibold leading-6 text-primary-600 hover:text-primary-500">
                            <span aria-hidden="true">&larr;</span> {{ $t('Back to Portfolio') }}
                        </Link>
                    </div>
                    
                    <figure class="mt-16">
                        <img class="aspect-video rounded-xl bg-gray-50 object-cover" :src="'/storage/' + project.image_path" :alt="title">
                    </figure>

                    <div class="mt-10 lg:mt-16"> 
                        <span class="inline-flex items-center rounded-full bg-primary-50 px-3 py-1 text-sm font-medium text-primary-700 ring-1 ring-inset ring-primary-600/20 mb-6">
                            {{ project.category }}
                        </span>
                        
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ title }}</h1>
                        
                        <div class="mt-6 text-xl leading-8 text-gray-700 prose prose-lg max-w-none" v-html="description"></div>

                        <!-- Call to Action -->
                        <div class="mt-16 bg-gray-50 rounded-2xl p-8 text-center border border-gray-100">
                             <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $t('Interested in a similar project?') }}</h3>
                             <p class="text-gray-600 mb-6">{{ $t('Let us help you bring your vision to life.') }}</p>
                             <Link :href="route('contact')" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 transition duration-300">
                                {{ $t('Contact Us Today') }}
                             </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
