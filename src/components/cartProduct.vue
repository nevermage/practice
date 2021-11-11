<template>
  <tr>
    <td class="cartimagecontainer"><img src="apple.jpg" alt=""></td>
    <td class="cartproductname"><a href="">Productname</a></td>
    <td class="cartpricecontainer"><span>40 </span><span class="cartcurrencysymbol">uah</span></td>
    <td class="cartcountcontainer"><button class="cartcountbutton">-</button><span class="cartproductcounter">3</span><button class="cartcountbutton">+</button></td>
    <td class="cartpricecontainer"><span>120 </span><span class="cartcurrencysymbol">uah</span></td>
    <td><button class="checkoutdeletefromcartbutton">delete</button></td>
  </tr>
</template>

<script>

export default
{
  name: "cart-product",
  mounted() {
    this.$store.dispatch('fetchProducts');
  },
}
</script>