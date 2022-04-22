<template >
  <div class="">
 
    <div class="w-full md:w-1/4 title p-5">
      <div class="w-full">
        <span class="t_al">Alquilar</span>
      </div>
    </div>
    <div class="flex flex-col md:flex-row flex-wrap">
      <div class="w-full md:w-1/4 flex items-center justify-center bg-white">
        <select class="select-auto border-0 w-1/2 cursor-pointer t_comb">
          <option value="">Depas</option>
          <option value="">xx</option>
        </select>
      </div>
      <div class="w-full md:w-1/2">
        <input
          class="input px-4 py-2 w-full"
          type="text"
          placeholder="Buscar por ubicación o por palabra clave"
        />
      </div>
      <div class="w-full md:w-1/4 btnsearch text-center flex items-center justify-center">
        <span class="t_search">Buscar</span>
      </div>
    </div>
    
  </div>
</template>
<script>
export default {
  name: "SearchHome",

  data() {
    return {};
  },
};
</script>
<style lang="css" scoped>

</style>
