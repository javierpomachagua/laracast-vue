import Errors from '../core/Errors.js';

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
    this.reset();          
    this.isLoading = false;
  }
  onFail(errors) {
    this.errors.record(errors);
    this.isLoading = false;
  }
}

export default Form;