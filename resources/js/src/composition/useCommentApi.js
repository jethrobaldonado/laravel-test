import { reactive, watchEffect } from '@vue/composition-api';
import axios from 'axios';

export function useCommentApi() {
  const state = reactive({
    commentList: []
  });

  const getComments = () => {
    const apiUri = 'http://localhost/api/comments';

    axios
      .get(apiUri)
      .then(response => {
        const { data } = response;
        state.commentList = data.data;
      });;
  };

  return {
    state,
    getComments
  };
}
