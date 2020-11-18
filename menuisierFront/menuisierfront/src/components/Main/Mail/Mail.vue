<template src="./Mail.component.html"> </template>
<script>
import MailServices from "@/services/MailServices";

export default {
  name: "Mail",
  data() {
    return {
      Mail: {
        name: "",
        email: "",
        phone: "",
        request: "",
        message: ""
      },
      response: ""
    };
  },

  methods: {
    async postMail() {
      const response = await MailServices.postMail(this.Mail);
      this.response = response.data;
    }
  }
};
</script>
<style src="./Mail.component.css" scoped></style>
