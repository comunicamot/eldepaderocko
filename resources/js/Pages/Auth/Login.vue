<template>
  <Layout>
    <SliderCover>
      <template #swiper>
        <SwiperCover
          :images="['/image/web/nosotros/inicio_3.jpg']"
        ></SwiperCover>
      </template>
    </SliderCover>

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
      {{ status }}
    </div>

    <div class="container_login">
      <div class="forms_container_login">
        <div class="signin-signup">
          <form @submit.prevent="submit_login" class="sign-in-form">
            <h2 class="title_login">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                id="email"
                type="email"
                v-model="form.email"
                autocomplete="username"
                placeholder="Username"
                required="yes"
                autofocus
              />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                id="password"
                type="password"
                name="passwordlogin"
                autocomplete="current-password"
                placeholder="Password"
                v-model="form.password"
                required="yes"
              />
              <i
                class="far fa-eye"
                id="togglePasswordLogin"
                style="cursor: pointer"
              ></i>
            </div>

            <div class="block mt-4">
              <label class="flex items-center">
                <jet-checkbox name="remember" v-model:checked="form.remember" />
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
              </label>
            </div>

            <div class="flex items-center justify-center mt-4">
              <Link
                v-if="canResetPassword"
                :href="route('password.request')"
                class="underline text-sm text-gray-600 hover:text-gray-900"
              >
                ¿Olvidaste tu contraseña?
              </Link>
            </div>

            <input
              type="submit"
              value="Ingresar"
              class="btn solid"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            />

            <!-- <div class="social-media">
                <a class="icon-mode" onclick="toggleTheme('dark');"
                  ><i class="fas fa-moon"></i
                ></a>
                <a class="icon-mode" onclick="toggleTheme('light');"
                  ><i class="fas fa-sun"></i
                ></a>
              </div>
              <p class="text-mode">Change theme</p> -->
          </form>
          <form @submit.prevent="submit_register" class="sign-up-form">
            <h2 class="title_login">Registrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                type="text"
                id="name"
                v-model="form.name"
                autocomplete="username"
                placeholder="Nombre"
                required="yes"
                autofocus
              />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input
                type="email"
                id="email"
                v-model="form.email"
                autocomplete="email"
                placeholder="Email"
                required="yes"
              />
            </div>

            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input
                type="text"
                id="telefono"
                v-model="form.telefono"
                placeholder="Teléfono"
                required="yes"
              />
            </div>

            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input
                type="text"
                id="dni"
                v-model="form.dni"
                placeholder="DNI"
                required="yes"
              />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                id="password"
                name="passwordRegister"
                v-model="form.password"
                autocomplete="current-password"
                placeholder="Password"
                required="yes"
              />
              <i
                class="far fa-eye"
                id="togglePassword"
                style="cursor: pointer"
              ></i>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                id="password_confirmation"
                v-model="form.password_confirmation"
                autocomplete="current-password"
                placeholder="Confirm Password"
                required="yes"
              />
              <i class="far fa-eye" id="toggleReg" style="cursor: pointer"></i>
            </div>

            <div
              class="mt-4"
              v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature"
            >
              <jet-label for="terms">
                <div class="flex items-center">
                  <jet-checkbox
                    name="terms"
                    id="terms"
                    v-model:checked="form.terms"
                  />

                  <div class="ml-2">
                    I agree to the
                    <a
                      target="_blank"
                      :href="route('terms.show')"
                      class="
                        underline
                        text-sm text-gray-600
                        hover:text-gray-900
                      "
                      >Terms of Service</a
                    >
                    and
                    <a
                      target="_blank"
                      :href="route('policy.show')"
                      class="
                        underline
                        text-sm text-gray-600
                        hover:text-gray-900
                      "
                      >Privacy Policy</a
                    >
                  </div>
                </div>
              </jet-label>
            </div>

            <input
              type="submit"
              value="Crear"
              class="btn solid"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            />
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿No tienes una cuenta?</h3>
            <p>
              Crea tu cuenta ahora mismo para seguir a las personas y darle me
              gusta a las publicaciones.
            </p>
            <button class="btn transparent" id="sign-up-btn">Regístrate</button>
          </div>
          <!-- <img src="img/log.svg" class="image" alt="" /> -->
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>
              Inicia sesión para ver tus notificaciones y publicar tus fotos
              favoritas
            </p>
            <button class="btn transparent" id="sign-in-btn">Login</button>
          </div>
          <!-- <img src="img/register.svg" class="image" alt="" /> -->
        </div>
      </div>
    </div>
  </Layout>
</template>

<script>
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
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
    JetInput,
    JetCheckbox,
    JetLabel,
    JetValidationErrors,
    Link,
  },

  props: {
    canResetPassword: Boolean,
    status: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        // email: "admin@gmail.com",
        // password: "123456",
        //Logearse
        remember: false,
        //Registrar
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
        terms: false,
      }),
    };
  },

  methods: {
    submit_login() {
      this.form
        .transform((data) => ({
          ...data,
          remember: this.form.remember ? "on" : "",
        }))
        .post(this.route("login"), {
          onFinish: () => this.form.reset("password"),
        });
    },

    submit_register() {
      this.form.post(this.route("register"), {
        onFinish: () => this.form.reset("password", "password_confirmation"),
      });
    },

    geteventLogin() {
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container_login");

      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });

      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });

      const htmlEl = document.getElementsByTagName("html")[0];
      const currentTheme = localStorage.getItem("theme")
        ? localStorage.getItem("theme")
        : null;
      if (currentTheme) {
        htmlEl.dataset.theme = currentTheme;
      }
      const toggleTheme = (theme) => {
        htmlEl.dataset.theme = theme;
        localStorage.setItem("theme", theme);
      };

      //::::::::::::::::::: CONTRASEÑA :::::::::::::::::::::::
      const togglePassword = document.querySelector("#togglePassword");
      const password = document.querySelector("input[name=passwordRegister]");

      togglePassword.addEventListener("click", function (e) {
        const type =
          password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        this.classList.toggle("fa-eye-slash");
      });

      //::::::::::::::::::: RECUPERAR CONTRASEÑA :::::::::::::::::::::::
      const toggleReg = document.querySelector("#toggleReg");
      const pass = document.querySelector("#password_confirmation");

      toggleReg.addEventListener("click", function (e) {
        const type =
          pass.getAttribute("type") === "password" ? "text" : "password";
        pass.setAttribute("type", type);
        this.classList.toggle("fa-eye-slash");
      });

      //::::::::::::::::::: LOGEARSE :::::::::::::::::::::::
      const toggleRegLogin = document.querySelector("#togglePasswordLogin");
      const pass_login = document.querySelector("input[name=passwordlogin]");

      toggleRegLogin.addEventListener("click", function (e) {
        const type =
          pass_login.getAttribute("type") === "password" ? "text" : "password";
        pass_login.setAttribute("type", type);
        this.classList.toggle("fa-eye-slash");
      });
    },
  },
  mounted() {
    this.geteventLogin();
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