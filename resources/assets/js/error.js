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