<template>
  <Layout>
    <SliderCover>
      <template #swiper>
        <SwiperCover
          :images="['/image/web/nosotros/inicio_3.jpg']"
        ></SwiperCover>
      </template>
    </SliderCover>

    <div class="space-page"></div>

    <div class="container mx-auto">
      <div
        class="
          flex-col
          md:flex-row md:justify-center md:items-start
          content-center
          md:space-x-3
          space-y-2
        "
      >
        <div class="flex justify-center mt-8" style="margin-top: 45px">
          <ButtonDiv
            text="Experiencia"
            styles="c-red-s w-1/2 md:w-1/4"
          ></ButtonDiv>
        </div>
      </div>
    </div>
    <div class="space-page"></div>
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCoverLogin";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import ButtonDiv from "../../../components/ButtonDiv.vue";

export default {
  components: {
    SliderCover,
    SwiperCover,
    Layout,
    ButtonDiv,
  },
};
</script>


<style>
.movil_trayectoria {
  display: flex;
  margin-bottom: 45px;
  margin-top: 45px;
  font-size: 23px;
  margin-left: 100px;
  margin-right: 100px;
}

@media only screen and (max-width: 600px) {
  .movil_trayectoria {
    display: flex;
    margin: 35px 20px;
    font-size: 23px;
  }
  .movil_trayectoria_icons {
    font-size: 10px;
  }
}
</style>