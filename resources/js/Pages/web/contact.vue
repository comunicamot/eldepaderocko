<template>
  <Layout>
    <SliderCover title="CONTACTO">
      <template #swiper>
        <SwiperCover :images="['/image/contact.webp']"></SwiperCover>
      </template>
    </SliderCover>

    <div class="space-page"></div>
    <div class="container mx-auto">
      <div class="flex flex-col md:flex-row items-center justify-center md:space-x-14 ">
        <div class="flex-1">
          <form
            class="
            w-full
              bg-white
              shadow-lg
              rounded
              p-8
              border-2 border-gray-400
            "
          >
            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for=""
              >
                Tu nombre:
              </label>
              <input class="input_rocko  " type="text" required />
            </div>
            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for=""
              >
                Tu email:
              </label>
              <input class="input_rocko" type="email" required />
            </div>
       

            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for=""
              >
                Asunto:
              </label>
              <input class="input_rocko" type="text" required />
            </div>
            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for=""
              >
                Mensaje:
              </label>
              <textarea class="input_rocko" type="text" required />
            </div>

            <div class="flex items-center justify-between">
              <ButtonDiv
                text="Enviar mensaje"
                styles="c-red-s text-black"
                bold="true"
              ></ButtonDiv>
            </div>
          </form>
        </div>

        <div class="flex-1 space-y-3 md:space-y-5 mx-5 md:mx-10 my-5 md:my-0">
          <div>
            <span class="contact_p">Información de contacto</span>
          </div>
          <div>
            <p class="contact_subT">Dirección</p>
            <span class="contact_desc"
              >Prolongación quito 2357 - Jesús María, Lima</span
            >
          </div>
          <div>
            <p class="contact_subT">Email</p>
            <span class="contact_desc">loremipsum@eldepaderocko.com</span>
          </div>
          <div>
            <p class="contact_subT">Teléfono</p>
            <span class="contact_desc">+51 902 807 090 </span>
          </div>

          <div class="">
            <img src="/image/us_redes.png" alt="" srcset="" />
          </div>
          <div>
            <p class="us_email">@eldepaderocko</p>
          </div>
        </div>
      </div>
    </div>
     <div class="space-page"></div>
    <div class="">
        <img src="/image/contact_map.png" alt="" class="contact_map">
    </div>
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCover";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import ButtonDiv from "@/components/ButtonDiv";
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
</style>
