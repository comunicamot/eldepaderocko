<template>
  <app-layout>
    <template #breadcrumb>
      <li class="breadcrumb-item active" aria-current="page">Noticias</li>
    </template>
    <template #modal>
      <JetDialogModal :show="show" maxWidth="lg" @close='show = false'>
        <template #content> 
          
          <img :src="img" alt="" srcset="">
          
           </template>
      </JetDialogModal>
    </template>
    <div
      class="
        card
        py-4
        px-3
        text-gray-700
        overflow-hidden
        shadow-xl
        sm:rounded-lg
      "
    >
      <div class="flex px-2 justify-end">
        <ButtonLink
          href="/admin/news/new"
          class="bg-gray-800 text-white hover:bg-gray-700 px-4"
          >Registrar Noticia</ButtonLink
        >
      </div>

      <!-- component -->
      <div class="pb-4 px-2 rounded-md w-full">
        <div class="flex justify-between w-full pt-6">
          <p class="ml-3">Noticias ({{ news?.total }})</p>
        </div>
        <!-- search -->
        <div class="w-full flex">
          <div class="w-full inline-block relative">
            <input
              v-model="form.search"
              type="text"
              name=""
              class="
                leading-snug
                border border-gray-700
                block
                w-full
                appearance-none
                bg-gray-100
                text-sm text-gray-700
                py-1
                px-8
                rounded-lg
              "
              placeholder="Buscar"
            />

            <div
              class="
                pointer-events-none
                absolute
                pl-3
                inset-y-0
                left-0
                flex
                items-center
                px-2
                text-gray-300
              "
            >
              <svg
                class="fill-current h-3 w-3"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 511.999 511.999"
              >
                <path
                  d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z"
                />
              </svg>
            </div>
          </div>
        </div>
        <div class="overflow-x-auto mt-6">
          <table class="table-auto border-collapse w-full">
            <thead>
              <tr
                class="rounded-lg text-sm font-medium text-gray-700 uppercase"
                style="font-size: 0.9674rem"
              >
                <th
                  class="px-4 py-2 bg-gray-500"
                  style="background-color: #f8f8f8"
                >
                  Titulo
                </th>
                <th class="px-4 py-2" style="background-color: #f8f8f8">
                  fecha de registro
                </th>
                <th class="px-4 py-2" style="background-color: #f8f8f8">
                  acciones
                </th>
              </tr>
            </thead>
            <tbody class="text-sm font-normal text-gray-700">
              <template v-for="(item, index) in news?.data" :key="index">
                <tr class="hover:bg-gray-100 border-b border-gray-200 py-2">
                  <td class="px-4 py-2">{{ item.title }}</td>
                  <td class="px-4 py-2">{{ formatDate(item.created_at) }}</td>
                  <td class="px-4 py-2 flex space-x-3">
                    <button class="button_option" @click="viewImage(item)">
                      <svg
                        class="h-5 w-5 text-black"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <rect
                          x="3"
                          y="3"
                          width="18"
                          height="18"
                          rx="2"
                          ry="2"
                        />
                        <circle cx="8.5" cy="8.5" r="1.5" />
                        <polyline points="21 15 16 10 5 21" />
                      </svg>
                    </button>
                    <ButtonLink :href="route('news.edit', item.id)"
                      ><svg
                        class="h-5 w-5 text-black"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path
                          d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"
                        />
                        <path
                          d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
                        /></svg
                    ></ButtonLink>
                    <button @click="confirmed(item.id)" class="button_option">
                      <svg
                        class="h-5 w-5 text-black"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <polyline points="3 6 5 6 21 6" />
                        <path
                          d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                        />
                        <line x1="10" y1="11" x2="10" y2="17" />
                        <line x1="14" y1="11" x2="14" y2="17" />
                      </svg>
                    </button>
                  </td>
                </tr>
              </template>
            </tbody>
          </table>
        </div>
      </div>
      <JetConfirmationModal :show="showConfirmation">
        <template #title> Alerta! </template>
        <template #content> Estas seguro de Eliminar ? </template>
        <template #footer>
          <JetButton
            @click="showConfirmation = false"
            class="bg-gray-800 hover:bg-gray-600"
            type="button"
          >
            Cancelar</JetButton
          >
          <JetButton
            @click="destroy()"
            type="button"
            class="bg-red-500 hover:bg-red-400"
          >
            Eliminar</JetButton
          >
        </template>
      </JetConfirmationModal>
      <Paginate :total="news.total" :links="news.links"></Paginate>
    </div>
  </app-layout>
</template>

<script>
import { throttle } from "lodash/";
import AppLayout from "@/Layouts/AppLayout.vue";
import Paginate from "@/Shared/Paginate";
import ButtonLink from "@/components/ButtonLink.vue";
import JetConfirmationModal from "@/Jetstream/ConfirmationModal.vue";
import JetButton from "@/Jetstream/Button.vue";
import ButtonDefault from "@/Jetstream/ButtonDefault.vue";
import JetDialogModal from "@/Jetstream/DialogModal.vue";

export default {
  props: {
    errors: Object,
    news: Object,
    filters: Object,
  },
  components: {
    AppLayout,
    Paginate,
    ButtonLink,
    JetConfirmationModal,
    JetButton,
    ButtonDefault,
    JetDialogModal,
  },
  data() {
    return {
      form: {
        search: this.filters.search,
      },
      showConfirmation: false,
      id: null,
      show:false,
      img:null,
    };
  },
  methods: {
    formatDate(date) {
      return moment(new Date(date)).format("DD/MM/YYYY");
    },
    destroy() {
      this.$inertia.delete(route("news.destroy", this.id));
      this.showConfirmation = false;
      this.id = null;
    },
    confirmed(id) {
      this.showConfirmation = true;
      this.id = id;
    },
    viewImage(item){
      this.img = item.image_url
      this.show = true;
    }
  },

  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get("/admin/news", this.form, {
          preserveState: true,
        });
      }, 250),
    },
  },
};
</script>
    <style>
thead tr th:first-child {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}
thead tr th:last-child {
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

tbody tr td:first-child {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 0px;
}
tbody tr td:last-child {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 0px;
}
</style>