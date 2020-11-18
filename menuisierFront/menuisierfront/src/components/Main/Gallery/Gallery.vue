<template src="./Gallery.component.html"> </template>
<script>
import GalleryServices from "@/services/GalleryServices";

export default {
  name: "Gallery",
  data() {
    return {
      Gallery: [],
      Type: []
    };
  },

  mounted() {
    this.getType();
    this.getGalleryByType();
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
<style src="./Gallery.component.css" scoped></style>
