<template>
  <div class="m-10">
    <TitlePage text="Redes sociales"></TitlePage>

    <div class="flex flex-col md:flex-row gap-14">
      <template v-for="(item,index) in 3" :key="index">
        <div class="w-full md:w-4/12">

          <CardImage
            url="/image/redes.webp"
            classes="dark:border-gray-600"
          ></CardImage>

        </div>
      </template>
    </div>

    
           <iframe allowtransparency="true" frameborder="0" height="710" scrolling="no" src="http://instagram.com/p/CcoJq7TuYTT/embed" width="612" class="lazyload"></iframe>


    <div class="flex justify-center my-8">
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
  data(){
      return {
          data:[1,1,1]
      }
  }
};
</script>

<style>


/* Instagram Embed */
iframe[data-src*="instagram.com"], iframe[src*="instagram.com"] {
  display: block;
  margin: 3em auto;
  box-shadow: 0 0 3px #ccc;
}

</style>