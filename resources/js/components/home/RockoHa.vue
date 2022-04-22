<template>
  <div class="bg-image">
    <div
      class="
        flex flex-col
        md:flex-row
        content-between
        items-center
        h-full
        justify-around
        
        md:mx-32
      "
    >
      <div class="w-full md:w-1/2 ">
        <img src="image/cardrocko.webp" class="cardrocko" alt="" srcset="" />
      </div>
      <div class="w-full md:w-1/2">
        <div class="">
          <p class="rockoHa_title rockoHa">Obtén tu RockoCard</p>
          <p class="rockoHa_free rockoHa">¡GRATIS!</p>
          <div class="flex justify-center">
            <ButtonDiv
              text="Registrarte"
              styles="bg-black text-white md:w-1/2  "
            ></ButtonDiv>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ButtonDiv from "../ButtonDiv.vue";
export default {
  components: { ButtonDiv },
};
</script>

<style>
.bg-image {
  background-image: url("/image/bgh.webp");
  background-size: cover;
  background-position: center;
  height: 518px;
  width: 100%;
  /* filter: brightness(50%);  */
}

.rockoHa {
  /* font-family: Raleway; */
  font-style: normal;
  text-align: center;
  letter-spacing: 0em;
  color: white;
}
.rockoHa_title {
  font-size: 50px;
  font-weight: 600;
  line-height: 59px;
}
.rockoHa_free {
  font-size: 100px;
  font-style: normal;
  font-weight: 700;
  line-height: 117px;

  text-align: center;
}
.cardrocko {
  width: 500px;
  /* height: 281px; */
  border-radius: 0px;
}

@media only screen and (max-width: 600px) {
  .rockoHa_free {
    font-size: 40px;
    line-height: normal;
  }
  .rockoHa_title {
    font-size: 20px;
    line-height: normal;
  }
}
</style>