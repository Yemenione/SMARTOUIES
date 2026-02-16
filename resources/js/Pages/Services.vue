<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head } from '@inertiajs/vue3';
import * as HeroIcons from '@heroicons/vue/24/outline';
import { getActiveLanguage } from 'laravel-vue-i18n';
import { computed } from 'vue';

defineProps({
    services: Array,
});

const currentLang = computed(() => getActiveLanguage() || 'fr');

const resolveIcon = (name) => {
    if (name === 'heroicon-o-cube') return HeroIcons.CubeIcon;
    if (name === 'heroicon-o-globe-alt') return HeroIcons.GlobeAltIcon;
    if (name === 'heroicon-o-device-phone-mobile') return HeroIcons.DevicePhoneMobileIcon;
    if (name === 'heroicon-o-cpu-chip') return HeroIcons.CpuChipIcon;
    if (name === 'heroicon-o-paint-brush') return HeroIcons.PaintBrushIcon;

    return HeroIcons[name] || HeroIcons.CubeIcon;
};
</script>

<template>
    <FrontendLayout>
        <Head title="Services" />

        <!-- Header -->
        <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-base font-semibold leading-7 text-primary-600">{{ $t('What we do') }}</p>
                <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{ $t('Services') }}</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">{{ $t('End-to-end digital solutions tailored to your business needs.') }}</p>
            </div>
        </div>

        <!-- Detailed Services -->
        <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8 pb-24">
            <dl class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:gap-x-8 lg:gap-y-16">
                
                <div v-for="service in services" :key="service.id" class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <component :is="resolveIcon(service.icon)" class="absolute left-1 top-1 h-5 w-5 text-primary-600" aria-hidden="true" />
                        {{ service.title[currentLang] || service.title.en }}
                    </dt>
                    <dd class="inline">{{ service.description[currentLang] || service.description.en }}</dd>
                </div>

                <div v-if="services.length === 0" class="col-span-full text-center text-gray-500">
                    {{ $t('No services found.') }}
                </div>
            </dl>
        </div>

        <!-- Process Section -->
        <div class="bg-primary-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $t('Our Process') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">{{ $t('A proven methodology for success.') }}</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-4">
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-white">1. Discovery</dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                                <p class="flex-auto">{{ $t('We start by understanding your business, goals, and target audience.') }}</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-white">2. Design</dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                                <p class="flex-auto">{{ $t('We create wireframes and high-fidelity mockups for your approval.') }}</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-white">3. Development</dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                                <p class="flex-auto">{{ $t('Our developers bring the design to life with clean, efficient code.') }}</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-white">4. Delivery</dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                                <p class="flex-auto">{{ $t('We test, deploy, and provide ongoing support for your product.') }}</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
