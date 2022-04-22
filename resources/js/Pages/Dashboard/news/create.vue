<template>
  <app-layout>
    <template #breadcrumb>
      <Link
        class="breadcrumb-item"
        aria-current="page"
        :href="route('news.index')"
      >
        <a href=""> Noticias </a>
      </Link>
      <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto">
        <div
          class="card p-8 text-gray-700 overflow-hidden shadow-xl sm:rounded-lg"
        >
          <form @submit.prevent="store">
            <div class="my-4 flex flex-col md:flex-row md:space-x-5">
              <div class="flex-1">
                <label for="title" class="text-gray-700 text-xs sm:text-md"
                  >Titulo</label
                >
                <input
                  name="title"
                  type="text"
                  class="
                    text-gray-600
                    w-full
                    h-4
                    sm:h-9
                    border-b-2 border-gray-300
                    focus:border-blue-300
                    outline-none
                  "
                  v-model="form.title"
                />
                <InputError :message="errors.title" />
              </div>
              <div class="flex-1">
                <label for="title" class="text-gray-700 text-xs sm:text-md"
                  >Categoria</label
                >
                <select
                  v-model="form.category"
                  class="
                    text-gray-600
                    w-full
                    h-4
                    sm:h-9
                    border-b-2 border-gray-300
                    focus:border-blue-300
                    outline-none
                  "
                >
                  <option value=""></option>
                  <template v-for="(item, index) in categories" :key="index">
                    <option :value="item.id">{{ item.name }}</option>
                  </template>
                </select>
                <InputError :message="errors.category" />
              </div>
            </div>
            <div class="my-4">
              <label for="title" class="text-gray-700 text-xs sm:text-md"
                >Descripción</label
              >
              <textarea
                rows="4"
                cols="50"
                name="title"
                type="text"
                class="
                  text-gray-600
                  w-full
                  border-b-2 border-gray-300
                  focus:border-blue-300
                  outline-none
                "
                v-model="form.description"
              />
              <InputError :message="errors.description" />
            </div>
            <div class="my-4">
              <label for="title" class="text-gray-700 text-xs sm:text-md"
                >Imagen</label
              >
              <input
                name="title"
                type="file"
                class="
                  w-full
                  h-4
                  sm:h-9
                  border-b-2 border-gray-300
                  focus:border-blue-300
                  outline-none
                "
                @input="form.image = $event.target.files[0]"
              />
              <InputError :message="errors.image" />
            </div>
            <div class="my-4">
              <ckeditor
              
                :editor="editor"
                v-model="form.content"
                :config="editorConfig"
                @ready="MyCustomUploadAdapterPlugin"
              ></ckeditor>
              <InputError :message="errors.content" />
            </div>
            <progress
              v-if="form.progress"
              :value="form.progress.percentage"
              max="100"
            >
              {{ form.progress.percentage }}%
            </progress>
            <button
              type="submit"
              class="
                bg-gray-800
                text-white
                hover:bg-gray-700
                px-4
                rounded-full
                font-bold
                py-2
                transition
                duration-300
                ease-in-out
                uppercase
              "
            >
              REGISTRAR
            </button>
          </form>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import MyUploadAdapter from "../../../MyUploadAdapter";
import AppLayout from "@/Layouts/AppLayout.vue";
import InputError from "@/Jetstream/InputError";
import ButtonLink from "@/components/ButtonLink.vue";

export default {
  props: {
    errors: Object,
    categories: Object,
  },
  components: { AppLayout, InputError, ButtonLink, Link },
  data() {
    return {
      editor: ClassicEditor,

      editorConfig: {
        placeholder: "contenido...",
        

        // table: {
        //   contentToolbar: ["tableColumn", "tableRow", "mergeTableCells"],
        // },
        // alignment: {
        //   options: ["left", "right", "center", "justify"],
        // },
      },
      form: this.$inertia.form({
        title: null,
        description: null,
        content: null,
        category: null,
        image: null,
      }),
    };
  },
  methods: {
    MyCustomUploadAdapterPlugin(editor) {
      editor.plugins.get("FileRepository").createUploadAdapter = (loader) =>
        new MyUploadAdapter(loader);
    },
    store() {
      this.$inertia.post("/admin/news", this.form, {
        onSuccess: (page) => {
          console.log("successs", page);

          this.form.reset("title");
          this.form.reset("content");
          this.form.reset("image");
        },
        onError: (errors) => {
          console.log(errors);
        },
      });
    },
  },
};
</script>
