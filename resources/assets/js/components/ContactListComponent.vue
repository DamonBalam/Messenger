<template>
        <b-list-group>
            <contact-component v-for="conversation in conversationFiltered"
            :key="conversation.id"
            :conversation="conversation"
            :selected="isSelected(conversation)"
            @click.native="selectConversation(conversation)">
            </contact-component>
        </b-list-group>
</template>

<script>
    export default {
        data() {
            return {
            }
        },
        methods: {
            selectConversation(conversation) {
                this.$router.push(`/chat/${conversation.id}`, () => {
                    this.$store.dispatch('getMessages', conversation);
                });
            },
            isSelected(conversation) {
                if (this.selectedConversation) {
                    return this.selectedConversation === conversation.id;
                }
                return false;
            }
        },
        computed: {
            selectedConversation() {
                return this.$store.state.selectedConversation;
            },
            conversationFiltered() {
                return this.$store.getters.conversationsFiltered;
            }
        },

    }
</script>

<style lang="scss" scoped>

</style>
