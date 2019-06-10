<template>
    <b-row class="h-100" no-gutters>
        <b-col cols="8" class="h-100">
            <b-card no-body class="h-100" title="Conversación Activa" footer-bg-variant="light" footer-border-variant="dark">

                <b-card-body class="card-body-scroll">
                        <message-conversation-component v-for="message in messages" :key="message.id" :written-by-me="message.written_by_me"
                        :image="message.written_by_me ? myImage : contactImage"
                        >
                            {{ message.content }}
                        </message-conversation-component>
                </b-card-body>

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
                <b-img rounded="circle" :src="contactImage" width="60" height="60" class="m-1" >
                </b-img>
                <p>{{contactName}}</p>
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
        props: {
            contactId: Number,
            contactName: String,
            contactImage: String,
            myImage: String
        },
        data() {
            return {
                content:'',
            }
        },
        mounted () {
        },
        methods: {
            sendMessage(){
                const params = {
                    to_id:this.contactId,
                    content:this.content
                }
                axios.post('api/messages',params).then((response) => {
                    if (response.data.success) {
                        this.content = '';
                        const message = response.data.message;
                        message.written_by_me = true;
                        this.$emit('messageCreated' ,message);
                    }
                });
            },
            scrollToBottom(){
                const el = document.querySelector('.card-body-scroll');
                el.scrollTop = el.scrollHeight;
            }
        },
        computed: {
            messages() {
                return this.$store.state.messages;
            }
        },
        watch: {
            // messages() {
            //     setTimeout(()=>{
            //         this.scrollToBottom();
            //     },100);
            // }
        },
        updated () {
             this.scrollToBottom();
        },
    }
</script>

<style >
.card-body-scroll{
    max-height: calc(100% - 63px);
    overflow-y: auto;
}

</style>
