
import axios from "axios";
import StoreModule from "./schema/StoreModule";

let test_module = new StoreModule('account_category','account-category','AccountCategory');
const {store_prefix, api_prefix, route_prefix} = test_module;

// state list
const state = {
    ...test_module.states(),
};

// get state
const getters = {
    ...test_module.getters(),
};

// actions

const actions = {
    ...test_module.actions(),
}

// mutators
// console.log(test_module.mutations());
const mutations = {
    ...test_module.mutations(),

};


export default {
    state,
    getters,
    actions,
    mutations,
};
