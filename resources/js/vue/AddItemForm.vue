<template>
  <div id="add-item">
    <input type="text" v-model="item.name" />
    <font-awesome-icon
      icon="plus-square"
      :class="[item.name ? 'active' : 'inactive', 'plus']"
    />
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      item: {
        name: "",
      },
    };
  },
};
</script>

<style scoped>
#add-item {
  display: flex;
  justify-content: center;
  align-items: center;
}

input {
  background: #f7f7f7;
  border: 0;
  outline: none;
  padding: 5;
  margin-right: 10px;
  width: 100%;
}

.plus {
  font-size: 20px;
}

.active {
  color: #00ce25;
}

.inactive {
  color: #999999;
}
</style>
