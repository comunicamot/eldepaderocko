<template>
  <div class="mx-10">
    <TitlePage text="#RockoFriends"></TitlePage>
    <div class="flex flex-col md:flex-row gap-5">
      <template v-for="(item, index) in friends" :key="index">
        <div class="w-full md:w-1/4">
          <CardImage
            :url="item"
            classes="p-2 border-gray-700"
          ></CardImage>
        </div>
      </template>
    </div>
    <div class="flex justify-center mt-8">
      <ButtonDiv text="Ver más" styles="c-red-s w-1/2 md:w-1/4"></ButtonDiv>
    </div>
  </div>
</template>

<script>
import TitlePage from "../TitlePage.vue";
import CardImage from "../CardImage.vue";
import ButtonDiv from "../ButtonDiv.vue";
export default {
  components: {
    TitlePage,
    CardImage,
    ButtonDiv,
  },
  data() {
    return {
      friends: [
        "/image/web/friends/uno.jpg",
        "/image/web/friends/dos.jpg",
        "/image/web/friends/tres.jpg",
        "/image/web/friends/cuatro.jpg",
      ],
    };
  },
};
</script>

<style>
</style>