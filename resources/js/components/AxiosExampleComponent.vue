<template>
    <div>
      <ul>
        <li v-for="skill in skills" v-text="skill"></li>
      </ul>
    </div>
</template>

<script>
export default {
  data() {
    return {
      skills: []
    };
  },
  mounted() {
    axios.get('/skills').then(response => this.skills = response.data);
  }
    
}
</script>