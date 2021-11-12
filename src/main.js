import {createApp} from "vue";
import cartMain from "./components/cartMain";
import store from "./components/store";
import productList from "./components/productList";

const app = createApp({

})

app.use(store);
app.component('cart-main', cartMain);
app.component('product-list', productList);
app.mount("#app");