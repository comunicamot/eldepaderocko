<template>
  <div
    class="
      border-solid border-2 border-gray-300
      bg-white
      shadow-md

      
      cardD
      
    "
    :class="classes"
  >
    <img class="img-card text-center  " :src="url" style="border: 0.01rem solid #d1d5db;" />
  </div>
</template>

<script>
export default {
  props:{
    url:String,
    classes:String
  }
};
</script>

<style>
.cardD {
  /* height: 600px; */
  width: 100%;
}
.img-card {
  height: auto;
}
</style>
