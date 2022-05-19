<template>
  <Layout>
    <SliderCover>
      <template #swiper>
        <SwiperCover
          :images="['/image/web/nosotros/inicio_3.jpg']"
        ></SwiperCover>
      </template>
    </SliderCover>

    <div class="container mx-auto">
      <Head title="Email Verification" />

      <jet-authentication-card>
        <template #logo>
          <jet-authentication-card-logo />
        </template>

        <div class="mb-4 text-sm text-gray-600">
          Gracias por registrarte! Antes de comenzar, ¿podría verificar su
          dirección de correo electrónico haciendo clic en el enlace que le
          acabamos de enviar? Si no recibiste el correo electrónico, con gusto
          te enviaremos otro.
        </div>

        <div
          class="mb-4 font-medium text-sm text-green-600"
          v-if="verificationLinkSent"
        >
          Se ha enviado un nuevo enlace de verificación a la dirección de correo
          electrónico que proporcionó durante el registro.
        </div>

        <form @submit.prevent="submit">
          <div class="mt-4 flex items-center justify-between">
            <input
              type="submit"
              value=" Reenviar Email"
              class="btn solid"
            />

            <Link
              :href="route('logout')"
              method="post"
              as="button"
              class="underline text-sm text-gray-600 hover:text-gray-900"
              style="margin-left: 45px;"
              >Cerrar Sesión</Link
            >
          </div>
        </form>
      </jet-authentication-card>
    </div>
  </Layout>
</template>

<script>
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import JetButton from "@/Jetstream/Button.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

import SliderCover from "@/components/SliderCoverLogin";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import ButtonDiv from "../../components/ButtonDiv.vue";

export default {
  components: {
    SliderCover,
    SwiperCover,
    Layout,
    ButtonDiv,

    Head,
    JetAuthenticationCard,
    JetAuthenticationCardLogo,
    JetButton,
    Link,
  },

  props: {
    status: String,
  },

  data() {
    return {
      form: this.$inertia.form(),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("verification.send"));
    },
  },

  computed: {
    verificationLinkSent() {
      return this.status === "verification-link-sent";
    },
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