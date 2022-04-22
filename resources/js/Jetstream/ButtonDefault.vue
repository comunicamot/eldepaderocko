<template>
  <button
    :type="type"
    class="
      bg-gray-800
      text-white
      hover:bg-gray-700
      px-4
      rounded-full
      font-bold
      py-2
      transition
      duration-300
      ease-in-out
      uppercase
      border-0
    "
  >
    <slot></slot>
  </button>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
  props: {
    type: {
      type: String,
      default: "submit",
    },
  },
});
</script>
