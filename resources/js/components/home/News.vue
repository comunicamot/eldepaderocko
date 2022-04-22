<template>
  <TitlePage text="Noticias"></TitlePage>
  <div class="flex flex-col md:flex-row gap-5">
    <template v-for="(item,index) in 3" :key="index">
      <div class="w-full md:w-4/12">
        <Card url="/image/new.webp">
          <div class="bg-black py-3">
            <p class="n_card_t">Noticia 1 as dflds</p>
            <p class="n_card_d">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
              ipsum dolor sit
            </p>
            <div class="flex justify-center items-center">
              <img src="/image/git.png" alt="" srcset="" />
              <div class="n_card_git">Juan osorio</div>
            </div>
          </div>
        </Card>
      </div>
    </template>
  </div>
  <div class="flex justify-center mt-4">
    <ButtonDiv text="Ver más " styles="c-red-s w-1/2 md:w-1/4" />
  </div>
</template>

<script>
import Card from "../Card";
import ButtonDiv from "../ButtonDiv";
import TitlePage from "../TitlePage";
export default {
  components: {
    Card,
    ButtonDiv,
    TitlePage,
  },
};
</script>

<style>
</style>