<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import LanguageSwitcher from '@/Components/LanguageSwitcher.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="min-h-screen bg-gray-50 flex flex-col font-sans">
        <nav class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm opacity-95 backdrop-blur">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20"> <!-- Increased height -->
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <Link :href="route('home')" class="font-bold text-2xl text-primary-700 tracking-tight flex items-center gap-2">
                                <ApplicationLogo class="block h-9 w-auto fill-current text-primary-600" />
                                {{ $page.props.settings?.site_name || 'SMARTOUIES' }}
                            </Link>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <!-- Use primary color for hover/focus -->
                            <Link :href="route('about')" :active="route().current('about')" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-primary-600 hover:border-primary-300 focus:outline-none focus:text-primary-700 focus:border-primary-300 transition duration-150 ease-in-out">
                                {{ $t('About Us') }}
                            </Link>
                            <Link :href="route('services')" :active="route().current('services')" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-primary-600 hover:border-primary-300 focus:outline-none focus:text-primary-700 focus:border-primary-300 transition duration-150 ease-in-out">
                                {{ $t('Services') }}
                            </Link>
                            <Link :href="route('portfolio')" :active="route().current('portfolio')" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-primary-600 hover:border-primary-300 focus:outline-none focus:text-primary-700 focus:border-primary-300 transition duration-150 ease-in-out">
                                {{ $t('Portfolio') }}
                            </Link>
                            <Link :href="route('contact')" :active="route().current('contact')" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-primary-600 hover:border-primary-300 focus:outline-none focus:text-primary-700 focus:border-primary-300 transition duration-150 ease-in-out">
                                {{ $t('Contact') }}
                            </Link>
                        </div>
                    </div>

                    <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                        <LanguageSwitcher />
                        <Link :href="route('login')" class="ml-4 inline-flex items-center px-4 py-2 bg-primary-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-700 focus:bg-primary-700 active:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ $t('Log in') }}
                        </Link>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button
                            @click="showingNavigationDropdown = !showingNavigationDropdown"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                        >
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path
                                    :class="{
                                        hidden: showingNavigationDropdown,
                                        'inline-flex': !showingNavigationDropdown,
                                    }"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                                <path
                                    :class="{
                                        hidden: !showingNavigationDropdown,
                                        'inline-flex': showingNavigationDropdown,
                                    }"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div
                :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                class="sm:hidden"
            >
                <div class="pt-2 pb-3 space-y-1">
                    <Link :href="route('home')" class="block w-full pl-3 pr-4 py-2 border-l-4 border-primary-400 text-left text-base font-medium text-primary-700 bg-primary-50 focus:outline-none focus:text-primary-800 focus:bg-primary-100 focus:border-primary-700 transition duration-150 ease-in-out">
                        Home
                    </Link>
                     <Link href="#services" class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                        {{ $t('Services') }}
                    </Link>
                </div>

                <div class="pt-4 pb-1 border-t border-gray-200">
                     <div class="px-4 py-2 flex justify-between items-center">
                        <LanguageSwitcher />
                        <Link :href="route('login')" class="text-sm font-medium text-primary-600">
                            {{ $t('Log in') }}
                        </Link>
                     </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-grow">
            <slot />
        </main>
        
        <!-- Professional Footer -->
        <footer class="bg-gray-900 text-white pt-12 pb-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <div class="col-span-1 md:col-span-1">
                        <div class="flex items-center gap-2 mb-4">
                            <ApplicationLogo class="h-8 w-auto fill-current text-primary-500" />
                            <span class="text-xl font-bold tracking-tight">{{ $page.props.settings?.site_name || 'SMARTOUIES' }}</span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            {{ $page.props.settings?.footer_text || $t('We build your digital future with cutting-edge technology and premium design.') }}
                        </p>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-4">{{ $t('Services') }}</h3>
                        <ul class="space-y-2">
                            <li><Link :href="route('services')" class="text-gray-400 hover:text-primary-400 transition">{{ $t('Web Development') }}</Link></li>
                            <li><Link :href="route('services')" class="text-gray-400 hover:text-primary-400 transition">{{ $t('Mobile Applications') }}</Link></li>
                            <li><Link :href="route('services')" class="text-gray-400 hover:text-primary-400 transition">{{ $t('Complex Systems') }}</Link></li>
                            <li><Link :href="route('services')" class="text-gray-400 hover:text-primary-400 transition">{{ $t('UI/UX Design') }}</Link></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-4">{{ $t('Company') }}</h3>
                        <ul class="space-y-2">
                            <li><Link :href="route('about')" class="text-gray-400 hover:text-primary-400 transition">{{ $t('About Us') }}</Link></li>
                            <li><Link :href="route('portfolio')" class="text-gray-400 hover:text-primary-400 transition">{{ $t('Portfolio') }}</Link></li>
                            <li><Link :href="route('contact')" class="text-gray-400 hover:text-primary-400 transition">{{ $t('Contact') }}</Link></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-4">{{ $t('Stay Updated') }}</h3>
                        <p class="text-gray-400 text-sm mb-4">{{ $t('Subscribe to our newsletter.') }}</p>
                        <form class="flex flex-col gap-2">
                            <input type="email" placeholder="Enter your email" class="bg-gray-800 border-gray-700 text-white text-sm rounded-md focus:ring-primary-500 focus:border-primary-500" />
                            <button type="button" class="bg-primary-600 hover:bg-primary-700 text-white py-2 px-4 rounded-md text-sm font-semibold transition">
                                {{ $t('Subscribe') }}
                            </button>
                        </form>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm">&copy; 2026 SMARTOUIES. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a v-if="$page.props.settings?.facebook_url" :href="$page.props.settings.facebook_url" target="_blank" class="text-gray-500 hover:text-white transition">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a v-if="$page.props.settings?.twitter_url" :href="$page.props.settings.twitter_url" target="_blank" class="text-gray-500 hover:text-white transition">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a v-if="$page.props.settings?.instagram_url" :href="$page.props.settings.instagram_url" target="_blank" class="text-gray-500 hover:text-white transition">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.073-4.948-.203-4.358-2.624-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                         <a v-if="$page.props.settings?.linkedin_url" :href="$page.props.settings.linkedin_url" target="_blank" class="text-gray-500 hover:text-white transition">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
