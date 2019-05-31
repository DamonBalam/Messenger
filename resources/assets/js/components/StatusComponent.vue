<template>

        <b-img  rounded="circle" blank width="10" height="10" :blank-color="online ? 'green' : 'gray'" :title="online ? 'Conectado' : 'Desconectado'"  alt="Circle image">
        </b-img>
        <!-- <b-img  v-else rounded="circle" blank width="10" height="10" blank-color="gray"  alt="Circle image">
        </b-img> -->
  
</template>

<script>
     export default {
        props: {
            online: Boolean
        },
        data(){
            return{
            }
        },
        mounted() {
        }
    }
</script>

<style lang="scss" scoped>

</style>
