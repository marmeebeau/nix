import { setupMenuToggle } from "./menuToggle.js";
import { setupToggleOptionsEventListeners } from "./radioCheckboxToggle.js";

document.addEventListener("DOMContentLoaded", function () {
  console.log("Event listeners are running...");
  setupToggleOptionsEventListeners();
  setupMenuToggle();
});
