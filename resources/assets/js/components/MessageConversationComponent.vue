<template>

    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
        <b-img rounded="circle" slot="aside"  width="48" height="48" :src="image"></b-img>
        <b-card >
            <slot></slot>
        </b-card>
    </b-media>

</template>

<script>
    export default {
        props:{
            writtenByMe: Boolean,
            image: String

        },
        data(){
            return{
                content:'Hola, cómo estás?'
            };
        },
    }
</script>

<style lang="scss" scoped>

</style>
