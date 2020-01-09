<template>
  <div class="col-3 mt-3">
    <div class="card h-100 text-left">
      <img class="w-100" :src="product.image" alt />
      <div class="card-body">
        <h4 class="card-title">
          <router-link :to="{name: 'product', params: {id: product.id}}">{{ product.title }}</router-link>
        </h4>
        <strong>${{ product.price }}</strong>
        <p class="card-text">{{ product.description }}</p>
      </div>
      <div class="px-4 pb-3">
        <button class="btn btn-secondary" @click="addToCart()">Add to Cart</button>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";

export default {
  props: ["product"],

  methods: {
    ...mapActions("cart", ["addProductToCart"]),

    addToCart() {
      this.addProductToCart({
        product: this.product,
        quantity: 1
      });
    }
  }
};
</script>

<style>
</style>