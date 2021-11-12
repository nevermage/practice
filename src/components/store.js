import {createStore} from 'vuex';

const store = createStore({
    state: () => ({
        products: [],
        cartProducts: [
            {
                description:"qwe",
                id:"3",
                image:"pear.jpg",
                price:"34.00",
                title:"Pear",
            }
        ],
    }),
    getters: {
        getCartProducts: (state) => state.cartProducts,
        getProducts: (state) => state.products,
    },
    actions: {
        fetchProducts: async (context) => {
            const response = await fetch("http://store.loc/products");
            let addProducts = await response.json();
            console.log(addProducts);
            context.commit('addProductToState', addProducts);
        }
    },
    mutations: {
        addToCart: (state, product) => {
            state.cartProducts.push(product);

        },
        addProductToState: (state, products) => {
            state.products = products;
        }
    },
});

export default store