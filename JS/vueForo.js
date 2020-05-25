var app = new Vue({
    el:'#main',
    data: {
        coments: 0,
        pag: 1,
        perPag: 10,
    },
    created: function (){
        this.getData();
    },
    methods:{
        getData: function(){
            axios.get('api.php/records/comentaris')
            .then(response => {
                this.coments=response.data.records.reverse();
            })
            .catch(error => console.error(error));
        },
    }
});