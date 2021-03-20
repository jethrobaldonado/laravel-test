<template>
  <div>
    <CommentForm v-on:create-comment="createComment"/>
    <div class="px-5 border-t">
      <div
        v-for="comment in state.commentList"
      >
        <Comment
          :key="comment.id"
          v-bind:data="comment"
          :createComment="createComment"
        />
      </div>
    </div>
  </div>
</template>

<script>
  import { reactive, watch } from '@vue/composition-api';
  import Comment from './Comment';
  import CommentForm from './CommentForm';
  import { useCommentApi } from '../composition/useCommentApi';

  export default {
    components: {
      CommentForm,
      Comment,
    },
    setup() {
      const { state, getComments } = useCommentApi();

      const createComment = ({name, comment, parent_id}) => {
        event.preventDefault();
        const formData = new FormData();
        formData.append('name', name);
        formData.append('comment', comment);
        formData.append('parent_id', parent_id);

        axios({
          method: 'post',
          url: '/api/comments',
          data: formData,
          headers: {'Content-Type': 'multipart/form-data'}
        }).then(response => {
          console.log(response);
          getComments();
        }).catch(error => {
          console.log(error);
        });
      };

      getComments();

      return { state, createComment };
    }
  }
</script>
