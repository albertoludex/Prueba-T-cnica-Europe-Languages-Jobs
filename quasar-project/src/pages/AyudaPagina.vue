<template>
    <div class="ayuda-container">
      <h1 class="ayuda-title">Página de Ayuda</h1>
      <p class="ayuda-text">
        Esta es la página de ayuda de nuestra aplicación. Aquí puedes encontrar respuestas a preguntas frecuentes y obtener más información sobre cómo usar la aplicación.
      </p>
      <h2 class="ayuda-subtitle">Preguntas Frecuentes</h2>
      <ul class="ayuda-list">
        <li class="ayuda-item">
          <h3 class="ayuda-question">¿Cómo agrego un nuevo perro?</h3>
          <p class="ayuda-answer">Para agregar un nuevo perro, ve a la página "Agregar" y completa el formulario con los detalles del perro.</p>
        </li>
        <li class="ayuda-item">
          <h3 class="ayuda-question">¿Cómo veo todos los perros?</h3>
          <p class="ayuda-answer">Para ver todos los perros, ve a la página "Todos los perros".</p>
        </li>
      </ul>
      <button class="inicio-button" @click="goToInicio">Volver al inicio</button>
    </div>
  </template>
  
  <script>
  export default {
    name: 'AyudaPage',
    methods: {
      goToInicio() {
        this.$router.push('/');
      },
    },
  }
  </script>
