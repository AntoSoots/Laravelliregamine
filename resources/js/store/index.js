export default {

    state: {
        users: []
    },

    getters: {
        getUsers(state){
            return state.users
        }
    },

    actions: {
        allUsers(context){
            axios.get("users")
                .then((response)=>{
                    console.log(response.data.user)
                    context.commit("user",response.data.user)
                })

                .catch(()=>{
                    console.log("Viga........")
                })
        }
    },

    mutations: {
        user(state,data) {
            return state.users = data
        }
    }
}
