<template>
  <div><p class="page_title text-center my-5">{{text}}</p></div>
 
</template>

<script>
export default {
    props: {
        text:String
    }
};
</script>

<style>
.page_title {
  /* font-family: Raleway; */
  font-size: 50px;
  font-style: normal;
  font-weight: 700;
  line-height: 59px;
  letter-spacing: 0em;
  text-align: center;
}
@media only screen and (max-width: 600px) {
  .page_title {
    font-size:30px;
  }
}
</style>