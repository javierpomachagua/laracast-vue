<template>
  <div id="home" class="container">
    <div class="columns">
      <div class="column">
        <div class="message" v-for="status in statuses">
          <div class="message-header">
            <p>{{ status.user.name }} said ...</p>
            <p>{{ status.created_at | ago | capitalize }}</p>
          </div>
          <div class="message-body" v-text="status.body "></div>
        </div>

        <add-to-stream @completed="addStatus"></add-to-stream>

      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";
import Status from "../models/Status";
import AddToStream from "../components/AddToStreamComponent.vue";
export default {
  data() {
    return {
      statuses: []
    };
  },
  components: {
    AddToStream : AddToStream
  },
  filters: {
    ago(date) {
      return moment(status.created_at).fromNow();
    },
    capitalize(value) {
      return value.toUpperCase();
    }
  },
  created() {
    Status.all((statuses) => this.statuses = statuses);
  },
  methods: {
    addStatus(status) {
      this.statuses.unshift(status);

      alert('You status has been added to the stream');

      window.scrollTo(0, 0);
    }
  }
};
</script>

<style scoped>
#home {
  padding-top: 20px;
}
</style>