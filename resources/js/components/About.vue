<script setup>
import { ref } from 'vue'
const count = ref(0)
</script>
<template>
    About counter: <button type="button" @click="count++">count is {{ count }}</button>
</template>
