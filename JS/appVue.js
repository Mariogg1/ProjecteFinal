var app = new Vue({
    el:'#taula',
    data: {
        comarques: 0,
        pag: 1,
        perPag: 10,
    },
    created: function (){
        this.getData();
    },
    methods:{
        getData: function(){
            axios.get('api.php/records/COMARCA')
            .then(response => {
                this.comarques=response.data.records;
            })
            .catch(error => console.error(error));
        },
    }
});

var app2 = new Vue({
    el:'#targetaMapa',
    data: {
        comarcaActual: 0
    },
    methods:{
        setComarcaActual: function(comarca){
            this.comarcaActual=app.comarques[comarca];
        }
    }
});