import axios from "axios";

const state = {
    user: {}
};
const getters = {};
const actions = {
    loginUser({}, user) {
        axios
            .post("/login", {
                email: user.email,
                password: user.password
            })
            .then(response => {
                console.log(response.data);
            });
    }
};
const mutations = {};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
