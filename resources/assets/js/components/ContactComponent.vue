<template>
        <b-list-group-item :variant="variant">
            <b-row class="p-2" align-h="center">
                <!-- {{-- img --}} -->
                <b-col cols="12" md="3" class="text-center">
                    <b-img  rounded="circle" blank width="60" height="60" blank-color="#777"  class="m-1" alt="Circle image">
                    </b-img>
                </b-col>
                <!-- {{-- text --}} -->
                <b-col cols="6" align-self="center" class="d-none d-md-block">
                    <p class="mb-1">{{ name }}</p>
                    <p class="text-muted small mb-1">{{ lastMessage }}</p>
                </b-col>
                <!-- {{-- hora --}} -->
                <b-col cols="3" class="d-none d-md-block">
                    <p class="text-muted small">
                        {{ lastTtime }}
                    </p>
                </b-col>
            </b-row>
        </b-list-group-item>
</template>

<script>
    export default {
        props: [
            'variant'
        ],
        data(){
            return{
                name: 'Arturo Saldivar',
                lastMessage: 'Tú: Hasta luego',
                lastTtime: '1:34 pm',
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
