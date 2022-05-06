# VUE

- Is a frame work that creates dynamic frontend apps & websites , generally used to create single-page apps that run on the client, but can be used to create full stack applications by making HTTP request to a backend server.

## UI Components
 - When using front end frameworks think of the UI as a seperate Components to make it reusable.
 
## Basic layout of vue Component
```html
<!-- Template  - output or html -->
<template>
    <header>
        <h1>{{title}}</h1>
    </header>
</template>
<!-- Script is where you put logic , methods , declare props , specific data that is link to the components -->
<script>
    export default {
        props: {
            title: String,
        },
    }
</script>
<!-- style scope-  only style specific component -->
<style scoped>
    header {
        display: flex; 
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
</style>
```
