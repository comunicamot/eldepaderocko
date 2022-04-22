<template>
  <div class="img-cont">
       <img :src="url" class="brightness-50 h-full" alt="">
       <p class="text_image">{{text}}</p>

  </div>
</template>

<script>

export default {
  props: {
      text:String,
      url:String
  }

}
</script>

<style>
.img-cont {
  display: block;
  position: relative;		
   /* width: 440px; */
  height: 241px; 
}

.img-cont p {

  display: block;
  position: absolute;
  bottom: 10px;
  left: 10px;
  padding: 5px;
  width: 100%;
}
.text_image{
    /* font-family: Raleway; */
font-size: 22px;
font-style: normal;
font-weight: 700;
line-height: 26px;
letter-spacing: 0em;
text-align: left;
color: #FFFFFF;

}
</style>