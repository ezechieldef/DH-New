import './bootstrap';
import { createApp } from 'vue';

// Vue components
import QuoteForm from './components/QuoteForm.vue';

// Create Vue app
const app = createApp({});

// Register components
app.component('quote-form', QuoteForm);

// Mount Vue app if the quote-form element exists
document.addEventListener('DOMContentLoaded', function() {
    const quoteFormElement = document.getElementById('quote-form');
    if (quoteFormElement) {
        app.mount('#quote-form');
    }
});
