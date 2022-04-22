<template>
  <Link
    :href="href"
    :class="classes"
    class="rounded-full font-bold  py-2 transition duration-300 ease-in-out uppercase"
  >
    <slot />
  </Link>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Link,
  },
  props: ["href", "active"],

  computed: {
    classes() {
      return this.active ? "" : "button_link  transition";
    },
  },
});
</script>
