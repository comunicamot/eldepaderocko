<template>
  <Layout>
    <SliderCover
      title="SOMOS MÁS DE 25 000 ROCKOFRIENDS EN PERÚ Y LATINOAMÉRICA"
    >
      <template #swiper>
        <SwiperCover :images="['/image/nosotros.webp']"></SwiperCover>
      </template>
    </SliderCover>
    <div class="space-page"></div>
    <div class="container mx-auto">
      <div
        class="
          flex flex-col
          md:flex-row md:justify-center md:items-start
          content-center
          md:space-x-3
          space-y-2
        "
      >
        <div class="flex-1 px-5 md:px-8">
          <span class="title-us py-5"> Our team culture </span>
          <p class="py-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
            porttitor neque in mi mollis tempus. Ut et nisl ligula. Proin sed
            consectetur purus, dignissim dapibus risus. Ut arcu ligula,
            pellentesque sed tempus in, venenatis non velit. Orci varius natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            In et enim a erat dignissim vehicula vel bibendum leo. Aliquam
            tempus nisi velit. Nulla facilisi. Maecenas et tortor nec metus
            lobortis accumsan ac nec metus. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Etiam vitae consequat nisl, id
            tristique magna. Pellentesque eu convallis leo, quis dapibus nisl.
            Mauris et ultricies libero. Duis malesuada ligula sed neque
            vestibulum convallis. Fusce eu magna eget diam tincidunt tempus.
            Integer laoreet velit nec interdum molestie. Suspendisse vitae
            tellus et sapien facilisis tincidunt. Morbi malesuada dapibus
            mattis. Cras sagittis nulla ac placerat elementum.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
            porttitor neque in mi mollis tempus. Ut et nisl ligula. Proin sed
            consectetur purus, dignissim dapibus risus. Ut arcu ligula,
            pellentesque sed tempus in, venenatis non velit. Orci varius natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            In et enim a erat dignissim vehicula vel bibendum leo. Aliquam
            tempus nisi velit. Nulla facilisi. Maecenas et tortor nec metus
            lobortis accumsan ac nec metus. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Etiam vitae consequat nisl, id
            tristique magna. Pellentesque eu convallis leo, quis dapibus nisl.
            Mauris et ultricies libero. Duis malesuada ligula sed neque
            vestibulum convallis. Fusce eu magna eget diam tincidunt tempus.
            Integer laoreet velit nec interdum molestie. Suspendisse vitae
            tellus et sapien facilisis tincidunt. Morbi malesuada dapibus
            mattis. Cras sagittis nulla ac placerat elementum.
          </p>
        </div>
        <div class="m-0 flex-1">
          <img src="/image/us.png " class="img-us" />
        </div>
      </div>
    </div>
    <div class="space-page"></div>
    <div class="w-full trajectory text-white">
      <p class="trajectory_title">Nuestra trayectoria</p>
      <!-- <p class="trajectory_desc py-5">
        Pellentesque eu convallis leo, quis dapibus nisl. Mauris et ultricies
        libero. <br />
        Duis malesuada ligula sed neque vestibulum convallis.
      </p> -->
      <div class="container">
        <div
          class="row"
          style="
            display: flex;
            margin-bottom: 45px;
            margin-top: 45px;
            font-size: 23px;
          "
        >
          <div class="col" style="margin-right: 45px">
            <strong>Visión:</strong> Ser el portal inmobiliario favorito para
            pet lovers.
          </div>
          <div class="col">
            <strong>Misión:</strong> Que todos los lugares posibles en el mundo
            sean pet friendly.
          </div>
        </div>
      </div>
      <div class="flex text-white w-3/4 justify-between py-5">
        <div class="flex flex-col items-center justify-center">
          <div>
            <img src="/image/icon_one.png" alt="" class="trajectory_icon" />
          </div>
          <div><span class="trajectory_number">25k+</span></div>
          <div> RockoFriends</div>
        </div>
        <div class="flex flex-col items-center justify-center">
          <div>
            <img src="/image/icon_two.png" alt="" class="trajectory_icon" />
          </div>
          <div><span class="trajectory_number">3 </span></div>
          <div>Depas</div>
        </div>
        <div class="flex flex-col items-center justify-center">
          <div>
            <img src="/image/icon_three.png" alt="" class="trajectory_icon" />
          </div>
          <div><span class="trajectory_number">10 </span></div>
          <div>Rockopoints</div>
        </div>
        <div class="flex flex-col items-center justify-center">
          <div>
            <img src="/image/icon_four.png" alt="" class="trajectory_icon" />
          </div>
          <div><span class="trajectory_number">10 </span></div>
          <div>Beneficios</div>
        </div>
      </div>
    </div>
    <div class="space-page"></div>
    <div
      class="flex flex-col justify-center items-center space-y-3 md:space-y-7"
    >
      <p class="text-black">
        <span class="trajectory_number">+25</span>
        <span class="trajectory_title ml-3">mil RockoFriends</span>
      </p>
      <div class="line_us"></div>
      <p class="canals_p">A través de todos nuestros canales</p>
      <div class="mx-10 md:mx-0">
        <img src="/image/us_redes.png" alt="" />
      </div>
      <p class="us_email">@eldepaderocko</p>
    </div>
    <div class="space-page"></div>
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCover";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
export default {
  components: {
    SliderCover,
    SwiperCover,
    Layout,
  },
};
</script>

<style>
</style>