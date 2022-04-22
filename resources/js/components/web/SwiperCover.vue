<template>
  <swiper
    :slidesPerView="1"
    :spaceBetween="30"
    :loop="this.infinity"
    :pagination="{
      clickable: true,
    }"
    :navigation="false"
    :autoplay="{
      delay: 2500,
      disableOnInteraction: false,
    }"
    :modules="modules"
    class="mySwiper"
  >
    <template v-for="(item, index) in images" :key="index">
      <swiper-slide>
        <img :src="item" class="brightness-50" />
      </swiper-slide>
    </template>
  </swiper>

  
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Navigation, Pagination, Autoplay } from "swiper";
export default {
  props: {
    images: Array,
    infinity:Boolean,
    initialPlay:{
        type:Boolean,
        default:true
    }
  },
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Navigation, Pagination, Autoplay],
    };
  },
};
</script>

<style>
</style>