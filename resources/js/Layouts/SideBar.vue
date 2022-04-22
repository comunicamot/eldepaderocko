<template>
  <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <Link href="/admin">
          <a>
            <img alt="image" src="/image/logof.webp" />
            <!-- <span class="logo-name">Aegis</span> -->
          </a>
        </Link>
      </div>
      <div class="sidebar-user"></div>
      <ul class="sidebar-menu">
        <li
          class="dropdown"
          :class="$page.url.startsWith('/admin/news') ? 'active' : ''"
        >
          <a href="#" class="nav-link has-dropdown" @click="removeShow('news')">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-monitor"
            >
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
              <line x1="8" y1="21" x2="16" y2="21"></line>
              <line x1="12" y1="17" x2="12" y2="21"></line></svg
            ><span>Dashboard</span>
          </a>
          <ul
            class="dropdown-menu"
            :class="$page.url.startsWith('/admin/news') ? 'l_show' : ''"
            ref="news"
            id="news"
          >
            <li>
              <Link :href="route('news.index')" class="nav-link">
                Noticias
              </Link>
            </li>
          </ul>
        </li>
      </ul>
    </aside>
  </div>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    Link,
  },
  methods: {
    removeShow(ele) {
      //  this.$refs.news.classList.remove('l_show')
      document.querySelector("#" + ele).classList.remove("l_show");
    },
  },
};
</script>

<style>
.l_show {
  display: block !important;
}
</style>