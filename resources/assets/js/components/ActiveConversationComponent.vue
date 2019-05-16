<template>
    <b-row class="h-100" no-gutters>
        <b-col cols="8" class="h-100">
            <b-card class="h-100" title="Conversación Activa" footer-bg-variant="light" footer-border-variant="dark">

                <message-conversation-component v-for="message in messages" :key="message.id" :written-by-me="message.written_by_me">
                    {{ message.content }}
                </message-conversation-component>

                <div slot="footer">
                    <b-form  @submit.prevent="sendMessage()" class="mb-0" autocomplete="off">
                        <b-input-group>
                            <b-form-input  v-model="content" type="text" placeholder="Escribe un mensaje...">
                            </b-form-input>

                            <b-input-group-append>
                                <b-button type="submit" variant="primary">Enviar</b-button>
                            </b-input-group-append>

                        </b-input-group>
                    </b-form>
                </div>
            </b-card>
        </b-col>
        <b-col cols="4">
            <b-card class="h-100">
                <!-- {{-- imagen --}} -->
                <b-img rounded="circle" blank width="60" height="60" blank-color="#777"  class="m-1" alt="Circle image">
                </b-img>
                <p>Usuario seleccionado</p>
                <hr>
                <b-form-checkbox>
                    Desactivar notoficaciones
                </b-form-checkbox>
            </b-card>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        data() {
            return {
                content:'',
                messages : [],
                contactId: 2,
            }
        },
        mounted () {
            this.getMessages();
        },
        methods: {
            getMessages() {
                axios.get(`api/messages?contact_id=${this.contactId}`).then((response) => {
                    // console.log(response.data)
                    this.messages = response.data;
                });
            },
            sendMessage(){
                const params = {
                    to_id:this.contactId,
                    content:this.content
                }
                axios.post('api/messages',params).then((response) => {
                    // console.log(response.data)   
                    // this.messages = response.data;
                    this.content = '';
                    this.getMessages();

                });
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>
