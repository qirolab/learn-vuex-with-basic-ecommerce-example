<template>
  <div class="d-flex align-items-stretch flex-wrap">
    <product-card v-for="product in products" :key="product.id" :product="product" />
  </div>
</template>

<script>
import { mapState, mapActions } from "vuex";
import ProductCard from "./ProductCard";
export default {
  components: {
    ProductCard
  },

  computed: {
    ...mapState("product", ["products"])
  },

  mounted() {
    this.getProducts();
  },

  methods: {
    ...mapActions("product", ["getProducts"])
  }
};
</script>

<style>
</style>