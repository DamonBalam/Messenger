<template>
        <b-list-group-item :variant="variant">
            <b-row class="p-2" align-h="center">
                <!-- {{-- img --}} -->
                <b-col cols="12" md="3" class="text-center">
                    <b-img :src="conversation.contact_image" rounded="circle"  width="60" height="60"  class="m-1">
                    </b-img>
                </b-col>
                <!-- {{-- text --}} -->
                <b-col cols="6" align-self="center" class="d-none d-md-block">
                    <p class="mb-1">
                        <status-component :online="conversation.online" />
                        {{ conversation.contact_name }}
                    </p>
                    <p class="text-muted small mb-1">{{ conversation.last_message }}</p>
                </b-col>
                <!-- {{-- hora --}} -->
                <b-col cols="3" class="d-none d-md-block">
                    <p class="text-muted small">
                        {{ lastTime }}
                    </p>
                </b-col>
            </b-row>
        </b-list-group-item>
</template>

<script>
    export default {
        props: {
            conversation: Object,
            selected: Boolean
        },
        data(){
            return{
            }
        },
        computed: {
            lastTime() {
                return moment(this.conversation.last_time, "YYYY-MM-DD hh:mm:ss").locale('es').fromNow();
            },
            variant() {
                return this.selected ? 'info' : '';
            }
        },
    }
</script>
