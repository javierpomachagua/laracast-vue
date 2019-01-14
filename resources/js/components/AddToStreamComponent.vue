<template>
  <div class="message">
    <div class="message-header">Push to Stream</div>
    <div class="message-body">
      <form @submit.prevent="onSubmit" @keydown="form.errors.clear()">
        <p class="control">
          <textarea placeholder="I have something to say" class="textarea" v-model="form.body"></textarea>
          <help
            class="help is-danger"
            v-if="form.errors.has('body')"
            v-text="form.errors.get('body')"
          ></help>
        </p>
        <p class="control">
          <button class="button is-primary" :class="{'is-loading' : form.isLoading}" :disabled="form.errors.any()">Submit</button>
        </p>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: new Form({
        body: ""
      })
    };
  },
  methods: {
    onSubmit() {
      this.form
        .post("/statuses")
        .then(status => this.$emit("completed", status));
    }
  }
};
</script>