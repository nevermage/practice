import {createApp} from "vue";
import cartMain from "./components/cartMain";
import store from "./components/store";

const app = createApp({

})

app.use(store);
app.component('cart-main', cartMain);

app.mount("#app");