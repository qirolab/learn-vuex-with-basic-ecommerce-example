import Product from "../../../apis/Product";

export const getProducts = ({ commit }) => {
    Product.all().then(response => {
        commit('SET_PRODUCTS', response.data);
    })
}

export const getProduct = ({ commit }, productId) => {
    Product.show(productId).then(response => {
        commit('SET_PRODUCT', response.data);
    })
}