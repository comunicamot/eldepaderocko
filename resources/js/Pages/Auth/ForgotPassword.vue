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
        <Head title="Forgot Password" />

        <jet-authentication-card>
          <template #logo>
            <jet-authentication-card-logo />
          </template>

          <div class="mb-4 text-sm text-gray-600">
            ¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber
            su dirección de correo electrónico y le enviaremos un enlace de
            restablecimiento de contraseña que le permitirá elegir una nueva.
          </div>

          <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
          </div>

          <jet-validation-errors class="mb-4" />

          <form @submit.prevent="submit">
            <div>
              <jet-label for="email" value="Email" />
              <jet-input
                id="email"
                type="email"
                class="mt-1 block w-full"
                v-model="form.email"
                required
                autofocus
              />
            </div>

            <input type="submit" value="Enviar" class="btn solid" />
          </form>
        </jet-authentication-card>
      </div>
    </div>
    <div class="space-page"></div>
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCoverLogin";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import ButtonDiv from "../../components/ButtonDiv.vue";

import { Head } from "@inertiajs/inertia-vue3";
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";

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
    JetInput,
    JetLabel,
    JetValidationErrors,
  },

  props: {
    status: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        email: "",
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("password.email"));
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