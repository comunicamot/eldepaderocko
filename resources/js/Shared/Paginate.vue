<template>
  <nav aria-label="Page navigation example">
    <ul class="pagination" v-if="total > 10">
      <!-- <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li> -->
      <template v-for="(item, index) in links" :key="index">
        <li class="page-item" :class="item.active ? 'active' : ''">
          <Link :href="item.url">
            <a class="page-link" >
              {{ item.label }}
            </a></Link
          >
        </li>
      </template>
    </ul>
  </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  props: {
    total: Number,
    links: Object,
  },
  data() {
    return {};
  },
  components: {
    Link,
  },
};
</script>

