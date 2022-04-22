
<template>
  <div class="">
    <div class="flex bg-white  justify-center items-center">
      <div class="w-2/3 p-4">
        <span class="div_cate">{{news?.category}}</span>
        <p class="mt-2 card_cate_title">{{news?.title}}</p>
        
        <div class="flex item-center mt-2">
           <Link :href="route('noticia.detail', news.slug)" preserve-scroll>
            <span class="text_more">Ver más</span>
          </Link>
          
        </div>
      </div>
      <div class="bg-cover flex-1">
        <img :src="news?.image_url" alt="" />
      </div>
    </div>
  </div>
 
</template>

<script>
import ButtonDiv from "@/components/ButtonDiv";
import { Link } from '@inertiajs/inertia-vue3';

export default {
  props: {
    news: String,
  },
  components: { ButtonDiv,Link },
  
};
</script>

<style>
.dszxx {
  width: 120px;
  height: 120px;
}
</style>