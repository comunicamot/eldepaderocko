<template>
  <!-- component -->
  <div class="visible md:invisible">
    <header class="iconSidebar">
      <button class="" id="btnNav" type="button" @click="showSide">
        <svg
          class="h-8 w-8 text-white"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 10h16M4 14h16M4 18h16"
          />
        </svg>
      </button>
    </header>

    <Sidebar></Sidebar>
  </div>

  <div class="invisible md:visible">
    <header class="header">
      <div class="py-4 px-2 md:mx-10">
        <div
          class="
            flex
            md:flex-row
            w-full
            flex-wrap
            items-center
            text-center
            animated
            py-2
          "
        >
          <div class="md:flex-1 text-center">
            <div>
              <LinkActive href="/">
                <img :src="'/image/rocko.png'" alt=""
              /></LinkActive>
            </div>
          </div>
          <div class="md:flex-1">
            <LinkActive href="/alquilar">Alquilar</LinkActive>
          </div>
          <div class="md:flex-1">
            <LinkActive
              href="/nosotros"
              :active="$page.url === '/nosotros' ? true : false"
              >Nosotros</LinkActive
            >
          </div>
          <div class="md:flex-1">
            <LinkActive href="/rent">Rockofriends</LinkActive>
          </div>
          <div class="md:flex-1">
            <LinkActive
              href="/noticias"
              :active="$page.url === '/noticias' ? true : false"
              >Noticias</LinkActive
            >
          </div>

          <!-- <div class="flex md:flex-1">
            <a
              href="https://www.instagram.com/eldepaderocko"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img
                src="/image/icons/inst.png"
                alt=""
                srcset=""
                class="cursor-pointer"
              />
            </a>
            <a
              href="https://www.tiktok.com/@eldepaderocko"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img
                src="/image/icons/tiktok.png"
                alt=""
                srcset=""
                class="cursor-pointer"
            /></a>
            <a
              href="https://web.facebook.com/eldepaderocko/"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img
                src="/image/icons/fb.png"
                alt=""
                srcset=""
                class="cursor-pointer"
            /></a>
            <a
              href="https://pe.linkedin.com/company/eldepaderocko"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img
                src="/image/icons/link.png"
                alt=""
                srcset=""
                class="cursor-pointer"
            /></a>
          </div> -->

          <div class="md:flex-2 dropdown" v-if="$page.props.user">
            <div
              class="flex justify-end"
              style="border: 1px solid white; border-radius: 45px"
            >
              <img src="/image/logo.png" alt="" />
            </div>
            <div class="dropdown__list">
              <a href="#" class="dropdown__item"
                ><strong>Hola, </strong> {{ $page.props.user.name }}</a
              >
              <a href="/perfil" class="dropdown__item">Mi cuenta Rockocard</a>
              <a href="/reserva" class="dropdown__item">Mis reservas</a>
              <a href="/experiencia" class="dropdown__item"
                >Mis experiencias rocko</a
              >
              <a href="#" class="dropdown__item" @click="logout">Salir</a>
            </div>
          </div>

          <div class="md:flex-2 dropdown" v-else>
            <LinkActive href="/login">
              <button class="button-register dropdown__btn">
                Iniciar sesión
              </button></LinkActive
            >

              <LinkActive href="/login" style="margin-left: 20px;">
              <button class="button-register py-8" style="color: black;background: #f4c1e1;">
                Regístrate
              </button></LinkActive
            >
          </div>


        </div>
      </div>
    </header>
  </div>
</template>
<script>
import LinkActive from "@/components/LinkActive";
import Sidebar from "@/components/Sidebar";
export default {
  name: "Menu",
  components: {
    LinkActive,
    Sidebar,
  },

  data() {
    return {};
  },
  methods: {
    showSide() {
      const nav = document.querySelector(".nav");
      nav.classList.add("nav--open");
    },
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
};
</script>
<style lang="css" scoped>
.dropdown {
  position: relative;
}
.dropdown__btn {
  position: relative;
  display: inline-flex;
  /* padding: 1rem; */
  /* border: none; */
  font-size: inherit;
  /* color: #7066cc; */
  font-family: inherit;
  cursor: pointer;
  background-color: transparent;
  /* border-radius: 3px; */
  z-index: 2;
}
.dropdown__list {
  position: absolute;
  right: 0;
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  display: flex;
  flex-direction: column;
  padding-top: 10px;
  border-radius: 3px;
  overflow: hidden;
  transform: translateY(-20%);
  visibility: hidden;
  opacity: 0;
  transition: all 0.25s;
  z-index: 1;
}
.dropdown__item {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding: 1rem 1.5rem;
  font-size: 1rem;
  text-decoration: none;
  color: #2e2673;
  background-color: white;
  transition: background-color 0.2s;
}
.dropdown__item:first-child {
  border-radius: 3px 3px 0 0;
}
.dropdown__item:hover {
  background-color: white;
}
.dropdown__item span {
  height: 1rem;
  width: 1rem;
  margin-left: 10px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 0.65rem;
  color: #fff;
  background-color: #7066cc;
  border-radius: 50%;
}
.dropdown:hover .dropdown__btn {
  color: white;
}
.dropdown:hover .dropdown__list {
  transform: translateY(0);
  visibility: visible;
  opacity: 1;
}
</style>
