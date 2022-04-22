<template>
  <div class="space" :class="classes"></div>
</template>

<script>
export default {
  props: {
    classes: String,
  },
};
</script>

<style>
.space {
  width: 100%;
}
.space-x {
  height: 62px;
}
.space-m {
  height: 73px;
}
.space-l {
  height: 93px;
}
</style>