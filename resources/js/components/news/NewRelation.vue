<template>
  <div class="bg-white  border  mb-5">
    <a @click="handleVisit(data.slug)" class="cursor-pointer ">
      <img class=" image-news-r" :src="data.image_url" alt="" />
    </a>
    <div class="" :class="bg">
      <div class="bg-black py-3">
        <p class="n_card_t">{{ data.title }}</p>
        <p class="n_card_d">
          {{ data.description }}
        </p>
        <div class="flex justify-center items-center">
          <svg
            class="h-8 w-8 text-red-500"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path
              d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
            />
          </svg>
          <div class="n_card_git">{{ data.user }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    data: Object,
  },
  components: {
    Link,
  },
  methods: {
    handleVisit(slug) {
      this.$inertia.visit(route("noticia.detail",slug), {
        
        // preserveScroll: true,
        // preserveState: true,
      });
    },
  },
};
</script>

<style>
.image-news-r{
    width: 409.19px !important;
    height:280px !important;
}
</style>
