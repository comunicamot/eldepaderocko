<template>
  <div class="m-10" style="margin-top:110px;margin-bottom:0px;">
    <TitlePage text="Redes sociales"></TitlePage>

    <div class="flex flex-col md:flex-row gap-14">
      <!-- <template v-for="(item, index) in 3" :key="index">
        <div class="w-full md:w-4/12">
          <CardImage
            url="/image/redes.webp"
            classes="dark:border-gray-600"
          ></CardImage>
        </div>
      </template> -->

      <iframe
        allowtransparency="true"
        frameborder="0"
        scrolling="no"
        src="https://instagram.com/p/CdqkQ5-MrvB/embed"
        class="lazyload"
      ></iframe>

      <iframe
        allowtransparency="true"
        frameborder="0"
        scrolling="no"
        src="https://instagram.com/p/CdlanJgBeC_/embed"
        class="lazyload"
      ></iframe>

      <iframe
        allowtransparency="true"
        frameborder="0"
        scrolling="no"
        src="https://instagram.com/p/CdgRCO9sksr/embed"
        class="lazyload"
      ></iframe>
    </div>

    <!-- <div class="flex justify-center">
      <ButtonDiv text="Ver más" styles="c-red-s w-1/2 md:w-1/4"></ButtonDiv>
    </div> -->
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
      data: [1, 1, 1],
    };
  },
};
</script>

<style>
/* Instagram Embed */
iframe[data-src*="instagram.com"],
iframe[src*="instagram.com"] {
  display: block;
  margin: 3em auto;
  /* width: 30%; */
  height: 463px;
  box-shadow: 0 0 3px #ccc;
}

/* @media (min-width: 992px) and (max-width:1024px){ */

@media only screen and (max-width: 600px) {
  iframe[data-src*="instagram.com"],
  iframe[src*="instagram.com"] {
    display: block;
    margin: 0em auto;
    width: unset;
    height: 510px;
    box-shadow: 0 0 3px #ccc;
  }
}
</style>