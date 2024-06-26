import StoreModule from "./schema/StoreModule";

let test_module = new StoreModule('product_review','product-review','ProductReview');
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
    [`fetch_${store_prefix}_approve`]: async function ({state, commit }, id) {
        let res = await axios.post("/product-review/approve",{id})
        if(res.data){
            window.s_alert("approved");
        }else{
            window.s_alert("removed");
        }
        return res.data;
    },
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
