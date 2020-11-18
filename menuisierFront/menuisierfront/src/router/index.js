import Vue from "vue";
import Router from "vue-router";
import Main from "@/components/Main/Main";
import About from "@/components/Main/About/About";
import Services from "@/components/Main/Services/Services";
import GalleryPage from "@/components/Main/GalleryPage/GalleryPage";
import Contact from "@/components/Main/Contact/Contact";
import Login from "@/components/Main/Login/Login";
import Facture from "@/components/Main/Facture/Facture";

Vue.use(Router);

export default new Router({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "Main",
      component: Main
    },

    {
      path: "/About",
      name: "About",
      component: About
    },

    {
      path: "/Services",
      name: "Services",
      component: Services
    },

    {
      path: "/Gallery",
      name: "GalleryPage",
      component: GalleryPage
    },

    {
      path: "/Contact",
      name: "Contact",
      component: Contact
    },
    {
      path: "/Admin",
      name: "Login",
      component: Login
    },
    {
      path: "/AdminFacture",
      name: "Facture",
      component: Facture
    }
  ]
});
