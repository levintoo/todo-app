<template>
    <div class="todoListcontainer">
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <add-item-form/>
        </div>
        <list-view :items="items" />
    </div>
</template>


<script>
import addItemForm from "./addItemForm"
import listView from "./listView"

export default {
    components: {
        addItemForm,
        listView
    },
    data: function () {
        return {
            items: []
        }
    },
    methods: {
        getList () {
            axios.get('api/items')
            .then( response => {
                this.items = response.data
            })
            .catch( error => {
                console.log(error);
            })
        }
    },
    created() {
        this.getList();
    }
}
</script>

<style scoped>
.todoListcontainer {
    width: 350px;
    margin: auto;
}
 .heading{
     background: #efefef;
     padding: 10px;
 }

 #title{
     text-align: center;
 }
</style>
