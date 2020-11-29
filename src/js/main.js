// import a plugin
import Prism from "prismjs";
//import navigation from "./modules/navigation";
import lozad from "lozad";

//navigation();
Prism.highlightAll();

const el = document.querySelectorAll("img[data-lazyload]");
const observer = lozad(el); // passing a `NodeList` (e.g. `document.querySelectorAll()`) is also valid
observer.observe();
