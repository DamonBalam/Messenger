<template>
    <b-row class="h-100" no-gutters>
        <b-col cols="8" class="h-100">
            <b-card
            class="h-100"
            title="Conversación Activa"
            footer-bg-variant="light"
            footer-border-variant="dark">

            <b-media vertical-align="center" class="mb-2">
                <b-img rounded="circle" slot="aside" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
                <b-card >
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </b-card>
            </b-media>

            <b-media right-align vertical-align="center" class="mb-2">
                <b-img rounded="circle" slot="aside" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
                <b-card >
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                </b-card>
            </b-media>





            <div slot="footer">
                <b-form class="mb-0">
                    <b-input-group>
                        <b-form-input  type="text" placeholder="Escribe un mensaje...">
                        </b-form-input>

                        <b-input-group-append>
                            <b-button variant="primary">Enviar</b-button>
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

    }
</script>

<style lang="scss" scoped>

</style>
