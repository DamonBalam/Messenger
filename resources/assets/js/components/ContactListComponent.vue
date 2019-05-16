<template>
    <div class="mr-3">
        <b-form class="my-3 mx-2">
            <b-form-input class="text-center py-3 px-2" type="text" placeholder="Buscar contacto">
            </b-form-input>
        </b-form>

        <b-list-group>

            <contact-component v-for="conversation in conversations" :key="conversation.id" :conversation="conversation">

            </contact-component>

            <!-- <contact-component variant="dark">
            </contact-component>

            <contact-component variant="">
            </contact-component>

            <contact-component variant="secondary">
            </contact-component> -->
        </b-list-group>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                conversations: []
            }
        },
        mounted () {
            this.getConversations();
        },
        methods: {
            getConversations() {
                axios.get(`api/conversations`).then((response) => {
                    console.log(response.data)
                    this.conversations = response.data;
                });
            }
        },

    }
</script>

<style lang="scss" scoped>

</style>
