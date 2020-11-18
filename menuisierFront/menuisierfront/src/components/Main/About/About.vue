<template src="./About.component.html"> </template>
<script>
// import router from '../../../router'
import Accomplishements from "@/components/Main/Accomplishements/Accomplishements";
import Mail from "@/components/Main/Mail/Mail";
import HappyClients from "@/components/Main/HappyClients/HappyClients";
import IntroCompany from "@/components/Main/IntroCompany/IntroCompany";

export default {
  name: "About",

  mounted() {},
  methods: {},
  components: {
    Accomplishements: Accomplishements,
    Mail: Mail,
    HappyClients: HappyClients,
    IntroCompany: IntroCompany
  }
};
</script>
<style src="./About.component.css" scoped></style>
