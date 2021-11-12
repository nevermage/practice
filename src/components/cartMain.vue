<template>
  <div class="maincartcontent">
    <div class="leftcartcontainer">
      <div class="carttablecontainer">
        <table class="cartcontainertable">
          <tr>
            <th colspan="2">Product</th>
            <th>Price</th>
            <th>Count</th>
            <th>Sum</th>
            <th></th>
          </tr>
          <cart-product
              v-for="product in cartProducts"
              :key="product.id"
              :id="product.id"
              :name="product.name"
              :price="product.price"
              :description="product.description"
              :image="product.image"
          />
        </table>
      </div>
    </div>
    <div class="precheckoutcontainer">
      <div class="precheckoutheader">
        <span class="precheckoutleft">Goods in cart:</span>
        <span class="precheckoutright">{{ cartProducts.length }}</span>
      </div>
      <div class="precheckoutdatacontainer">
        <div class="precheckoutrow">
          <span class="precheckoutleft">Sum:</span>
          <span class="precheckoutright">2899&nbsp;<span class="cartcurrencysymbol">uah</span></span>
        </div>
      </div>
      <button class="gotocheckoutbutton" onclick="()">Order</button>
    </div>
  </div>
</template>

<script>
import cartProduct from "./cartProduct";
export default
{
  name: "cart-main",
  components: {cartProduct},
  computed: {
    cartProducts() {
      return this.$store.getters.getCartProducts;
    },
  },
}
</script>