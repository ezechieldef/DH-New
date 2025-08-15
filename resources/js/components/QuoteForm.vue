<template>
  <form @submit.prevent="submit" class="space-y-6">
    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <label class="block text-sm font-medium mb-1">Nom *</label>
        <input v-model="form.nom" type="text" class="input" required />
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Email *</label>
        <input v-model="form.email" type="email" class="input" required />
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Téléphone</label>
        <input v-model="form.telephone" type="text" class="input" />
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Entreprise</label>
        <input v-model="form.entreprise" type="text" class="input" />
      </div>
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Budget estimatif</label>
      <select v-model="form.budget" class="input">
        <option value="">Sélectionner</option>
        <option value="<1M">Moins de 1M FCFA</option>
        <option value="1-5M">1M - 5M FCFA</option>
        <option value="5-10M">5M - 10M FCFA</option>
        <option value=">10M">Plus de 10M FCFA</option>
      </select>
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Délai souhaité</label>
      <select v-model="form.delai" class="input">
        <option value="">Sélectionner</option>
        <option>Urgent (moins d'un mois)</option>
        <option>1 - 3 mois</option>
        <option>3 - 6 mois</option>
        <option>Flexible</option>
      </select>
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Description du projet *</label>
      <textarea v-model="form.description_projet" rows="5" class="input" required></textarea>
    </div>
    <div class="flex items-center">
      <input id="rgpd" v-model="form.rgpd" type="checkbox" required class="h-4 w-4 text-indigo-600 border-slate-300 rounded">
      <label for="rgpd" class="ml-2 text-sm text-slate-600">
        J’accepte que mes données soient utilisées pour être recontacté.
      </label>
    </div>
    <div v-if="error" class="p-4 rounded bg-red-50 text-red-700 text-sm">
      {{ error }}
    </div>
    <div v-if="success" class="p-4 rounded bg-green-50 text-green-700 text-sm">
      Votre demande a été envoyée avec succès. Nous revenons vers vous rapidement.
    </div>
    <button :disabled="loading"
            class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-500 text-white font-medium px-6 py-3 rounded-md disabled:opacity-50 disabled:cursor-not-allowed">
      <span v-if="!loading">Envoyer ma demande</span>
      <span v-else>Envoi...</span>
    </button>
  </form>
</template>

<script setup>
import { reactive, ref } from 'vue';

const form = reactive({
  nom: '', email: '', telephone: '', entreprise: '',
  budget: '', delai: '', description_projet: '', rgpd: false
});
const loading = ref(false);
const success = ref(false);
const error = ref('');

async function submit() {
  loading.value = true;
  error.value = '';
  success.value = false;
  try {
    const response = await fetch('/devis', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
      },
      body: JSON.stringify(form)
    });
    if (!response.ok) {
      throw new Error('Erreur serveur');
    }
    success.value = true;
    Object.keys(form).forEach(k => form[k] = (k === 'rgpd' ? false : ''));
  } catch (e) {
    error.value = e.message;
  } finally {
    loading.value = false;
  }
}
</script>

<style scoped>
.input {
  @apply w-full rounded-md border-slate-300 focus:border-indigo-500 focus:ring-indigo-500 text-sm;
}
</style>