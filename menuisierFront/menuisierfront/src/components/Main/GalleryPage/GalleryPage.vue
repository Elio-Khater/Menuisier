<template src="./GalleryPage.component.html"> </template>
<script>
// import router from '../../../router'
import GalleryServices from "@/services/GalleryServices";

export default {
  name: "GalleryPage",

  data() {
    return {
      Gallery: [],
      Type: []
    };
  },

  mounted() {
    this.getType();
    this.getGalleryByType(1);
  },

  methods: {
    async getGalleryByType(gid) {
      const response = await GalleryServices.fetchGalleryByType(gid);
      console.log(response);
      this.Gallery = response.data;
    },

    async getType() {
      const response = await GalleryServices.fetchType();
      console.log(response);
      this.Type = response.data;
    }
  }
};
</script>
<style src="./GalleryPage.component.css" scoped></style>
