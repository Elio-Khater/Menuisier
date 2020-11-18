<template src="./Main.component.html"> </template>
<script>
//import router from '../../router'
// import FrontEndServices from '@/services/FrontEndServices'
import Accomplishements from "@/components/Main/Accomplishements/Accomplishements";
import Mail from "@/components/Main/Mail/Mail";
import Gallery from "@/components/Main/Gallery/Gallery";
import HappyClients from "@/components/Main/HappyClients/HappyClients";
import WhyChooseUs from "@/components/Main/WhyChooseUs/WhyChooseUs";
import IntroSelf from "@/components/Main/IntroSelf/IntroSelf";
import Suggestion from "@/components/Main/Suggestion/Suggestion";

export default {
  name: "Main",

  components: {
    Accomplishements: Accomplishements,
    Mail: Mail,
    Gallery: Gallery,
    HappyClients: HappyClients,
    WhyChooseUs: WhyChooseUs,
    IntroSelf: IntroSelf,
    Suggestion: Suggestion
  }
};
</script>
<style src="./Main.component.css" scoped></style>
