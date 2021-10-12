<template>
  <div>
    <center>
      <Calendar v-model="date" is-expanded color="red" is-dark is-range />
    </center>
  </div>
</template>

<script>
import { Calendar } from "v-calendar";

export default {
  components: {
    Calendar,
  },
  data() {
    return {
      date: new Date(),
    };
  },
};
</script>

<style>
</style>