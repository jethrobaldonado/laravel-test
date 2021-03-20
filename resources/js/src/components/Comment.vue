<template>
  <div class="my-3 pb-5 flex border-b">
    <div class="w-1/6">
      <img class="rounded-full" v-bind:src="`https://i.pravatar.cc/50?u=${data.name}`" />
    </div>
    <div class="w-5/6">
      <div class="bg-gray-100 px-5 py-2">
        <div class="mb-2">
          <div class="font-semibold w-1/2">{{ data.name }}</div>

        </div>
        <div class="font-light mb-2">
          {{ data.comment }}
        </div>
      </div>
      <div class="flex flex-row" v-if="parentDepth < 3">
        <div class="w-1/2">
          <button type="button" class="font-semibold text-indigo-500" @click="showForm">
            Reply
          </button>
        </div>
        <div class="text-sm font-thin text-muted w-1/2 text-right">{{ data.created_at }}</div>
      </div>
      <div v-if="formVisible" class="w-2/2">
        <CommentForm :parentId="data.id" v-on:create-comment="createComment"/>
      </div>
      <div v-if="data.sub_comments.length" class="mt-3 border-t">
        <div
          v-for="comment in data.sub_comments"
        >

        <Comment
          :key="comment.id"
          v-bind:data="comment"
          :createComment="createComment"
          :parentDepth="depth"
        />
      </div>
      </div>
    </div>
  </div>
</template>
<script>
  import CommentForm from './CommentForm';

  export default {
    name: 'Comment',
    components: {
      CommentForm
    },
    props: {
      data: {
        type: Object
      },
      createComment: Function,
      parentDepth: Number
    },
    data() {
      return {
        formVisible: false,
        depth: parseInt(this.parentDepth) + 1,
      }
    },
    methods: {
      showForm: function() {
        this.formVisible = !this.formVisible;
      }
    }
  }
</script>
