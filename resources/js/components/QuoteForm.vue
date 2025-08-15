<template>
  <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
    <h3 class="text-lg font-semibold text-blue-900 mb-4">
      🚀 Formulaire Interactif Vue.js
    </h3>
    <p class="text-blue-700 mb-4">
      Ce composant Vue.js est disponible pour améliorer l'expérience utilisateur du formulaire de devis.
    </p>
    <div v-if="isVisible" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-blue-800 mb-1">
          Estimation rapide du projet
        </label>
        <select v-model="projectType" class="w-full px-3 py-2 border border-blue-300 rounded-md">
          <option value="">Sélectionnez un type de projet</option>
          <option value="website">Site Web</option>
          <option value="mobile">Application Mobile</option>
          <option value="ecommerce">E-commerce</option>
          <option value="custom">Solution Sur Mesure</option>
        </select>
      </div>
      
      <div v-if="projectType" class="bg-white p-4 rounded border">
        <h4 class="font-medium text-gray-900 mb-2">Estimation pour: {{ getProjectName() }}</h4>
        <p class="text-gray-600 text-sm">{{ getProjectDescription() }}</p>
        <p class="text-lg font-bold text-blue-600 mt-2">{{ getEstimatedBudget() }}</p>
      </div>
      
      <button @click="toggleDetails" class="btn-outline border-blue-300 text-blue-700 hover:bg-blue-50">
        {{ showDetails ? 'Masquer les détails' : 'Voir plus de détails' }}
      </button>
      
      <div v-if="showDetails" class="bg-white p-4 rounded border space-y-2">
        <p class="text-sm text-gray-600">
          ✅ Consultation gratuite incluse<br>
          ✅ Devis détaillé sous 24h<br>
          ✅ Support post-livraison<br>
          ✅ Formation utilisateur
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'QuoteForm',
  data() {
    return {
      isVisible: true,
      projectType: '',
      showDetails: false
    }
  },
  methods: {
    getProjectName() {
      const types = {
        'website': 'Site Web',
        'mobile': 'Application Mobile', 
        'ecommerce': 'E-commerce',
        'custom': 'Solution Sur Mesure'
      }
      return types[this.projectType] || ''
    },
    
    getProjectDescription() {
      const descriptions = {
        'website': 'Site web responsive avec CMS intégré',
        'mobile': 'Application mobile native iOS/Android',
        'ecommerce': 'Boutique en ligne complète avec paiements',
        'custom': 'Solution développée selon vos spécifications'
      }
      return descriptions[this.projectType] || ''
    },
    
    getEstimatedBudget() {
      const budgets = {
        'website': 'À partir de 2 500€',
        'mobile': 'À partir de 3 500€',
        'ecommerce': 'À partir de 4 000€',
        'custom': 'Devis sur mesure'
      }
      return budgets[this.projectType] || ''
    },
    
    toggleDetails() {
      this.showDetails = !this.showDetails
    }
  }
}
</script>