<template>
  <nav class="nav">
    <div class="nav__links">
      <div class="flex text-right justify-end">
        <svg
          @click="hideSide"
          class="h-8 w-8 text-white cursor-pointer text-right"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <line x1="18" y1="6" x2="6" y2="18" />
          <line x1="6" y1="6" x2="18" y2="18" />
        </svg>
      </div>
      <div
        class="
          flex 
          flex-col
          w-full
          flex-wrap
          items-center
          text-center
          animated
          py-2
        "
      >
        <div class=" md:flex-1 text-center">
          <div><LinkActive href="/"><img :src="'/image/rocko.png'" alt="" /></LinkActive></div>
        </div>
        <div class=" md:flex-1">
          <LinkActive href="/rent">Alquilar</LinkActive>
        </div>
        <div class=" md:flex-1">
          <LinkActive href="/nosotros">Nosotros</LinkActive>
        </div>
        <div class=" md:flex-1">
          <LinkActive href="/rent">Rockofriends</LinkActive>
        </div>
        <div class=" md:flex-1">
          <LinkActive href="/noticias">Noticias</LinkActive>
        </div>
        <div class="flex  md:flex-1 menu_icon">
          <img src="/image/inst.svg" class="cursor-pointer" alt="" srcset="" />
          <img src="/image/tik.svg" class="cursor-pointer" alt="" srcset="" />
          <img src="/image/fb.svg" class="cursor-pointer" alt="" srcset="" />
        </div>
        <div class=" md:flex-1 my-5">
          <button class="button-register">Registrarse</button>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import LinkActive from "@/components/LinkActive";
export default {
    components:{
        LinkActive
    },
  methods: {
      
    hideSide() {
      const nav = document.querySelector(".nav");
      nav.classList.remove("nav--open");
    },
  },
};
</script>

<style>
</style>