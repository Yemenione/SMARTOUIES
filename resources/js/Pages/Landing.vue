<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { getActiveLanguage } from 'laravel-vue-i18n';
import { computed } from 'vue';

const currentLang = computed(() => getActiveLanguage() || 'fr');

const form = useForm({
    name: '',
    email: '',
    message: '',
});

const submit = () => {
    form.post(route('contact.store'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <Head title="Home" />
    <FrontendLayout>
        <Head title="Home" />



        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-primary-950 via-primary-900 to-primary-800 text-white overflow-hidden">
            <div class="absolute inset-0">
                <svg class="absolute bottom-0 left-0 transform translate-x-[-10%] translate-y-[10%] text-primary-800 opacity-50 w-96 h-96" fill="currentColor" viewBox="0 0 200 200"><path d="M45,-76C58,-69,68,-57,75,-44C82,-31,86,-15,85,-0.5C84,15,77,30,69,44C60,57,49,69,36,76C23,83,7,85,-9,84C-25,83,-40,80,-53,72C-66,63,-76,50,-83,35C-89,20,-91,4,-88,-11C-85,-26,-76,-41,-65,-53C-54,-65,-41,-74,-27,-79C-13,-84,2,-85,16,-82L45,-76Z" transform="translate(100 100)" /></svg>
                <svg class="absolute top-0 right-0 transform translate-x-[20%] translate-y-[-20%] text-primary-600 opacity-20 w-[30rem] h-[30rem]" fill="currentColor" viewBox="0 0 200 200"><path d="M38.5,-63.3C50.2,-55.4,60.3,-46.3,68.4,-35.6C76.5,-24.9,82.6,-12.4,81.3,-0.7C80,11,71.3,22,63.2,32.7C55.1,43.4,47.7,53.8,37.3,61.9C26.9,70,13.5,75.8,0.6,74.8C-12.3,73.8,-24.6,66,-35.6,58.2C-46.6,50.4,-56.3,42.6,-64.1,32.8C-71.9,23,-77.8,11.5,-77.1,0.4C-76.4,-10.7,-69.1,-21.4,-60.8,-30.9C-52.5,-40.4,-43.2,-48.7,-33,-57.4C-22.8,-66.1,-11.4,-75.2,0.1,-75.4C11.6,-75.6,23.2,-66.9,33,-59.5L38.5,-63.3Z" transform="translate(100 100)" /></svg>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-24 md:py-32 lg:py-40">
                <div class="max-w-3xl">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6 leading-tight">
                        {{ $t('Transforming Ideas into') }} <span class="text-primary-400">{{ $t('Digital Reality') }}</span>
                    </h1>
                    <p class="text-lg md:text-xl text-primary-100 mb-8 max-w-2xl leading-relaxed">
                        {{ $t('We are a premium digital agency specializing in high-end web development, mobile applications, and complex enterprise systems.') }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-semibold rounded-full text-primary-900 bg-primary-400 hover:bg-primary-300 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            {{ $t('Start a Project') }}
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#services" class="inline-flex justify-center items-center px-8 py-3 border-2 border-primary-400 text-base font-semibold rounded-full text-primary-100 hover:bg-primary-400 hover:text-primary-900 transition duration-300">
                            {{ $t('Explore Services') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div id="services" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-primary-600 font-semibold tracking-wide uppercase text-sm mb-2">{{ $t('Our Expertise') }}</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $t('Comprehensive Digital Solutions') }}</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Service 1 -->
                    <div class="bg-gray-50 rounded-2xl p-8 transition duration-300 hover:shadow-xl hover:-translate-y-2 border border-gray-100 group">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center text-primary-600 mb-6 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $t('Web Development') }}</h4>
                        <p class="text-gray-600 leading-relaxed">{{ $t('Custom websites built with modern technologies like Laravel and Vue.js for speed and scalability.') }}</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-gray-50 rounded-2xl p-8 transition duration-300 hover:shadow-xl hover:-translate-y-2 border border-gray-100 group">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center text-primary-600 mb-6 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $t('Mobile Applications') }}</h4>
                        <p class="text-gray-600 leading-relaxed">{{ $t('Native and cross-platform mobile apps that provide seamless user experiences on iOS and Android.') }}</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-gray-50 rounded-2xl p-8 transition duration-300 hover:shadow-xl hover:-translate-y-2 border border-gray-100 group">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center text-primary-600 mb-6 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                           <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $t('Complex Systems') }}</h4>
                        <p class="text-gray-600 leading-relaxed">{{ $t('Robust enterprise software and CRM solutions tailored to streamline your business operations.') }}</p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-gray-50 rounded-2xl p-8 transition duration-300 hover:shadow-xl hover:-translate-y-2 border border-gray-100 group">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center text-primary-600 mb-6 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $t('UI/UX Design') }}</h4>
                        <p class="text-gray-600 leading-relaxed">{{ $t('Intuitive and beautiful user interfaces that maximize engagement and conversion rates.') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div id="portfolio" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                    <div class="text-center md:text-left">
                        <h2 class="text-primary-600 font-semibold tracking-wide uppercase text-sm mb-2">{{ $t('Our Work') }}</h2>
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $t('Recent Projects') }}</h3>
                    </div>
                    <a href="#" class="hidden md:inline-flex items-center font-semibold text-primary-600 hover:text-primary-700 transition">
                        {{ $t('View All Projects') }} <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                     <div v-for="project in $page.props.projects" :key="project.id" class="flex flex-col rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden bg-white group">
                        <div class="flex-shrink-0 relative h-56 overflow-hidden">
                            <div class="absolute inset-0 bg-primary-900 opacity-0 group-hover:opacity-20 transition duration-300 z-10"></div>
                            <img class="h-full w-full object-cover transform group-hover:scale-105 transition duration-500" :src="'/storage/' + project.image_path" :alt="project.title[currentLang]">
                            <div class="absolute top-4 right-4 z-20">
                                <span class="px-3 py-1 bg-white/90 backdrop-blur-sm text-primary-800 text-xs font-bold rounded-full shadow-sm uppercase tracking-wide">
                                    {{ project.category }}
                                </span>
                            </div>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
                                    {{ project.title[currentLang] || project.title.en }} <!-- Dynamic Locale Fallback needed optimally but keeping simple -->
                                </h3>
                                <div class="mt-3 text-sm text-gray-500 line-clamp-3 prose prose-sm" v-html="project.description[currentLang] || project.description.en"></div>
                            </div>
                            <div class="mt-6 flex items-center">
                                 <Link :href="route('portfolio.show', project.id)" class="text-primary-600 font-medium hover:text-primary-800 text-sm flex items-center transition">
                                    {{ $t('View Details') }} <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <!-- Placeholder if no projects -->
                    <div v-if="!$page.props.projects || $page.props.projects.length === 0" class="col-span-full py-12 text-center bg-white rounded-2xl border border-dashed border-gray-300">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <p class="mt-2 text-sm text-gray-500">{{ $t('No projects found.') }}</p>
                        <p class="text-xs text-gray-400">{{ $t('Add projects via the Admin Panel to see them here.') }}</p>
                    </div>
                </div>
                 <div class="mt-8 text-center md:hidden">
                    <a href="#" class="inline-flex items-center font-semibold text-primary-600 hover:text-primary-700 transition">
                        {{ $t('View All Projects') }} <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="py-20 bg-white">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="text-center mb-12">
                    <h2 class="text-primary-600 font-semibold tracking-wide uppercase text-sm mb-2">{{ $t('Get in Touch') }}</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $t('Start Your Digital Journey') }}</h3>
                </div>
                <div class="bg-gray-50 rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12">
                     <div v-if="$page.props.flash?.success" class="mb-6 rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">{{ $page.props.flash.success }}</p>
                            </div>
                        </div>
                    </div>

                    <form @submit.prevent="submit" class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ $t('Full Name') }}</label>
                            <div class="mt-1">
                                <input v-model="form.name" type="text" name="name" id="name" autocomplete="name" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" :placeholder="$t('John Doe')">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ $t('Email') }}</label>
                            <div class="mt-1">
                                <input v-model="form.email" type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" :placeholder="$t('john@example.com')">
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">{{ $t('Message') }}</label>
                            <div class="mt-1">
                                <textarea v-model="form.message" id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" :placeholder="$t('How can we help you?')"></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit" :disabled="form.processing" class="w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-300" :class="{'opacity-50': form.processing}">
                                {{ form.processing ? $t('Sending...') : $t('Send Message') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
