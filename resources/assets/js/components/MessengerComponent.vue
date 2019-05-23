<template>
     <b-container fluid style="height: calc(100vh - 56px);">
        <b-row class="h-100" no-gutters>
            <b-col cols="4">
                <contact-list-component @conversationSelected="changeAciveConversation($event)"></contact-list-component>
            </b-col>

            <b-col cols="8">
                <active-conversation-component v-if="selectedConversation"
                :contact-id="selectedConversation.contact_id"
                :contact-name="selectedConversation.contact_name"
                :messages="messages"
                @messageCreated="addMessage($event)"></active-conversation-component>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        props: {
            userId:Number
        },
        data() {
            return {
                selectedConversation:null,
                messages:[]
            }
        },
        mounted () {
            Echo.channel(`users.${this.userId}`)
            .listen('MessageSent',(data)=> {
                const message = data.message;
                console.log(message);
                message.written_by_me =false;
                this.addMessage(message);

            });
        },
        methods: {
            changeAciveConversation(conversation){
                console.log('nueva conversación seleccionada', conversation);
                this.selectedConversation = conversation;
                this.getMessages();
            },
            getMessages() {
                axios.get(`api/messages?contact_id=${this.selectedConversation.contact_id}`).then((response) => {
                    // console.log(response.data)
                    this.messages = response.data;
                });
            },
            addMessage(message){
                if (this.selectedConversation.contact_id == message.to_id) {

                    this.messages.push(message);
                }
            }
        }


    }
</script>

<style lang="scss" scoped>

</style>
