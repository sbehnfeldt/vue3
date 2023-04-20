<?php $name = 'Net Ninja Vue3 Tutorial'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, <?php echo $name; ?></title>
</head>
<body>
<h1>Hello, <?= $name ?>!</h1>
<div id="app">
    <div v-if="showBooks">
    <p>{{ title }} - {{ author }} - {{ age }} </p>
    <button v-on:click="age++">Increase age</button>
    <button v-on:click="age--">Decreate age</button>
    </div>
    <div @click="show()">Show/Hide books</div>
</div>


<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="app.js"></script>
</body>
</html>