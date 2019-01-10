<template>
  <div>
    <task v-for="character in characters" v-text="character.name"></task>			
  </div>
</template>

<script>
export default {
  data() {
    return {
      characters: [
        { name: "Obi Wan", dead: true },
        { name: "Darth Maul", dead: true },
        { name: "Kylo Ren", dead: false },
        { name: "Darth Vader", dead: true }
      ]
    };
  }
};
</script>