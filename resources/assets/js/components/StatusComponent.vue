<template>
        <b-img  rounded="circle" blank width="10" height="10" :blank-color="online ? 'green' : 'gray'" :title="online ? 'Conectado' : 'Desconectado'"  alt="Circle image">
        </b-img>
</template>

<script>
     export default {
        props: {
            online: Boolean
        },
    }
</script>

<style lang="scss" scoped>

</style>
