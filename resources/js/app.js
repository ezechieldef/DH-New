import './bootstrap';
import { createApp } from 'vue';

import QuoteForm from './components/QuoteForm.vue';

const app = createApp({});

// Enregistrer conditionnellement si l'élément existe
const quoteEl = document.getElementById('quote-form');
if (quoteEl) {
  app.component('quote-form', QuoteForm);
  app.mount('#quote-form');
}