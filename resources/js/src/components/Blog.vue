<template>
  <div>
    <div class="">
      <img
        width="100%"
        v-bind:src="src" />
      <div class="p-5">
        <div class="font-bold text-xl mb-2">{{ title }}</div>
        <p class="text-gray-700 text-base">
          {{ content }}
        </p>
      </div>
    </div>
    <div class="mt-2">
      <CommentContainer />
    </div>
  </div>
</template>

<script>
  import CommentContainer from './CommentContainer';
  export default {
    props: ['title', 'src', 'content'],
    components: {
      CommentContainer,
    }
  }
</script>
