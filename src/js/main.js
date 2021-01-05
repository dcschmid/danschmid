import navigation from "./modules/navigation";
import lozad from "lozad";

navigation();

const el = document.querySelectorAll("img[data-lazyload]");
const observer = lozad(el); // passing a `NodeList` (e.g. `document.querySelectorAll()`) is also valid
observer.observe();
