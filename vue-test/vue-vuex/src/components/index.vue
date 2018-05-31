<template>
    <div>
        <h3>Vue.js Vuex Sample</h3>
    </div>
</template>
<script>
import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

var myStore = new Vuex.Store({
  // store对象
  state: {
    show: false
  }
});

export default {
  data() {
    return {
      name: "jack"
    };
  },
  store: myStore,
  computed: {
    get() {
      return this.$store.name;
    }
  },
  mounted() {
    console.log(this.$store.state.show);
  }
};
</script>
<style>
</style>
