<template>
  <div id="todo-list-container">
    <div id="heading">
      <h2 id="title">Todo List</h2>
      <add-item-form></add-item-form>
    </div>
    <list-view></list-view>
  </div>
</template>

<script>
import AddItemForm from "./addItemForm.vue";
import ListView from "./listView.vue";

export default {
  name: "App",
  components: {
    AddItemForm,
    ListView,
  },
};
</script>

<style scoped>
#todo-list-container {
  width: 350px;
  margin: auto;
}

#heading {
  background: #e6e6e6;
  padding: 10px;
}

#title {
  text-align: center;
}
</style>
