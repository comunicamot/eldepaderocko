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
              <input class="input_rocko" placeholder="Tu nombre" type="text" style="color: #000;background-color: #C4C4C4;" required />
            </div>
            <div class="mb-4">
              <input class="input_rocko" placeholder="Tu email" type="email" style="color: #000;background-color: #C4C4C4;" required />
            </div>
            <div class="mb-4">
              <input class="input_rocko" placeholder="Asunto" type="text" style="color: #000;background-color: #C4C4C4;" required />
            </div>
            <div class="mb-4">
              <textarea class="input_rocko" placeholder="Mensaje" type="text" style="color: #000;background-color: #C4C4C4;" required />
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
              >San isidro - Lima - Perú</span
            >
          </div>
          <div>
            <p class="contact_subT">Email</p>
            <span class="contact_desc">contacto@eldepaderocko.com</span>
          </div>
          <div>
            <p class="contact_subT">Teléfono</p>
            <span class="contact_desc">+51 928576714 </span>
          </div>

          <!-- <div class="">
            <img src="/image/us_redes.png" alt="" srcset="" />
          </div> -->
          <!-- <div>
            <p class="us_email">@eldepaderocko</p>
          </div> -->

           <div class="flex md:flex-1">
          <a
            href="https://www.instagram.com/eldepaderocko"
            target="_blank"
           
          >
            <img
              src="/image/web/redes/instagram.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
            />
          </a>
          <a
            href="https://www.tiktok.com/@eldepaderocko"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              src="/image/web/redes/tiktok.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
          /></a>
          <a
            href="https://web.facebook.com/eldepaderocko/"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
               src="/image/web/redes/facebook.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
          /></a>
          <a
            href="https://pe.linkedin.com/company/eldepaderocko"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
             src="/image/web/redes/linkedin.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
          /></a>
          <a
            href="https://open.spotify.com/user/7y4usr4t89a7559b3jxs45khr?si=zrzqsWbMRGWMjGCK2pabpA&utm_source=copy-link"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              src="/image/web/redes/rss.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
          /></a>
          <a
            href="https://twitter.com/Eldepaderocko"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
             src="/image/web/redes/twitter.png"
              alt=""
              srcset=""
              class="cursor-pointer"
          /></a>
        </div>
        </div>
      </div>
    </div>
     <div class="space-page"></div>
    <div class="">
        <!-- <img src="/image/contact_map.png" alt="" class="contact_map"> -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13122.140217641214!2d-77.04367751746449!3d-12.096015190491299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c842bd2342fb%3A0x7e3183f45f461207!2sSan%20Isidro!5e0!3m2!1sen!2spe!4v1650768077883!5m2!1sen!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
.contact_desc {
    font-family: "Raleway Thin";
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 26px;
    letter-spacing: 0em;
    text-align: left;
}
</style>
