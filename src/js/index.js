import $ from "jquery";
import "slick-carousel";
import router from "./modules/Router";
import { config, dom, library } from "@fortawesome/fontawesome-svg-core";
import { faDog } from "@fortawesome/free-solid-svg-icons";
import {
  faYoutube,
  faInstagram,
  faFacebookF,
  faTwitter,
} from "@fortawesome/free-brands-svg-icons";
import "../scss/app.scss";

library.add(faDog, faYoutube, faInstagram, faFacebookF, faTwitter);
dom.watch();
