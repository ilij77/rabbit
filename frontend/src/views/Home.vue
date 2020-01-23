<template>
  <div class="home">
    <div class="jumbotron">
      <h1>Welcome to App</h1>
      <p class="mb-0">
        Congratulations! You have successfully created new application.
      </p>
      <ApiStatus/>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import ApiStatus from '@/components/ApiStatus.vue'

export default {
  name: 'home',
  components: {
    ApiStatus
  }
}
</script>

<style scoped lang="scss">
  .jumbotron{
    padding: 2rem;
    p:last-of-type{
      margin-bottom: 0;
    }
  }
</style>
