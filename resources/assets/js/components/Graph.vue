<template>
    <canvas></canvas>
</template>

<script>
    export default {
        props: {
            values: {}
        },

        data() {
            return {
                graph: {},
            }
        },

        methods: {
            updateTaskGraph() {
                this.graph.update();
            },
        },

        mounted() {
            var labels = [];
            for(let i = 1; i < 61; i++) {
                labels.push('');
            }

            var data = {
                labels: labels,
                datasets: [{ 
                    data: this.values,
                    radius: 0,
                }],
            };

            var options = {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1,
                        },
                    }],
                    xAxes: [{
                        display: true,
                    }],
                },
                legend: {
                    display: false
                },
                elements: {
                    line: {
                        tension: 0.1,
                    }
                }
            };

            this.graph = new Chart(this.$el.getContext('2d'), {
                type: 'line',
                data: data,
                options: options
            });

            Event.$on('update-graph', () => this.updateTaskGraph());
        }
    }   
</script>