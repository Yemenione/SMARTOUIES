<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { getActiveLanguage } from 'laravel-vue-i18n';
import { computed } from 'vue';

defineProps({
    projects: Object
});

const currentLang = computed(() => getActiveLanguage() || 'fr');
</script>

<template>
    <FrontendLayout>
        <Head title="Portfolio" />

        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $t('Our Work') }}</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">
                        {{ $t('Explore our recent projects and success stories.') }}
                    </p>
                </div>
                
                <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article v-for="project in projects" :key="project.id" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img :src="'/storage/' + project.image_path" :alt="project.title[currentLang]" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="max-w-xl">
                            <div class="mt-8 flex items-center gap-x-4 text-xs">
                                <time :datetime="project.created_at" class="text-gray-500">{{ new Date(project.created_at).toLocaleDateString() }}</time>
                                <span class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ project.category }}</span>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <Link :href="route('portfolio.show', project.id)">
                                        <span class="absolute inset-0"></span>
                                        {{ project.title[currentLang] || project.title.en }}
                                    </Link>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600" v-html="project.description[currentLang] || project.description.en"></p>
                            </div>
                        </div>
                    </article>

                    <!-- Empty State -->
                     <div v-if="!projects || projects.length === 0" class="col-span-full text-center py-24">
                        <p class="text-gray-500">{{ $t('No projects found yet. Check back soon!') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
