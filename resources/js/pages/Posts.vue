<template>
    <b-container>
        <b-row>
            <b-col>
                <b-form-select
                    v-model="selected"
                    :options="allCategories"
                    value-field="slug"
                    text-field="name"
                />
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    import {mapActions, mapGetters} from 'vuex'

    export default {
        data() {
            return {
                selected: null,
            }
        },
        methods: mapActions(['ajaxGetCategory']),
        async mounted() {
            this.ajaxGetCategory();
        },
        computed: {...mapGetters(['allCategories'])},
    };
</script>
