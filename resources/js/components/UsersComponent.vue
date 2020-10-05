<template>
    <div class="form-group row">
        <div class="col-auto">
            <div class="container">
                <div class="col">
                    <H2 v-if="getAllUsers.length">Viimased viis registreerunud kasutajat:</H2>
                    <H3 v-else>Hetkel pole veel keegi registreerunud!</H3>
                </div>
                <div class="col" v-for="(users, index) in getAllUsers.slice(0, 5)"
                     :value="users.id">
                    {{ index+1 }}. {{ users.name }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        name: "List",
        mounted() {
            this.$store.dispatch("allUsers")
        },
        computed: {
            getAllUsers(){
                return this.$store.getters.getUsers
            }
        },

    };
</script>
