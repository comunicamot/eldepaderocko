<template>
  <div class="">
    <TitlePage text="Depas"></TitlePage>
    <div class="flex flex-col md:flex-row flex-wrap gap-5">
      <div class="flex-auto w-full md:w-32">
        <DepaItem url="/image/depa.png" text="Punta hermosa 1"></DepaItem>
      </div>
      <div class="flex-auto w-full md:w-32">
        <DepaItem url="/image/depad.png" text="Punta hermosa 2"></DepaItem>
      </div>
      <div class="flex-auto w-full md:w-32">
        <DepaItem url="/image/depat.png" text="Punta hermosa 3"></DepaItem>
      </div>
    </div>
    <div class="flex justify-center mt-8">
      <ButtonD text="Ver más" styles="c-red-s text-black w-1/2 md:w-1/4"></ButtonD>
    </div>
  </div>
</template>

<script>
import DepaItem from "../DepaItem";
import ButtonD from "../ButtonDiv.vue";
import TitlePage from "../TitlePage.vue";
export default {
  components: {
    DepaItem,
    ButtonD,
    TitlePage
  },
};
</script>

<style>
</style>