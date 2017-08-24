<template>
    <li id="task" :class="{'nowrap':hidden}" @click="hidden=!hidden">
        <span id="task-checkbox" @click="$emit('completed', 'test')">✔</span>
        <span id="task-text">
            <slot id='task-title' name='title'></slot>
            <slot id='task-notes' name='notes'></slot>
        </span>
    </li>
</template>

<script>
    export default {
        data() {
            return {
                hidden: true
            }
        }
    }
</script>

<style>
    #task {
        border-bottom: solid #ddd 1px;
        padding: 5px;
        display: block;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    #task-checkbox {
        color: eee;
        border-radius: 2px;
        border: 1px #aaa solid;
        margin-right: 5px;
        cursor: pointer;
        padding: 0px 3px 0px 3px;
        overflow: hidden;
    }

    #task-checkbox:hover {
        color: #888;
    }

    #task-notes {
        margin-left: 5px;
        color: #aaa;
        cursor: pointer;
    }
</style>