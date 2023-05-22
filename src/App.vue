<template>
    <h1>{{ title }}</h1>

    <div v-if="showModal">
        <Modal :title="modal.title" theme="sale" @close="closeModal">
            <p>Grab you ninja swag for half price!</p>
            <hr>
            <p>Limited time offer</p>
            <hr>
            <p>Exclusions apply</p>
            <template v-slot:links>
                <p>This should be black</p>
                <a href="#">Kiss me once</a>
                <a href="#">Kiss me twice</a>
                <a href="#">Kiss me once again</a>
            </template>
        </Modal>
    </div>
    <button @click="openModal" style="display: block; margin: auto">Open Modal</button>
</template>

<script>
import Modal from './components/Modal.vue';

export default {
    name: 'App',
    components: {Modal},
    data() {
        return {
            title: 'My First View App',
            modal: {
                title: 'Sign up for the Giveaway!',
                content: ['Grab you ninja swag for half price!', 'Limited time offer', 'Exclusions apply']
            },
            showModal: false
        }
    },
    methods: {
        openModal() {
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        }
    }
}
</script>


<style>
h1 {
    border-bottom: 1px solid #ddd;
    display: inline-block;
}
</style>
