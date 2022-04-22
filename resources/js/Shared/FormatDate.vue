<template>
  {{ formatDate(date) }}
</template>

<script>
export default {
  props: { date: Date },
  data() {
    return {};
  },
  methods: {
    formatDate(date) {
      return moment(new Date(date)).format("DD/MM/YYYY");
    },
  },
};
</script>

<style>
</style>