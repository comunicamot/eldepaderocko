<template>
  <div class="">
    <div class="text-center">
      <p class="title_new_detail">
        {{ item.title }}
      </p>
      <p class="desc_new_detail mt-3">
        {{ item.description }}
      </p>
    </div>
    <div class="flex justify-center">
      <img
        :src="item.image_url"
        alt=""
        srcset=""
        class="my-10 h_image_detail"
      />
    </div>
    <div class="desc_new_detail content_wp my-5">
      <div v-html="item?.content"></div>

      <div class="flex items-center justify-start w-1/4 md:w-3/4 my-10">
        <img src="/image/gitlg.png" alt="" srcset="" />
        <div class="flex flex-col">
          <div>
            <span class="author_detail_new">{{ item?.user }}</span>
            
          </div>
          <div>
            <span class="date_detail_new"
              ><FormatDate :date="item.created_at"></FormatDate
            ></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import FormatDate from "@/Shared/FormatDate";
export default {
  props: { item: Object },
  components: {
    FormatDate,
  },
  data(){
    return {
      }
  },
 
  methods: {},
};
</script>

<style>
.h_image_detail {
  height: 358px;
}
/* responsive */
@media only screen and (max-width: 768px) {
.h_image_detail {
  height: auto;
}
}
</style>