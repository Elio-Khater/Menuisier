import Api from "@/services/Api";

export default {
  fetchHomePageTitle() {
    return Api().get("info/aboutus");
  },
  fetchAccomplishements() {
    return Api().get("info/accomplishements");
  }
};
