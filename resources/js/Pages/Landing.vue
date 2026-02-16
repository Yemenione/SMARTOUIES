<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Home" />

    <FrontendLayout>
        <!-- Hero Section -->
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>

                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block xl:inline">SMARTOUIES</span>
                                <span class="block text-indigo-600 xl:inline">{{ $t('We build your digital future.') }}</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                {{ $t('Web Development, Mobile Apps and Enterprise Systems.') }}
                            </p>
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <a href="#contact" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                        {{ $t('Start a project') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="Team working">
            </div>
        </div>

        <!-- Services Section -->
        <div id="services" class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Services</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        {{ $t('We build your digital future.') }}
                    </p>
                </div>

                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9-9a9 9 0 00-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{ $t('Web Development') }}</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Sites vitrines, E-commerce.
                            </dd>
                        </div>
                        
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{ $t('Mobile Applications') }}</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                iOS, Android, Flutter.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{ $t('Complex Systems') }}</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                ERP, CRM, Logiciels sur mesure.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{ $t('UI/UX Design') }}</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Maquettage, Identité visuelle.
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div id="portfolio" class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center mb-10">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Portfolio</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        {{ $t('Our Projects') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="project in $page.props.projects" :key="project.id" class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" :src="'/storage/' + project.image_path" :alt="project.title.fr">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-indigo-600">
                                    <a href="#" class="hover:underline">
                                        {{ project.category }}
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <!-- Use $t() with key if title is a key, or access localized property if available -->
                                    <!-- Inertia/Spatie returns JSON. We should pick valid locale. 
                                         Ideally, backend sends translated content, or we parse JSON frontend.
                                         The `projects` prop is just raw model data (JSON strings for translatable fields).
                                         So project.title is a JSON object or string?
                                         Laravel casts 'json' columns to array automatically.
                                         So project.title is {fr: '...', en: '...'}
                                    -->
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ project.title[Object.keys(project.title)[0]] }} 
                                        <!-- Simple fallback. Better: current locale picker -->
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        {{ project.description[Object.keys(project.description)[0]] }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div v-if="!$page.props.projects || $page.props.projects.length === 0" class="col-span-full text-center text-gray-500">
                        No projects found.
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="lg:text-center">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Contact</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        {{ $t('Contact Us') }}
                    </p>
                </div>
                <!-- Simple contact form placeholder -->
                 <div class="mt-10 max-w-lg mx-auto">
                    <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" autocomplete="name" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            </div>
                        </div>
                        <!-- ... other fields ... -->
                        <div>
                            <button type="submit" class="w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Send Message
                            </button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </FrontendLayout>
</template>
