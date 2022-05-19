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
        <Head title="Reset Password" />
        <jet-authentication-card>
          <template #logo>
            <jet-authentication-card-logo />
          </template>

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

            <div class="mt-4">
              <jet-label for="password" value="Password" />
              <jet-input
                id="password"
                type="password"
                class="mt-1 block w-full"
                v-model="form.password"
                required
                autocomplete="new-password"
              />
            </div>

            <div class="mt-4">
              <jet-label for="password_confirmation" value="Confirm Password" />
              <jet-input
                id="password_confirmation"
                type="password"
                class="mt-1 block w-full"
                v-model="form.password_confirmation"
                required
                autocomplete="new-password"
              />
            </div>

            <input type="submit" value="Cambiar" class="btn solid" />
          </form>
        </jet-authentication-card>
      
    </div>
 
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
    email: String,
    token: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        token: this.token,
        email: this.email,
        password: "",
        password_confirmation: "",
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("password.update"), {
        onFinish: () => this.form.reset("password", "password_confirmation"),
      });
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