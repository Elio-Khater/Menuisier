import Api from "@/services/Api";

export default {
  fetchGalleryByType(gid) {
    return Api().get("gallery/" + gid + "/type");
  },

  fetchType() {
    return Api().get("gallery/type");
  }
};
/**
 * Created by Elio Khater on 12/9/2018.
 */
