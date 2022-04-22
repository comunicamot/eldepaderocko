<template>
  <Layout>
    <SliderCover title="LIBRO DE RECLAMACIONES">
      <template #swiper>
        <SwiperCover :images="['/image/book.webp']"></SwiperCover>
      </template>
    </SliderCover>
    <div class="space-page"></div>
    <div class="container mx-auto">
      <div class="flex flex-col items-center justify-center">
        <p class="title_comp text-center mb-4">Identificación del consumidor</p>
        <div class="border-form p-8 w-11/12 md:w-3/4">
          <form action="">
            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for=""
              >
                Nombre:
              </label>
              <input
                type="text"
                class="
                  bg-transparent
                  border-0 border-b-2
                  input-border
                  appearance-none
                  focus:outline-none focus:ring-0
                "
              />
            </div>
            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for=""
              >
                Domicilio:
              </label>
              <input
                type="text"
                class="
                  bg-transparent
                  border-0 border-b-2
                  input-border
                  appearance-none
                  focus:outline-none focus:ring-0
                "
                name="type_document"
              />
            </div>

            <div class="flex justify-start space-x-10 my-5">
              <div class="form-check form-check-inline">
                <input
                  class="mr-2 cursor-pointer"
                  type="radio"
                  id="dni"
                  value="dni"
                  name="type_document"
                />
                <label
                  class="form-check-label inline-block text-gray-800"
                  for="dni"
                  >DNI</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="mr-2 cursor-pointer"
                  type="radio"
                  name="type_document"
                  id="inlineRadio2"
                  value="ce"
                />
                <label
                  class="form-check-label inline-block text-gray-800"
                  for="inlineRadio20"
                  >CE</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="mr-2 cursor-pointer"
                  type="radio"
                  name="type_document"
                  id="inlineRadio2"
                  value="ruc"
                />
                <label
                  class="form-check-label inline-block text-gray-800"
                  for="inlineRadio20"
                  >RUC</label
                >
              </div>
            </div>

            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for=""
              >
                DNI:
              </label>
              <input
                type="text"
                class="
                  bg-transparent
                  border-0 border-b-2
                  input-border
                  appearance-none
                  focus:outline-none focus:ring-0
                "
              />
            </div>
            <div
              class="
                flex flex-col
                md:flex-row
                space-y-5
                md:space-y-0 md:space-x-5
              "
            >
              <div class="w-full md:w-1/2">
                <label
                  class="block text-gray-700 text-sm font-normal mb-2"
                  for=""
                >
                  Email:
                </label>
                <input
                  type="text"
                  class="
                    bg-transparent
                    border-0 border-b-2
                    input-border
                    appearance-none
                    focus:outline-none focus:ring-0
                  "
                />
              </div>
              <div class="w-full md:w-1/2">
                <label
                  class="block text-gray-700 text-sm font-normal mb-2"
                  for=""
                >
                  Teléfono:
                </label>
                <input
                  type="text"
                  class="
                    bg-transparent
                    border-0 border-b-2
                    input-border
                    appearance-none
                    focus:outline-none focus:ring-0
                  "
                />
              </div>
            </div>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-500">
              <span class="font-medium send-res"
                >* La respuesta de este reclamo o queja se enviará a través del
                mail indicado.</span
              >
            </p>
          </form>
        </div>
        <p class="title_comp text-center mt-8">Detalle de la reclamación:</p>
        <div class="border-form p-8 my-5 w-11/12 md:w-3/4">
          <div class="flex justify-start space-x-10 my-5">
            <div class="form-check form-check-inline">
              <input
                class="mr-2 cursor-pointer"
                type="radio"
                id="reclamo"
                value="reclamo"
                name="type_q"
              />
              <label
                class="form-check-label inline-block text-gray-800"
                for="reclamo"
                >Reclamo</label
              >
            </div>
            <div class="form-check form-check-inline">
              <input
                class="mr-2 cursor-pointer"
                type="radio"
                id="queja"
                value="queja"
                name="type_q"
              />
              <label
                class="form-check-label inline-block text-gray-800"
                for="queja"
                >Queja</label
              >
            </div>
          </div>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-500">
            <span class="font-medium send-res"
              >Disconformidad relacionada a los productos o servicios.</span
            >
          </p>

          <div class="my-4">
            <textarea
              type="text"
              class="input_rocko text-gray-800"
              name=""
              placeholder="Detalle:"
            />
          </div>
          <div class="mb-4">
            <textarea
              type="text"
              class="input_rocko text-gray-800"
              name=""
              placeholder="Pedido:"
            />
          </div>
        </div>
      </div>
      <div class="flex  justify-center ">
        
        <div class=" w-11/12 md:w-3/4">
          <ButtonDiv text="Enviar mensaje" bold="true" styles="c-red-s w-3/4 md:w-1/4"></ButtonDiv>
        </div>
      </div>
    </div>
    <div class="space-page"></div>
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCover";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import ButtonDiv from "@/components/ButtonDiv";
export default {
  components: {
    SliderCover,
    SwiperCover,
    Layout,
    ButtonDiv,
  },
};
</script>

<style>
</style>