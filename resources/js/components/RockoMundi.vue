<template clas="">
  <TitlePage text="RockoMundi"></TitlePage>
  <div class="item w-1/4 title p-5">
    <div class="w-full">
      <span class="t_al">Alquilar</span>
    </div>
  </div>
  <div class="flex">
    <div class="w-1/4 flex items-center justify-center border-0" :class="bg">
      <select class="select-auto border-0 cursor-pointer t_comb" :class="bg">
        <option value="">Departamento</option>
        <option value="">Otras</option>
      </select>
    </div>
    <div class="w-1/2">
      <input
        :class="bg"
        class="input px-4 py-2 w-full"
        type="text"
        placeholder="Buscar por ubicación o por palabra clave"
      />
    </div>
    <div class="w-1/4 btnsearch text-center flex items-center justify-center">
      <span class="t_search">Buscar</span>
    </div>
  </div>
  <div class="flex my-5">
    <div class="">
      <ButtonD text="Depas" :bold="true" styles="c-red-s px-10"></ButtonD>
      <ButtonD
        text="Casa"
        :bold="true"
        styles="bg-black text-white px-10"
      ></ButtonD>
      <ButtonD
        text="Oficina"
        :bold="true"
        styles="bg-black text-white px-10"
      ></ButtonD>
    </div>
    <div class="mx-2 w-full"><img src="/image/mapa.png" alt="" srcset="" class="w-full" /></div>
    <!-- <div class="flex-col w-2/5">
      <div class="flex flex-row w-full ">
        <div class="flex flex-col">
          <ButtonD
            text="Tiempo de Alquiler"
            :bold="false"
            styles="bg-gray-200 text-black h-16 mx-2"
          ></ButtonD>

          <ButtonD
            text="Ambientes"
            :bold="false"
            styles="bg-gray-200 text-black mx-2 h-16"
          ></ButtonD>
          <ButtonD
            text="Estacionamiento"
            :bold="false"
            styles="bg-gray-200 text-black mx-2 h-16"
          ></ButtonD>
          <ButtonD
            text="Antiguedad"
            :bold="false"
            styles="bg-gray-200 text-black mx-2 h-16"
          ></ButtonD>
          <ButtonD
            text="Rocko Star"
            :bold="false"
            styles="bg-gray-200 text-black mx-2 h-16"
          ></ButtonD>
        </div>
        <div class="flex flex-col">
          <ButtonD
            text="Precio"
            :bold="false"
            styles="bg-gray-200 text-black  h-16"
          ></ButtonD>
          <ButtonD
            text="Zona PetLover"
            :bold="false"
            styles="bg-gray-200 text-black h-16"
          ></ButtonD>
          <ButtonD
            text="Zona PetLover"
            :bold="false"
            styles="bg-gray-200 text-black h-16"
          ></ButtonD>
          <ButtonD
            text="Piscina"
            :bold="false"
            styles="bg-gray-200 text-black h-16"
          ></ButtonD>
          <ButtonD
            text="Gimnasia"
            :bold="false"
            styles="bg-gray-200 text-black h-16"
          ></ButtonD>
        </div>
      </div>
      <div class="flex justify-center">
        
          <ButtonD
          text="Análisis deInversión"
          :bold="false"
          styles="c-blue-s text-black w-1/2 h-16"
        ></ButtonD>
        
      </div>
    </div> -->
  </div>
</template>
<script>
import TitlePage from "./TitlePage.vue";
import ButtonD from "./ButtonDiv.vue";
export default {
  name: "SearchHome",
  components: {
    TitlePage,
    ButtonD,
  },
  props: {
    bg: String,
  },

  data() {
    return {};
  },
  mounted() {
    console.log(this.bg);
  },
};
</script>
<style lang="css" scoped>
.search-container {
}


.title {
  background: #000000;
  color: white;
  display: flex;
  text-align: center;
}

.input {
  border: none;
}

.btnsearch {
  font-weight: bold;
  color: black;
  background: #f4c1e1;
  cursor: pointer;
}
.t_al {
  /*font-family: Raleway;
*/
  font-size: 22px;
  font-style: normal;
  font-weight: 600;
  line-height: 26px;
  letter-spacing: 0em;
  text-align: left;
}
.t_search {
  /*font-family: Raleway;*/
  font-size: 22px;
  font-style: normal;
  font-weight: 600;
  line-height: 26px;
  letter-spacing: 0em;
  text-align: left;
}
.t_comb {
  /*font-family: Raleway;*/
  font-size: 20px;
  font-style: normal;
  font-weight: 400;
  line-height: 23px;
  letter-spacing: 0em;
}

.title_page {
  /* font-family: Raleway; */
  font-size: 50px;
  font-style: normal;
  font-weight: 700;
  line-height: 59px;
  letter-spacing: 0em;

  color: #ffffff;
}
</style>
