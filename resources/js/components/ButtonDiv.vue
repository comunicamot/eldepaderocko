<template>
  <div
    class="py-3 px-5 buttonDiv my-2 "
    :class="[bold ? 'buttonDiv-bold' : 'buttonDiv-simple',styles]"
  >
    {{ text }}
  </div>
</template>

<script>
export default {
  props: {
    styles: String,
    text: { type: String, default: "" },
    bold: Boolean,
  },
};
</script>

<style>
.buttonDiv-bold {
  font-size: 22px;
  font-style: normal;
  font-weight: 600;
  line-height: 26px;
}
.buttonDiv {
  /* font-family: Raleway; */
  text-align: center;
  display:flex;
  align-items:center;
  justify-content:center;
  letter-spacing: 0em;
  font-style: normal;
  cursor: pointer
}

.buttonDiv-simple {
  font-size: 20px;
  font-weight: 500;
  line-height: 23px;
}
</style>