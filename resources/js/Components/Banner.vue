<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper";
import { Link } from "@inertiajs/vue3";
import truncate from "@/helpers/truncate";

defineProps({
    events: {}
})
</script>

<template>
    <div>
        <swiper :modules="[Autoplay, Pagination]" :free-mode="true" :autoplay="true" :pagination="{
            clickable: true,
        }" :loop="true" :speed="1000">
            <swiper-slide v-for="event in events" :key="event.id">
                <div class="bg-primary w-full rounded text-gray-50">
                    <div class="container grid grid-cols-12 mx-auto w-full">
                        <div class="bg-no-repeat bg-cover bg-gray-300 col-span-full lg:col-span-4"
                            :style="`background-image: url('${event?.picture_path}'); background-position: center center; background-blend-mode: multiply; background-size: cover;`">
                        </div>
                        <div class="flex flex-col p-6 col-span-full row-span-full lg:col-span-8 lg:p-10">
                            <div class="flex justify-start">
                                <span
                                    class="px-2 py-1 text-xs rounded-full bg-violet-400 text-gray-900">{{ event?.event_category?.name }}</span>
                            </div>
                            <h1 class="text-3xl font-semibold">{{ event?.title }}</h1>
                            <p class="flex-1 pt-2">{{ truncate(event?.description, 200) }}</p>
                            <a rel="noopener noreferrer" href="#"
                                class="inline-flex items-center pt-2 pb-6 space-x-2 text-sm text-violet-400">
                                <Link :href="route('event.show', event?.id)">Lire plus</Link>
                                <i class="fi-sr-arrow-right"></i>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <div class="flex space-x-2">
                                    <i class="fi-sr-user"></i>
                                    <span class="self-center text-sm">{{ event?.organizer?.name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>