<template>
  <Menu></Menu>

  <!-- <main class="container mx-auto">
    <slot></slot>
  </main> -->

  <div class="mx-auto">
    <slot></slot>
  </div>
   
<Footer></Footer>
</template>

<script>
import Menu from "../Menu";
import Footer from "./Footer.vue";
export default {
  components: { Menu,Footer },
};
</script>

<style>
</style>