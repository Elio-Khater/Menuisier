import Api from "@/services/Api";

export default {
  postMail(mail) {
    console.log(mail);
    return Api().post("mail", { mail: mail });
  }
};
/**
 * Created by Elio Khater on 12/7/2018.
 */
