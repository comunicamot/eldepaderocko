<template >
  <div class="contain-cover">
    <slot name="swiper"></slot>
    <div class="child-cover-relative mt-0" style="width: 68% !important;">
      <slot name="content_extra"></slot>
      <div class="my-5">
        <p class="title_page">{{ title }}</p>
      </div>

      <div class="flex md:flex-1" style="display: inline-flex">
        <a
          href="https://www.instagram.com/eldepaderocko"
          target="_blank"
          rel="noopener noreferrer"
        >
          <img
            src="/image/icons/inst.png"
            alt=""
            srcset=""
            class="cursor-pointer"
          />
        </a>
        <a
          href="https://www.tiktok.com/@eldepaderocko"
          target="_blank"
          rel="noopener noreferrer"
        >
          <img
            src="/image/icons/tiktok.png"
            alt=""
            srcset=""
            class="cursor-pointer"
        /></a>
        <a
          href="https://web.facebook.com/eldepaderocko/"
          target="_blank"
          rel="noopener noreferrer"
        >
          <img
            src="/image/icons/fb.png"
            alt=""
            srcset=""
            class="cursor-pointer"
        /></a>
        <a
          href="https://pe.linkedin.com/company/eldepaderocko"
          target="_blank"
          rel="noopener noreferrer"
        >
          <img
            src="/image/icons/link.png"
            alt=""
            srcset=""
            class="cursor-pointer"
        /></a>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  props: { title: String },
};
</script>
<style lang="css" scoped>
</style>
