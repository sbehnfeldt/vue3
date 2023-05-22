<template>
    <div class="backdrop" @click.self="closeModal">
        <div class="modal" :class="{exciting: theme === 'sale'}">
            <h1>{{ title }}</h1>
            <slot>Default Content</slot>
            <div class="actions">
                <slot name="links"></slot>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    name: 'Modal',
    props: ['title', 'theme'],
    data() {
        return {}
    },
    methods: {
        closeModal() {
            this.$emit('close');
        }
    }
}
</script>


<style>
.modal {
    width: 600px;
    padding: 20px;
    margin: 100px auto;
    background: white;
    border-radius: 10px;
}

.modal h1 {
    color: #03cfb4;
    border: none;
    padding: 0;
}

.modal p {
    font-style: normal;
}

.modal .actions {
    text-align: center;
    margin: 30px 0 10px 0;
    color: black;
}

.modal .actions a {
    color: gre;
    padding: 8px;
    border: 1px solid #eee;
    border-radius: 4px;
    text-decoration: none;
    margin: 10px;
}

.backdrop {
    top: 0;
    position: fixed;
    background: rgba(0, 0, 0, .5);
    width: 100%;
    height: 100%;
}

.modal.exciting {
    background: crimson;
    color: white;
}
.modal.exciting h1 {
    color: white;
}

</style>