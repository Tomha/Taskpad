import Task from './components/Task.vue';
import Graph from './components/Graph.vue';

window.Event = new Vue();

new Vue({
    el: '#tasks-app',

    components: { Task, Graph },

    data: {
        form: new Form({
            title: '',
            description: ''
        }),
        tasks: { },
        remainingTaskCount: []
    },

    methods: {
        onSubmit() {
            this.form.post('tasks')
                .then(() => {
                    this.remainingTaskCount[0] += 1;
                    this.updateTaskGraph();
                    this.getTasks();
                });
        },

        onComplete(id) {			
            axios.post('/tasks/complete/' + id)
                .then(() => {
                    this.remainingTaskCount[0] -= 1;
                    this.updateTaskGraph();
                    this.getTasks();
                });
        },

        clear(element) {
            this.form.errors.clear(element);
            this.form.clearSuccess()
        },

        getTasks() {
            axios.get('/tasks/remaining')
                .then(response => this.tasks = response.data);
        },

        updateTaskGraph() {
            Event.$emit('update-graph');
        },

        updateRemainingTaskCount() {
            axios.get('/tasks/remaining/counts')
                .then(response => {
                    this.remainingTaskCount[0] = response.data[0]; // 0th entry represents current minute-in-progress
                    for(let i = 0; i < 59; i++) {
                        this.remainingTaskCount[i+1] = response.data[i];
                    }
                    this.updateTaskGraph();
                });
        }
    },

    mounted() {
        this.getTasks();

        for(let i = 0; i < 60; i++) {
            this.remainingTaskCount.push(0);
        }
        this.updateRemainingTaskCount();
        setInterval(this.updateRemainingTaskCount,60000);
    }
});
