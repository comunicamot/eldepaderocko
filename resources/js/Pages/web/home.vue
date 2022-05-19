<template>
  <Layout>
    <SliderCover title="1er Portal Inmobiliario Pet Friendly">
      <template #content_extra>
        <SearchHome></SearchHome>

        
      </template>
      <template #swiper>
        <SwiperCover
          :images="['/image/inicio.webp', '/image/web/nosotros/inicio_2.jpg']"
          :infinity="true"
        >
        </SwiperCover>
      </template>
    </SliderCover>
    <!-- <div class="space-page-md"></div> -->
    <Info></Info>
    <div class="space-page"></div>
    <div class="container mx-auto">
      <Depas></Depas>

      <Friends></Friends>

      <div class="hidden md:block">
        <RockoMundi bg="bg-gray-200 text-black "></RockoMundi>
      </div>
    </div>
    <div class="space-page"></div>
    <div class="dog_bg flex justify-start items-center">
      <!-- <img src="/image/dog.png" class="brightness-50" alt="" srcset="" /> -->
      <div class="w-1/2">
        <p class="dog_text">
          ¡Los engreidos <br />
          no pagan!
        </p>
      </div>
    </div>
    <div class="space-page"></div>

    <div class="container mx-auto">
      <News :news="news"></News>
    </div>

    <div class="space-page"></div>
    <RockoHa></RockoHa>
    <!-- <div class="space-page-md"></div> -->
    <RedesS></RedesS>
    <div class="space-page"></div>
  </Layout>
</template>
<script>
import Depas from "@/components/home/Depas.vue";

import RockoMundi from "@/components/RockoMundi.vue";

import Info from "@/components/home/Info.vue";
import Friends from "@/components/home/Friends";
import News from "@/components/home/News";
import RockoHa from "@/components/home/RockoHa";
import RedesS from "@/components/home/RedesS";
import Footer from "@/components/web/Footer";

import SliderCover from "@/components/SliderCover";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import SearchHome from "@/components/SearchHome";

export default {
  props: {
    news: Object,
  },

  components: {
    Layout,
    SearchHome,

    RockoMundi,
    Depas,
    Info,
    Friends,
    News,
    RockoHa,
    Footer,
    RedesS,
    SliderCover,
    SwiperCover,
  },
  data() {
    return {};
  },
};
</script>
<style lang="css" scoped>
</style>
