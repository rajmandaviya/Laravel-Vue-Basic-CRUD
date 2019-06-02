<template>
    <div class="modal-fade">
        <header class="modal-header">
            <h4 class="title is-3 is-size-3-touch">Confirm</h4>
        </header>
        <section class="modal-body has-padding-bottom-2">
            <p class="title is-5 has-padding-bottom-1">Are you sure?</p>
            <p class="subtitle is-6">This action cannot be undone.</p>
        </section>
        <footer class="has-margin-bottom-2">
            <button class="button" type="button" @click="$parent.close()">Cancel</button>
            <button class="button is-primary" @click="confirm">OK</button>
        </footer>
    </div>
</template>

<script lang="ts">
    export default {
        methods: {
            confirm() {
                this.$emit('confirm');
                this.$parent.close();
            }
        }
    }
</script>

<style lang="scss" scoped>
    .modal-fade {
        background: #fff;
    }

    .modal-content {
        max-height: 100vh;
        width: 500px;
        margin: 0 auto;

        .modal-header {
            margin-bottom: 15px;

            .title {
                margin-bottom: 20px;
            }
        }
    }
    .modal-body {
        .title {
            text-align: center;
        }
        .subtitle  {
            text-align: center;
        }
    }
    footer{
        text-align: center;
        padding-bottom: 20px;
    }

</style>
