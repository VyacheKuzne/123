<template>
    <div>
      <button @click="goToIndex">
        <img src="../../../public/img/cross.svg" alt="Закрыть корзина">
      </button>
    </div>
  </template>
  
  <script>
  export default {
    name: 'CrossComponent',
    methods: {
        goToIndex() {
        window.location.href = '/';
      }
    }
  };
  </script>