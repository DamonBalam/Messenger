<template>
        <b-list-group>
            <contact-component v-for="conversation in conversations" :key="conversation.id" :conversation="conversation" @click.native="selectConversation(conversation)">
            </contact-component>
        </b-list-group>
</template>

<script>
    export default {
        props: {
            conversations: Array
        },
        data() {
            return {
                contact_name:''
            }
        },
        mounted () {
        },
        methods: {
            selectConversation(conversation) {
                // console.log('haciendo click');
                this.$emit('conversationSelected',conversation);
            },
            searchConctact()
            {
                this.$emit('contactSearch',this.contact_name)
            }
        },

    }
</script>

<style lang="scss" scoped>

</style>
