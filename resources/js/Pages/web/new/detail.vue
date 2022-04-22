<template>
  <Layout>
    <SliderCover title="NOTICIAS">
      <template #swiper>
        <SwiperCover :images="['/image/new_page.webp']"></SwiperCover>
      </template>
    </SliderCover>
    <div class="space-page"></div>
    <div class="container mx-auto">
      <div class="w-full md:w-3/4">
        <HeaderNew
          v-on:last="lastNews"
          v-on:date="handleDate"
          v-on:search="handleSearch"
          v-on:text="HandleText"
        ></HeaderNew>
      </div>
      <div class="space-page"></div>

      <div
        class="
          flex flex-col
          md:flex-row md:space-x-5 md:space-y-0
          items-center
          md:items-start
          justify-center
        "
      >
        <div class="w-11/12 md:w-3/4">
          <CardDetail :item="news" />
          <div class="divider-new my-5"></div>
        </div>

        <div class="flex-1 mx-5 mt-10">
          <template v-for="(item, index) in news_categories" :key="index">
            <CardCate :news="item[0]"> </CardCate>
            <div class="divider-new"></div>
          </template>
        </div>
      </div>
      <!-- relations -->
      <template v-if="news_relations.length > 0">
        <div class="my-5 hidden md:block">
          <TitlePage text="Artículos relacionados"></TitlePage>
          <SwiperMulti :slidesNumber="news_relations.length < 3 ? '1' : '3'">
            <template v-for="(item, index) in news_relations" :key="index">
              <SwiperSlide><NewRelation :data="item" /> </SwiperSlide>
            </template>
          </SwiperMulti>
        </div>
        <div class="my-5 block md:hidden">
          <TitlePage text="Artículos relacionados"></TitlePage>
          <SwiperMulti slidesNumber="1">
            <template v-for="(item, index) in news_relations" :key="index">
              <SwiperSlide><NewRelation :data="item" /> </SwiperSlide>
            </template>
          </SwiperMulti>
        </div>
      </template>
    </div>

    <div class="space-page"></div>
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCover";
import SwiperCover from "@/components/web/SwiperCover";

import ButtonDiv from "@/components/ButtonDiv";
import Layout from "@/components/web/Layout.vue";
import CardNew from "@/components/news/CardNew.vue";
import CardCate from "@/components/news/CardCate.vue";
import HeaderNew from "@/components/news/HeaderNew.vue";
import CardDetail from "@/components/news/CardDetail.vue";
import SwiperMulti from "@/components/SwiperMulti.vue";
import { SwiperSlide } from "swiper/vue";

import TitlePage from "@/components/TitlePage";
import { Link } from "@inertiajs/inertia-vue3";
import NewRelation from "../../../components/news/NewRelation.vue";

export default {
  props: {
    news: Object,
    news_categories: Object,
    news_relations: Object,
  },
  components: {
    SliderCover,
    SwiperCover,
    Layout,
    ButtonDiv,
    CardNew,
    CardCate,
    HeaderNew,
    CardDetail,
    SwiperMulti,
    SwiperSlide,
    NewRelation,
    TitlePage,
  },
  data() {
    return {
      q: null,
    };
  },
  methods: {
    lastNews() {
      this.$inertia.visit(route("noticia"), { preserveScroll: true });
    },
    handleDate(e) {
      this.$inertia.visit(route("noticia"), {
        data: {
          date: e,
        },
        preserveScroll: true,
        preserveState: true,
      });
    },
    handleSearch() {
      this.$inertia.visit(route("noticia"), {
        data: {
          q: this.q,
        },
        preserveScroll: true,
        preserveState: true,
      });
    },
    HandleText(e) {
      this.q = e;
    },
  },
};
</script>

<style>
</style>

// window.scrollTo(0, this.$refs.Navegacion.$el.offsetTop);