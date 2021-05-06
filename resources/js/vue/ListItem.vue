<template>
  <div id="item">
    <input type="checkbox" @change="updateItem()" v-model="item.completed" />
    <span :class="[item.completed ? 'completed' : '', 'itemText']">
      {{ item.name }}
    </span>

    <button @click="removeItem()" class="trashcan">
      <font-awesome-icon icon="trash" />
    </button>
  </div>
</template>

<script>
export default {
  props: ["item"],
  methods: {
    updateItem() {
      axios
        .put(`api/item/${this.item.id}`, { item: this.item })
        .then((response) => {
          if (response.status == 200) {
            this.$emit("itemchanged");
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },

    removeItem() {
      axios
        .delete(`api/item/${this.item.id}`)
        .then((response) => {
          if (response.status == 200) {
            this.$emit("itemchanged");
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>


<style scoped>
.item {
  display: flex;
  justify-content: center;
  align-items: center;
}

.completed {
  text-decoration: line-through;
  color: #999999;
}

.itemText {
  width: 100%;
  margin-left: 20px;
}

.trashcan {
  background: #e6e6e6;
  border: none;
  color: #ff0000;
  outline: none;
}
</style>
