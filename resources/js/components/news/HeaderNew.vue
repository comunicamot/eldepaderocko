<template>
  <div
    class="
      flex flex-col
      md:flex-row
      space-x-5 space-y-5
      md:space-y-0
      items-center
      justify-between
    "
  >
    <div class="cursor-pointer" @click="HandleLast">
      <div
        type="text"
        class="
          bg-transparent
          border-0 border-b-2
          input-border
          appearance-none
          focus:outline-none focus:ring-0
          cursor-pointer
          w-full
        "
        placeholder="Ultimas noticias"
      >
        Ultimas noticias
      </div>
    </div>

    <div class="cursor-pointer">
      <input
        v-model="d"
        @input="handleInput"
        type="date"
        class="
          bg-transparent
          border-0 border-b-2
          input-border
          appearance-none
          focus:outline-none focus:ring-0
          cursor-pointer
        "
      />
    </div>

    <div class="right-inner-addon">
      <img
        src="/image/search.png"
        class="cursor-pointer"
        @click="handleClick"
      />
      <input
        v-model="q"
        @input="handleText"
        type="text"
        class="
          bg-transparent
          border-0 border-b-2
          input-border
          appearance-none
          focus:outline-none focus:ring-0
        "
        placeholder="Buscar"
      />
    </div>
  </div>
</template>

<script>
export default {
  props: {
    date: { type: Date },
    text: { type: String, default: null },
  },
  data() {
    return {
      d: this.date,
      q: this.text,
    };
  },
  methods: {
    handleInput() {
      this.$emit("date", this.d);
      this.q = null;
    },

    handleClick() {
      this.$emit("search");
      this.d = null;
    },
    handleText() {
      this.$emit("text", this.q);
      if (this.q === "") {
        // this.d = null
        this.$emit("text_clean", 1);
      }
    },
    HandleLast() {
      this.$emit("last");
      (this.d = null), (this.q = null);
    },
  },
};
</script>

<style>
</style>