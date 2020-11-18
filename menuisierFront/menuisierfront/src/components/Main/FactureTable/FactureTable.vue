<template src="./FactureTable.component.html"> </template>
<script>

export default {
  name: "FactureTable",
  data() {
    return {
      increment: 1,
      Price: [],
      Count: [],
      Total: []
    };
  },

  methods: {
    getTotal(index) {
      this.Total[index] = this.Price[index] * this.Count[index];
      return this.Total[index];
    }
  }
};
</script>
<style src="./FactureTable.component.css" scoped></style>
