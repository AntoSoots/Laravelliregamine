import Vue from "vue";

export default {

    state: {
        users: [],
    },

    getters: {
        getUserById: state => id => {
            return state.users.find(user => user.id === id);
        },
    },

    actions: {
        fetchUsers({ commit }) {
            return axios.get('users')
                .then(response => {
                    commit('setUsers', response.data);
                });
        },
    },

    mutations: {
        setUsers(state, users) {
            state.users = users;
        },
    },
};
