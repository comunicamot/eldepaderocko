
<template>
  <div class="py-6">
    <div
      class="
        flex flex-col
        md:flex-row
        bg-white
        overflow-hidden
        justify-center
        items-center
        content-center
        card_new
      "
    >
      <div class="w-full md:w-2/3 p-8">
        <h1 class="card_new_title">{{ news.title }}</h1>
        <p class="mt-2 text-gray-600 text-sm card_new_desc">
          {{ news.description }}
        </p>
        <div class="flex item-center mt-2">
          <Link :href="route('noticia.detail', news.slug)" >
            <span class="text_more">Ver más</span>
          </Link>
        </div>
        <!-- <div class="flex item-center justify-end">
          <ButtonDiv
            text="Ver más"
            bold="true"
            styles="c-red-s px-8"
          ></ButtonDiv>
        </div> -->
        <div class="flex item-center mt-5">
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
          <span class="text_author">{{ news.user }}</span>
        </div>
      </div>
      <div class="flex-1">
        <img :src="news.image_url" alt="" />
      </div>
    </div>
  </div>
</template>

<script>
import ButtonDiv from "@/components/ButtonDiv";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  props: {
    news: Array,
  },
  components: { ButtonDiv, Link },
};
</script>

<style>
.hc {
  height: 382px;
}
.card_new {
  width: 100%;
  height: 382px;
}

@media only screen and (max-width: 768px) {
  .card_new {
    height: auto;
  }
}
</style>