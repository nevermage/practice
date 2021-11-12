<template>
  <li class="card">
    <div class="cardimagenbox">
      <a v-bind:href="'product/' + id"><img v-bind:src="'img/' + image" alt=""></a>
    </div>
    <a class="cardtitle" v-bind:href="'product/' + id">{{name}}</a>
    <div class="cardbot">
      <span>{{price}} uah</span>
      <button
          @click="addToCart()"
          class="productcardcartbutton">to cart</button>
    </div>
  </li>
</template>

<script>
export default {
  name: "product",
  props: {
    key: Number,
    id: Number,
    name: String,
    description: String,
    price: Number,
    image: String,
  },
  methods: {
    addToCart() {
      this.$store.commit('addToCart', {
        id: this.id,
        title: this.name,
        description: this.description,
        price: this.price,
        image: this.image,
      });
    }
  },
}
</script>
