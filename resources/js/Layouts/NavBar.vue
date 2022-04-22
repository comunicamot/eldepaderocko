<template>
  <nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li>
          <a
            data-toggle="sidebar"
            class="nav-link nav-link-lg collapse-btn cursor-pointer"
          >
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
              class="feather feather-align-justify text-gray-600"
            >
              <line x1="21" y1="10" x2="3" y2="10"></line>
              <line x1="21" y1="6" x2="3" y2="6"></line>
              <line x1="21" y1="14" x2="3" y2="14"></line>
              <line x1="21" y1="18" x2="3" y2="18"></line>
            </svg>
          </a>
        </li>
      </ul>
    </div>
    <div class="flex items-center">
      <div>
        <img
          alt="image"
          src="/assets/img/user.png"
          class="user-img-radious-style cursor-pointer"
          data-toggle="dropdown"
        />

        <div class="dropdown-menu dropdown-menu-right pullDown">
          <div class="dropdown-title"> <strong>Hola</strong> {{ $page.props.user.name }}</div>
          <a href="profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item has-icon cursor-pointer" @click="logout">
            <i class="fas fa-sign-out-alt text-danger"></i> Salir
          </a>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
export default {
  components: {
    JetDropdownLink,
  },
  methods: {
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
};
</script>

<style>
</style>

