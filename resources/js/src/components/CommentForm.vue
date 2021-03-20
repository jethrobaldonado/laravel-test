<template>
  <div class="">
    <form>
      <div class="flex flex-col mb-4 p-2">
        <input class="border py-2 px-3 text-grey-darkest my-2" type="text" v-model="formValues.name" placeholder="Name"/>
        <textarea class="border py-2 px-3 text-grey-darkest mb-2" v-model="formValues.comment" placeholder="Write Comment"></textarea>
        <button class="bg-purple-400 hover:bg-purple-900 text-white uppercase text-sm mx-auto p-2 rounded" type="button" @click="$emit('create-comment', formValues, resetForm())">Comment</button>
      </div>
    </form>
  </div>
</template>

<script>
  export default {
    props: ["parentId"],
    data() {
      return {
        formValues: {
          name: '',
          comment: '',
          parent_id: this.parentId || false
        }
      }
    },
    methods: {
      resetForm: function() {
        this.formValues = {
          name: '',
          comment: '',
          parent_id: this.parentId || false
        }
      }
    }
  }
</script>
