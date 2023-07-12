const {createApp} = Vue;

createApp({
    data(){
        return{
            todoList: null,
            apiUrl: 'server.php'
        }
    },
    mounted(){
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        })
    }
}).mount('#app');