<script setup>
import { RouterView,RouterLink} from "vue-router";
</script>

<template>

<div>
  <RouterView ></RouterView>
</div>
</template>

<style scoped>
a.router-link-exact-active{
background-color: blue;
color:white;
}
</style>
