<template src="./Login.component.html"> </template>
<script>
import LoginServices from "@/services/LoginServices";
import router from "@/router";
export default {
  name: "Login",
  data() {
    return {
      Login: {
        username: "",
        password: ""
      },
      response: ""
    };
  },

  methods: {
    async login() {
      const response = await LoginServices.login(this.Login);
      this.response = response.data;
      if (this.response === "success") {
        router.push({ path: "about" });
      }
    }
  }
};
</script>
<style src="./Login.component.css" scoped></style>
