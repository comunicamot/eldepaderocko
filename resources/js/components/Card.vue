<template>
  <div
    class="bg-white shadow-md border border-gray-200   mb-5"
  >
    <a href="#">
      <img class="rounded-t-lg" :src="url" alt="" />
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
  },
};
</script>

<style>
</style>