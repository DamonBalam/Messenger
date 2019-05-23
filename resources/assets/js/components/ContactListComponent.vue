<template>
    <div class="mr-3">
        <b-form class="my-3 mx-2">
            <b-form-input class="text-center py-3 px-2" type="text" placeholder="Buscar contacto">
            </b-form-input>
        </b-form>

        <b-list-group>
            <contact-component v-for="conversation in conversations" :key="conversation.id" :conversation="conversation" @click.native="selectConversation(conversation)">
            </contact-component>
        </b-list-group>
    </div>
</template>

<script>
    export default {
        props: {
            conversations: Array
        },
        data() {
            return {
            }
        },
        mounted () {
        },
        methods: {
            selectConversation(conversation) {
                // console.log('haciendo click');
                this.$emit('conversationSelected',conversation);
            }
        },

    }
</script>

<style lang="scss" scoped>

</style>
