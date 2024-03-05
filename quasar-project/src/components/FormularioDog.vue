<script setup>
  import { onMounted } from 'vue';
  import { useDogStore } from 'stores/dogStore';
  import { onBeforeRouteLeave, useRoute } from 'vue-router';

  const dogStore = useDogStore();


  const handleSubmitForm = () => {

      dogStore.submitForm();
    //}
  }

  onBeforeRouteLeave((to, from, next) => {
    dogStore.clearMessages();
    dogStore.clearForm();
    next();
  });
</script>

<template>
  <div class="container">
    <h2 class="title">Subir Foto y Detalles del Perro</h2>

    <input type="file" @change="dogStore.handleFileUpload" class="input-file">

    <form @submit.prevent="handleSubmitForm()" class="form">
      <div class="input-group">
        <label for="breed" class="label">Raza:</label>
        <input v-model="dogStore.dogsDetails.breed" type="text" id="breed" class="input">
      </div>
      <div class="input-group">
        <label for="size" class="label">Tamaño:</label>
        <input v-model="dogStore.dogsDetails.size" type="text" id="size" class="input">
      </div>
      <div class="input-group">
        <label for="color" class="label">Color:</label>
        <input v-model="dogStore.dogsDetails.color" type="text" id="color" class="input">
      </div>
      <div class="input-group">
        <label for="birthdate" class="label">Fecha de Nacimiento:</label>
        <input v-model="dogStore.dogsDetails.birthdate" type="date" id="birthdate" class="input">
      </div>
      <button type="submit" class="button">
        Guardar Detalles
      </button>
    </form>
    <div v-if="dogStore.errorMessage" class="error-message">{{ dogStore.getErrorMessage }}</div>
    <div v-if="dogStore.checkMessage" class="success-message">{{ dogStore.getCheckMessage }}</div>
  </div>
  <router-link to="/" class="back-button">Volver al inicio</router-link>
</template>