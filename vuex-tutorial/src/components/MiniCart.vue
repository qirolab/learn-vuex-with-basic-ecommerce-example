<template>
  <div
    class="dropdown-menu p-2"
    style="min-width:320px; right:0; left:auto"
    aria-labelledby="triggerId"
  >
    <div v-for="item in cart" :key="item.product.id">
      <div class="px-2 d-flex justify-content-between">
        <div>
          <strong>{{ item.product.title }}</strong>
          <br />
          {{ item.quantity }} x ${{ item.product.price }}
        </div>
        <div>
          <a
            href="#"
            class="badge badge-secondary"
            @click.prevent="removeProductFromCart(item.product)"
          >remove</a>
        </div>
      </div>
      <hr />
    </div>

    <div class="d-flex justify-content-between">
      <span>Total: ${{ cartTotalPrice }}</span>
      <a href="#" @click.prevent="clearCartItems()">Clear Cart</a>
    </div>
  </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from "vuex";

export default {
  computed: {
    // Example 1: mapState ( It will only work if module is namespaced )
    ...mapState("cart", ["cart"]),

    // Example 2: mapState
    // ...mapState({
    //   cart: state => state.cart.cart
    // }),

    // Example 1: mapGetters
    ...mapGetters("cart", ["cartTotalPrice"])

    // Example 2: mapGetters
    // ...mapGetters({
    //   cartTotalPrice: "cart/cartTotalPrice"
    // })
  },

  mounted() {
    this.getCartItems();
  },

  methods: {
    // Example 1: mapActions
    ...mapActions("cart", [
      "removeProductFromCart",
      "clearCartItems",
      "getCartItems"
    ])

    // Example 2: mapActions
    // ...mapActions({
    //   removeProductFromCart: 'cart/removeProductFromCart',
    //   clearCartItems: 'cart/clearCartItems',
    //   getCartItems: 'cart/getCartItems',
    // })
  }
};
</script>

<style>
</style>