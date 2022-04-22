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
          <div class="flex md:flex-1">
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
          </div>
          <div class="md:flex-1">
            <button class="button-register py-8">Registrarse</button>
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
  },
};
</script>
<style lang="css" scoped>
</style>
