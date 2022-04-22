<template >
  <div class="contain-cover">
    <slot name="swiper"></slot>
    <div class="child-cover-relative mt-0">
      <slot name="content_extra"></slot>
      <div class="my-5">
        <p class="title_page">{{ title }}</p>
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
