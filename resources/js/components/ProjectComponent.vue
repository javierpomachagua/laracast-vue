<template>
  <div>
    <form
      action="/projects"
      method="POST"
      @submit.prevent="onSubmit()"
      @keydown="form.errors.clear($event.target.name)"
    >
      <div class="field">
        <label class="label">Nombre</label>
        <div class="control">
          <input class="input" type="text" name="name" placeholder="Nombre" v-model="form.name">
          <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
        </div>
      </div>
      <div class="field">
        <label class="label">Descripción</label>
        <div class="control">
          <input class="input" type="text" name="description" placeholder="Descripción" v-model="form.description">
          <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
        </div>
      </div>
      <div class="control">
        <button class="button is-primary" :class="{'is-loading': form.isLoading}" :disabled="form.errors.any()">Guardar</button>
      </div>
    </form>
  </div>
</template>

<script>
class Errors {
  constructor() {
    this.errors = {};
  }
  has(field) {
    return this.errors.hasOwnProperty(field);
  }
  get(field) {
    if (this.errors[field]) {
      return this.errors[field][0];
    }
  }
  record(errors) {
    this.errors = errors;
  }
  clear(field) {
    if (field) {
      delete this.errors[field];
      return;
    }
    this.errors = {};
  }
  any() {
    return Object.keys(this.errors).length > 0;
  }
}

class Form {
  constructor(data) {
    this.originalData = data;

    for (let field in data) {
      this[field] = data[field];
    }

    this.errors = new Errors();
    this.isLoading = false;
  }
  data() {
    let data = {};

    for (let property in this.originalData) {
      data[property] = this[property];
    }

    return data;
  }
  submit(requestType, url) {
    this.isLoading = true;
    return new Promise((resolve ,reject) => {
      axios[requestType](url, this.data())
        .then(response =>  {
          this.onSuccess(response.data);
          resolve(response.data);
        })
        .catch(error => {
           this.onFail(error.response.data.errors);
           reject(error.response.data.errors);
        });
    });    
  }
  reset() {
    for (let field in this.originalData) {
      this[field] = '';
    }
    this.errors.clear();
  }
  post(url) {
    return this.submit('post', url);
  }
  onSuccess(data) {
    alert(data.message);
    this.reset();          
    this.isLoading = false;
  }
  onFail(errors) {
    this.errors.record(errors);
    this.isLoading = false;
  }
}
export default {
  data() {
    return {
      form: new Form({
        name: "",
        description: ""
      })
    };
  },
  methods: {
    onSubmit() {      
        this.form.post('/projects')
          .then(data => alert(data.message));
    }
  }
};
</script>