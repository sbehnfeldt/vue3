const app = Vue.createApp({
    // data, functions

    data() {
        return {
            'x': 0,
            'y': 0,
            'url' : 'http://behnfeldt.name',
            'showBooks': true,
            books: [{
                'title': 'The Dreadful Lemon Sky',
                'author': 'John D. MacDonald',
                'img' : 'assets/1.jpg',
                'isFav' : true

            }, {
                'title': 'The Old Man and the Sea',
                'author': 'Ernest Hemmingway',
                'img' : 'assets/2.jpg',
                'isFav' : false
            }, {
                'title': 'Six of Crows',
                'author': 'Leigh Bardugo',
                'img' : 'assets/3.jpg',
                'isFav' : true
            }]
        }
    },
    methods: {
        show() {
            this.showBooks = !this.showBooks;
        },
        handleEvent(e, data) {
            console.log(e);
            if (data !== undefined) {
                console.log(data);
            }
        },
        mouseover(e) {
            console.log(e);
        },
        mouseleave() {
            console.log('mouse leave');
        },
        dblclick() {
            console.log('double click');
        },
        handleMouseMove(e) {
            this.x = e.offsetX;
            this.y = e.offsetY;
        },
        toggleFav(book) {
            book.isFav = !book.isFav;
        }

    }
});

app.mount('#app');
