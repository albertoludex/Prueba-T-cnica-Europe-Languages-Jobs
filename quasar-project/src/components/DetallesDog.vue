<template>
  <div class="container">
    <h2 class="title">Detalles de los Perros</h2>
    <router-link to="/" class="back-button">
      Volver al inicio
    </router-link>

    <div v-for="dog in displayedDogs" :key="dog.id" class="dog-card">
      <div class="dog-image-container">
        <img :src="`http://127.0.0.1:8000/storage/${dog.image}`" alt="Perro" class="dog-image">
      </div>
      <div>
        <h3 class="dog-breed">{{ dog.breed }}</h3>
        <p class="dog-detail"><span class="font-semibold">Tamaño:</span> {{ dog.size }}</p>
        <p class="dog-detail"><span class="font-semibold">Color:</span> {{ dog.color }}</p>
        <button @click="handleDelete(dog.id)" class="delete-button">
          Borrar
        </button>
      </div>
    </div>

    <div class="pagination">
      <button @click="prevPage" :disabled="currentPage === 1" class="pagination-button">
        Anterior
      </button>
      <button @click="nextPage" :disabled="isLastPage" class="pagination-button">
        Siguiente
      </button>
    </div>
  </div>
</template>

<script setup>
  import { ref, onMounted, computed } from 'vue';
  import { useDogStore } from 'stores/dogStore';

  const dogs = ref([]);
  const currentPage = ref(1);
  const dogsPerPage = 4;
  const dogStore = useDogStore();

  onMounted(async () => {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/dogs');

      if (!response.ok) {
        throw new Error('No se pudieron obtener los perros' + response.statusText);
      }

      dogs.value = await response.json();
    } catch (error) {
      throw new Error('Error al obtener los perros:', error);
    }
  });

  const handleDelete = async (id) => {
    dogStore.deleteDog(id);            
    dogs.value = dogs.value.filter(dog => dog.id !== id);
  }

  const displayedDogs = computed(() => {
    const startIndex = (currentPage.value - 1) * dogsPerPage;
    const endIndex = startIndex + dogsPerPage;
    return dogs.value.slice(startIndex, endIndex);
  });

  const isLastPage = computed(() => {
    return currentPage.value * dogsPerPage >= dogs.value.length;
  });

  const nextPage = () => {
    if (!isLastPage.value) {
      currentPage.value++;
    }
  };

  const prevPage = () => {
    if (currentPage.value > 1) {
      currentPage.value--;
    }
  };
</script>
