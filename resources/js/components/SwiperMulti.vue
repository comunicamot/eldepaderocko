<template >
  <div class="multi_swiper">
    <swiper
    :slidesPerView="slidesNumber"
    :spaceBetween="30"
    :loop="true"
    :pagination="{
      clickable: true,
    }"
    :modules="modules"
    class="myswiper my-5"
  >
    <slot></slot>
  </swiper>
  </div>
</template>

<script>
import { Swiper } from "swiper/vue";

// import "swiper/css";

import "swiper/css/pagination";

import { Pagination } from "swiper";
export default {
  props: {
    slidesNumber: Number,
  },
  components: {
    Swiper,
  },
  setup() {
    return {
      modules: [Pagination],
    };
  },
};
</script>

<style>
.myswiper {
  width: 100%;
  /* height: 550px; */
}
.swiper-wrapper {
  padding-bottom: 30px;
}

.swiper-container-horizontal > .swiper-pagination-bullets,
.swiper-pagination-custom,
.swiper-pagination-fraction {
  bottom: 0px !important;
}

.multi_swiper .swiper-pagination .swiper-pagination-bullet{
  background: #C4C4C4 !important;
}


</style>
