import Vue from 'vue';
import Vuex from "vuex";

Vue.use(Vuex);

import state from "./state";
import * as getters from './getters';
import * as mutations from "./mutations";
import * as actions from "./actions";

import product from "./modules/product";
import cart from "./modules/cart";

export default new Vuex.Store({
    state,
    getters,
    mutations,
    actions,

    modules: {
        product,
        cart
    }
});