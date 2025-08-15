import "./bootstrap";
import "../css/app.css";
import { createApp } from "vue";

import QuoteForm from "./components/QuoteForm.vue";

const app = createApp({});

// Enregistrer conditionnellement si l'élément existe
const quoteEl = document.getElementById("quote-form");
if (quoteEl) {
    app.component("quote-form", QuoteForm);
    app.mount("#quote-form");
}

// Mobile navigation toggle
document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.getElementById("nav-toggle");
    const mobile = document.getElementById("nav-mobile");
    if (toggle && mobile) {
        toggle.addEventListener("click", () => {
            const expanded = toggle.getAttribute("aria-expanded") === "true";
            toggle.setAttribute("aria-expanded", String(!expanded));
            mobile.classList.toggle("hidden");
        });
    }
});
