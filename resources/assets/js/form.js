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