<template>
  <div
    class="bg-white shadow-md"
  >
    <a :href="href">
      <img class=" " :src="url" alt="" style="width: 100%;"/>
    </a>
    <div class="" :class="bg">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    url: String,
    bg: String,
    href: String,
  },
};
</script>

<style>
</style>