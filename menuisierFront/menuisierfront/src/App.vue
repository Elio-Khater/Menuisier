<template>
  <div id="app">
    <ik-header />

    <router-view />
    <!-- footer -->
    <ik-footer />
  </div>
</template>

<script>
import Header from "@/components/Header/Header";
import Footer from "@/components/Footer/Footer";

export default {
  name: "App",
  components: {
    "ik-header": Header,
    "ik-footer": Footer
  }
};
</script>

<style></style>
