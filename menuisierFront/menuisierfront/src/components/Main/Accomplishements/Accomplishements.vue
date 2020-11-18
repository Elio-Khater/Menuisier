<template src="./Accomplishements.component.html"> </template>
<script>
import FrontEndServices from "@/services/FrontEndServices";
export default {
  name: "Accomplishement",
  data() {
    return {
      accomplishement: []
    };
  },
  mounted() {
    this.getAccomplishement();
  },
  methods: {
    async getAccomplishement() {
      const response = await FrontEndServices.fetchAccomplishements();
      console.log(response);
      this.accomplishement = response.data;
    }
  }
};
</script>
<style src="./Accomplishements.component.css" scoped></style>
