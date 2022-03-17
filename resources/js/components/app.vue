<template>
    <div class="todoListcontainer">
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <add-item-form/>
        </div>
    </div>
</template>


<script>
import addItemForm from "./addItemFormComponent"

export default {
    components: {
        addItemForm
    }
}
</script>
