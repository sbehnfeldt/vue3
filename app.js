const app = Vue.createApp({
    // data, functions

    data() {
        return {
            'showBooks': true,
            'title': 'One Two Three',
            'author': 'Me',
            'age': 55
        }
    },
    methods: {
        show() {
            this.showBooks = !this.showBooks;
        }
    }
});

app.mount('#app');
