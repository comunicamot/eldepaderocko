<template clas="">
  <div class="mx-10" style="margin-top: 110px;">
    <TitlePage text="RockoMundi"></TitlePage>
    <div class="flex">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d63141782.45133463!2d-2.970703!3d15!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1651200113475!5m2!1ses!2spe"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
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
