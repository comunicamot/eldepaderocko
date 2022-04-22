<template>
  <div
    class="flex items-center space-x-3 paginate content-center my-5"
    v-if="total > 3"
  >
    <div :disabled="prev.url === null">
      <Link :href="prev.url">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="100%"
          height="100%"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="feather feather-chevron-left w-6 h-6"
        >
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
      </Link>
    </div>
    <template v-for="(item, index) in links" :key="index">
      <div
        v-if="item != links[0] && item != links[links.length - 1]"
        class="flex justify-center items-center paginate-item-p paginate-item"
        :class="item.active ? 'paginate-item-active' : ''"
      >
        <span class=""
          ><Link :href="item.url"> {{ item.label }}</Link></span
        >
      </div>
    </template>
    <div>
      <Link :href="next.url">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="100%"
          height="100%"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="feather feather-chevron-right w-6 h-6"
        >
          <polyline points="9 18 15 12 9 6"></polyline></svg
      ></Link>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  props: {
    links: Object,
    total: Number,
  },
  components: {
    Link,
  },
  data() {
    return {
      prev: this.links[0],
      next: this.links[this.links.length - 1],
    };
  },
};
</script>

<style>
</style>