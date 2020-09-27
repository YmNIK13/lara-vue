<template>
    <b-container>
        <b-row>
            <b-col>1 of 2</b-col>
            <b-col>2 of 2</b-col>
        </b-row>

        <b-row>
            <b-col>1 of 3</b-col>
            <b-col>2 of 3</b-col>
            <b-col>3 of 3</b-col>
        </b-row>
    </b-container>
</template>

<script>
    import NavBar from '../components/layout/NavBar'

    export default {
        mounted() {
            console.log("Example component mounted");
        },
        components: {
            NavBar
        }
    };
</script>
