<template>
    <div class="todoListcontainer">
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <add-item-form/>
        </div>
        <list-view/>
    </div>
</template>


<script>
import addItemForm from "./addItemFormComponent"
import listView from "./listView"

export default {
    components: {
        addItemForm,
        listView
    }
}
</script>
