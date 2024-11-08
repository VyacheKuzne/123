<template>
    <div>
      <button @click="goToCart" class="btn-green btn_green_h40 text24_12 w-[80%] h-full">
        Войти
      </button>
    </div>
  </template>
  
  <script>
  export default {
    name: 'ProfileComponent',
    methods: {
      goToCart() {
        window.location.href = '/log_in';
      }
    }
  };
  </script>