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
          v-on:text="inputText"
          v-on:date="inputDate"
          :date='form.date'
          :text='form.q'
          v-on:search="searchQ"
          v-on:text_clean="cleanQ"
          v-on:last="lastNews"
        ></HeaderNew>
      </div>

      <div
        class="
          flex flex-col
          md:flex-row md:space-x-5
          justify-center
          items-start
          content-center
          mt-8
        "
      >
        <!-- news -->
        <div class="w-full md:w-3/4">
          <div class="divider-new"></div>
          <template v-for="(item, index) in news?.data" :key="index">
            <div class="w-full">
              <CardNew :news="item"></CardNew>
              <div class="divider-new"></div>
            </div>
          </template>
        </div>
        <!-- categories -->
        <div class="flex-1 flex-row md:flex-col mx-5 overflow-x-auto .">
          <template v-for="(item, index) in news_categories" :key="index">
            <CardCate :news="item[0]"></CardCate>
            <div class="divider-new my-0"></div>
          </template>
        </div>
      </div>
      <!-- paginate -->
      <paginate-web :links="news.links" :total="news.total"></paginate-web>
    </div>

    <div class="space-page"></div>
  
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCover";
import SwiperCover from "@/components/web/SwiperCover";
import { throttle, pickBy, mapValues } from "lodash/";
import ButtonDiv from "@/components/ButtonDiv";
import Layout from "@/components/web/Layout.vue";
import CardNew from "@/components/news/CardNew.vue";
import CardCate from "@/components/news/CardCate.vue";
import HeaderNew from "@/components/news/HeaderNew.vue";
import PaginateWeb from "@/Shared/PaginateWeb.vue";

export default {
  props: {
    news: Object,
    filters: Object,
    news_categories: Object,
  },
  components: {
    SliderCover,
    SwiperCover,
    Layout,
    ButtonDiv,
    CardNew,
    CardCate,
    HeaderNew,
    PaginateWeb,
  },
  data() {
    return {
      news_fake: {
        title: "Noticia número 1",
        content:
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor neque in mi mollis tempus. Ut et nisl ligula. Proin sed consectetur purus, dignissim dapibus risus. Ut arcu ligula, pellentesque sed tempus in, venenatis non velit. Orci varius natoque penatibus et magnis dis ",
        author: "juan osorio",
        url: "/image/newcard.png",
        category: "categoria",
      },
      form: {
        q: this.filters.q,
        date: this.filters.date,
      },
      q: null,
    };
  },
  methods: {
    searchQ() {
      this.form.date = null;
      this.form.q = this.q;
    },
    inputDate(e) {
      this.form.q = null;

      this.form.date = e;
    },
    inputText(e) {
      this.q = e;
    },
    cleanQ(e) {
      this.form.q = null;
      this.form.date = null;
    },
    lastNews() {
      this.form = mapValues(this.form, () => null);
    },
  },
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get("/noticias", pickBy(this.form), {
          preserveState: true,
          preserveScroll: true,
        });
      }, 250),
    },
  },
};
</script>

<style></style>
