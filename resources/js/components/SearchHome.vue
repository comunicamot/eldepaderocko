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
<!-- 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13122.140217641214!2d-77.04367751746449!3d-12.096015190491299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c842bd2342fb%3A0x7e3183f45f461207!2sSan%20Isidro!5e0!3m2!1sen!2spe!4v1650768077883!5m2!1sen!2spe" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

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
