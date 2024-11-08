<template>
  <div>
    <button @click="goToCart">
      <img src="../../../public/img/cart.svg" alt="Корзина" class="w-[80%]">
    </button>
  </div>
</template>

<script>
export default {
  name: 'BtnCartComponent',
  methods: {
    goToCart() {
      window.location.href = '/user/cart';
    }
  }
};
</script>