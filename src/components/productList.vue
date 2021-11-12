<template>
  <ul>
    <product
        v-for:="product in products"
        :id="product.id"
        :key="product.id"
        :name="product.name"
        :description="product.description"
        :price="product.price"
        :image="product.image"
    />
  </ul>
</template>

<script>
import product from "./product";
export default {
  name: "product-list",
  components: { product },
  methods: {

  },
  mounted() {
    this.$store.dispatch('fetchProducts');
  },
  computed: {
    products() {
      return this.$store.getters.getProducts;
    }
  }
}
</script>
