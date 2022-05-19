<template>
  <TitlePage text="Noticias"></TitlePage>
  <div class="flex flex-col md:flex-row gap-5">
    <template v-for="(item, index) in news" :key="index">
      <div class="w-full md:w-4/12">
        <Card :url="item.image_url" :href="route('noticia.detail', item.slug)">
          <div class="bg-black py-3">
            <p class="n_card_t">{{ item.title }}</p>
            <p class="n_card_d">
              {{ item.description }}
            </p>
            <div class="flex justify-center items-center">
              <img src="/image/git.png" alt="" srcset="" />
              <div class="n_card_git">{{ item.name }}</div>
            </div>
          </div>
        </Card>
      </div>
    </template>
  </div>
  <div class="flex justify-center" style="margin-top:40px;">
    <ButtonDiv text="Ver más " styles="c-red-s w-1/2 md:w-1/4" />
  </div>
</template>

<script>
import Card from "../Card";
import ButtonDiv from "../ButtonDiv";
import TitlePage from "../TitlePage";
export default {
  props: {
    news: Object,
  },

  components: {
    Card,
    ButtonDiv,
    TitlePage,
  },
};
</script>

<style>
</style>