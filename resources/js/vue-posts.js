var app = new Vue(
    {
        el: '#root',
        data: {
            title: 'I seguenti post provengono dalla API',
            posts: []
        },
        methods: {
        },
        mounted() {
            axios
                .get('http://127.0.0.1:8000/api/posts')
                .then((response) => {
                    //Metto nell'array posts tutti i dati che mi risultano dalla chiamata API
                    this.posts = response.data;
                    console.log(this.posts);
                });
        }
    }
);
