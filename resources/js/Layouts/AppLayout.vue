<template>
  <Head>
    <meta charset="UTF-8" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1,
			shrink-to-fit=no"
      name="viewport"
    />
    <title>Aegis - Admin Dashboard Template</title>

    <link rel="stylesheet" href="/assets/css/app.min.css" />

    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/components.css" />

    <link rel="stylesheet" href="/assets/css/custom.css" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="/assets/img/favicon.ico"
    />
  </Head>
  <div class="main-wrapper main-wrapper-1">
    <div class="navbar-bg"></div>
    <Navbar></Navbar>
    <SideBar></SideBar>
    <div class="main-content">
      <section class="section">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            
            <Link class="breadcrumb-item" href="/admin"><a >Dashboard</a></Link>
            <slot name="breadcrumb"></slot>
          
          </ol>
        </nav>

        <slot></slot>
      </section>
      <slot name="modal"></slot>
    </div>
  </div>
</template>


<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import SideBar from "./SideBar";
import Navbar from "./Navbar";

export default {
  components: {
    Head,
    SideBar,
    Navbar,Link
  },
  mounted () {
    mainInit()
  }
};
</script>

<style>
</style>