<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="wrapper">
        <div id="app">
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-1 text-muted">Todo List</h1>
                            <ul class="list-group list-group-flush border-1 rounded">
                                <li v-for="(item, index) in todoList" :key="index" class="list-group-item">{{ item }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input type="button" @keyup.enter="updateList" v-model="todoItem" placeholder="Todo" class="form-control">
                                <button @click="updateList" class="btn btn-outline-success" id="button-add">Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script type="text/javascript" src="./js/script.js" ></script>
</body>
</html>