<template>
  <div class="container_login">
    <div class="forms_container_login">
      <div class="signin-signup">
        <form action="" class="sign-in-form">
          <h2 class="title_login">Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input
              type="text"
              name="usuario"
              autocomplete="username"
              placeholder="Username"
              required="yes"
            />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input
              type="password"
              name="contraseña"
              autocomplete="current-password"
              placeholder="Password"
              id="id_password"
              required="yes"
            />
            <i
              class="far fa-eye"
              id="togglePassword"
              style="cursor: pointer"
            ></i>
          </div>

          <input type="submit" value="Ingresar" class="btn solid" />

          <div class="social-media">
            <a class="icon-mode" onclick="toggleTheme('dark');"
              ><i class="fas fa-moon"></i
            ></a>
            <a class="icon-mode" onclick="toggleTheme('light');"
              ><i class="fas fa-sun"></i
            ></a>
          </div>
          <p class="text-mode">Change theme</p>
        </form>
        <form action="" class="sign-up-form">
          <h2 class="title_login">Registrar</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input
              type="text"
              name="usuario"
              autocomplete="username"
              placeholder="Username"
              required="yes"
            />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input
              type="email"
              name="correo"
              autocomplete="email"
              placeholder="Email"
              required="yes"
            />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input
              type="password"
              name="contraseña"
              autocomplete="current-password"
              placeholder="Password"
              id="id_reg"
              required="yes"
            />
            <i class="far fa-eye" id="toggleReg" style="cursor: pointer"></i>
          </div>

          <label class="check">
            <input type="checkbox" checked="checked" />
            <span class="checkmark"
              >I accept the <a href="#">terms and services</a></span
            >
          </label>
          <input type="submit" value="Crear" class="btn solid" />
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>¿No tienes una cuenta?</h3>
          <p>
           Crea tu cuenta ahora mismo para seguir a las personas y darle me gusta a las publicaciones.
          </p>
          <button class="btn transparent" id="sign-up-btn">Regístrate</button>
        </div>
        <!-- <img src="img/log.svg" class="image" alt="" /> -->
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>Inicia sesión para ver tus notificaciones y publicar tus fotos favoritas</p>
          <button class="btn transparent" id="sign-in-btn">Login</button>
        </div>
        <!-- <img src="img/register.svg" class="image" alt="" /> -->
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
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
        email: "admin@gmail.com",
        password: "123456",
        remember: false,
      }),
    };
  },

  methods: {
    submit() {
      this.form
        .transform((data) => ({
          ...data,
          remember: this.form.remember ? "on" : "",
        }))
        .post(this.route("login"), {
          onFinish: () => this.form.reset("password"),
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

      const togglePassword = document.querySelector("#togglePassword");
      const password = document.querySelector("#id_password");

      togglePassword.addEventListener("click", function (e) {
        const type =
          password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        this.classList.toggle("fa-eye-slash");
      });

      const toggleReg = document.querySelector("#toggleReg");
      const pass = document.querySelector("#id_reg");

      toggleReg.addEventListener("click", function (e) {
        const type =
          pass.getAttribute("type") === "password" ? "text" : "password";
        pass.setAttribute("type", type);
        this.classList.toggle("fa-eye-slash");
      });
    },
  },
  mounted() {
    this.geteventLogin();
  },
});
</script>

