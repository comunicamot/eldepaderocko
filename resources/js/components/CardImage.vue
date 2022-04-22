<template>
  <div
    class="
      border-solid border-2 border-gray-300
      bg-white
      shadow-md
      rounded-lg
      
      cardD
      
    "
    :class="classes"
  >
    <img class="img-card text-center  " :src="url" />
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
