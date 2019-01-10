<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        {{ name }}
                    </div>
                    
                    <ul>
                        <li v-for="name in names">
                            {{ name }}
                        </li>
                    </ul>

                    <input type="text" name="name" id="name" v-model="name">
                    <button @click="addName()" class="btn btn-primary">Add</button>

                    <h1>All Characters</h1>
                    <ul>
                        <li v-for="character in characters" v-text="character.name"></li>
                    </ul>

                    <h1>Dead</h1>
                    <ul>
                        <li v-for="dead in deads" v-text="dead.name"></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                names: ['Abi', 'Gloria', 'Germán', 'Enzo'],
                characters: [
                    { name: 'Obi Wan', dead: true },
                    { name: 'Darth Maul', dead: true },
                    { name: 'Kylo Ren', dead: false },
                    { name: 'Darth Vader', dead: true }
                ]
            };
        },
        methods: {
            addName() {
                this.names.push(this.name);
                this.name = '';
            }
        },
        computed: {
            deads() {
                return this.characters.filter(character => character.dead);
            }
        }
    }
</script>
