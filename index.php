<?php $name = 'Net Ninja Vue3 Tutorial'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, <?php echo $name; ?></title>
    <style>
        .box {
            padding: 100px 0;
            width: 400px;
            text-align: center;
            background: #ddd;
            margin: 20px;
            display: inline-block;
        }
        .favorite {
            color: green;
        }
    </style>
</head>

<body>
<h1>Hello, <?= $name ?>!</h1>
<div id="app">
    <!-- attribute binding -->
    <a v-bind:href="url">Home page</a>
    <div v-if="showBooks">
        <ul>
            <li v-for="book in books" @click="toggleFav(book)">
                <h3 :class="{ favorite: book.isFav}">{{ book.title }}</h3>
                {{ book.author }}<br/>
                <img :src="book.img" :alt="book.title">
            </li>
        </ul>
    </div>
    <div>
    <button @click="show()">Show/Hide books</button>
    </div>
    <br>
    <div class="box" @mouseover="mouseover">mouse enter</div>
    <div class="box" @mouseleave="mouseleave">mouse leave</div>
    <div class="box" @dblclick="handleEvent($event, 0)">double click</div>
    <div class="box" @mousemove="handleMouseMove">Position: ({{ x }}, {{y}})</div>
</div>


<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="app.js"></script>
</body>
</html>