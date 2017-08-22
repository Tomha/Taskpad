class Errors {

    constructor() {
        this.errors = {};
    }

    any() {
        return Object.keys(this.errors).length > 0;
    }

    clear(field) {
        if(this.errors[field]){
            delete this.errors[field];
        } else {
            this.errors = {};
        }
    }

    get(field) {
        if(this.errors[field]){
            return this.errors[field][0];
        }
    }

    class(field) {
        if(this.has(field)) {
            return 'has-error'
        } else {
            return '';
        }
    }

    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    record(errors) {
        this.errors = errors;
    }

}

class Form {
    
    constructor(data) {
        this.originalData = data;
        this.success = false;

        for(let field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    data() {
        let data = {}

        for (let property in this.originalData) {
            data[property] = this[property];
        }

        return data;
    }

    clearSuccess() {
        this.success = false;
    }

    reset() {
        for(let field in this.originalData) {
            this[field] = '';
        }

        this.errors.clear();
        this.success = false;
    }

    onSuccess(data) {
        this.reset();
        this.success = true;
    }

    onFail(errors) {
        this.errors.record(errors);
    }

    post(url) {
        return this.submit('post', url);
    }

    delete(url) {
        return this.submit('delete', url);
    }

    submit(requestType, url) {
        return new Promise((resolve, reject) => {
            let result = axios[requestType](url, this.data())
                .then(response => {
                    this.onSuccess(response.data);
                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response.data);
                    reject(error.response.data);
                })
        });
    }
}