<template>
  <tr>
    <td class="cartimagecontainer"><img v-bind:src="'img/' + image" alt=""></td>
    <td class="cartproductname"><a v-bind:href="'product/' + id">{{ name }}</a></td>
    <td class="cartpricecontainer"><span>{{ price }} </span><span class="cartcurrencysymbol">uah</span></td>
    <td class="cartcountcontainer"><button class="cartcountbutton">-</button><span class="cartproductcounter">3</span><button class="cartcountbutton">+</button></td>
    <td class="cartpricecontainer"><span>120 </span><span class="cartcurrencysymbol">uah</span></td>
    <td><button class="checkoutdeletefromcartbutton">delete</button></td>
  </tr>
</template>

<script>

export default
{
  name: "cart-product",
  props: {
    key: Number,
    id: Number,
    name: String,
    description: String,
    price: Number,
    image: String,
  },
}
</script>