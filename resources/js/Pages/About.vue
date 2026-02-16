<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    team: Array,
});
</script>

<template>
    <FrontendLayout>
        <Head title="About Us" />

        <!-- ... (Hero, Mission, Stats sections remain unchanged) ... -->
        <!-- Hero -->
        <div class="bg-primary-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">{{ $t('About SMARTOUIES') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">
                        {{ $t('We are a forward-thinking digital agency dedicated to transforming businesses through innovative technology and exceptional design.') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $t('Our Mission') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        {{ $t('At SMARTOUIES, our mission is to empower organizations with digital tools that drive growth and efficiency. We believe in the power of code to solve complex problems and the importance of design to create intuitive human experiences.') }}
                    </p>
                </div>
                <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <div>
                        <dt class="font-semibold text-gray-900">{{ $t('Innovation') }}</dt>
                        <dd class="mt-1 text-gray-600">{{ $t('We stay ahead of the curve, adopting the latest frameworks and methodologies to ensure your project is future-proof.') }}</dd>
                    </div>
                    <div>
                        <dt class="font-semibold text-gray-900">{{ $t('Quality') }}</dt>
                        <dd class="mt-1 text-gray-600">{{ $t('We map out every detail, from architecture to pixel-perfect UI, ensuring a robust and reliable final product.') }}</dd>
                    </div>
                    <div>
                        <dt class="font-semibold text-gray-900">{{ $t('Partnership') }}</dt>
                        <dd class="mt-1 text-gray-600">{{ $t('We work alongside our clients as long-term technology partners, not just vendors.') }}</dd>
                    </div>
                </dl>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-primary-50 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base leading-7 text-gray-600">{{ $t('Projects Completed') }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">150+</dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base leading-7 text-gray-600">{{ $t('Happy Clients') }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">98%</dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base leading-7 text-gray-600">{{ $t('Team Members') }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">25+</dd>
                    </div>
                </dl>
            </div>
        </div>

        <!-- Team Section -->
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $t('Our Team') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        {{ $t('A eclectic group of developers, designers, and strategists passionate about building the web.') }}
                    </p>
                </div>
                <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <li v-for="member in team" :key="member.id">
                        <img class="aspect-[3/2] w-full rounded-2xl object-cover" :src="'/storage/' + member.image_path" :alt="member.name">
                        <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">{{ member.name }}</h3>
                        <p class="text-base leading-7 text-gray-600">{{ member.role[Object.keys(member.role)[0]] }}</p>
                    </li>
                </ul>
                <div v-if="team.length === 0" class="text-center text-gray-500 mt-10">
                    {{ $t('Team members will appear here once added in the Admin Panel.') }}
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
