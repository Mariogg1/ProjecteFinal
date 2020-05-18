var app = new Vue({
    el:'#info',
    data: {
        comarques: null,
        pag: 1,
        perPag: 10,
        comarcaActual: null
    },
    created: function (){
        this.getData();
    },
    mounted: function (){

    },
    methods:{
        getData: function(){
            axios.get('PHP/obtenirDades.php')
            .then(response => {
                this.comarques=response.data;
            })
            .catch(error => console.error(error));
        },
        setComarcaActual: function(comarca){
            this.comarcaActual=this.comarques[comarca];
        }

    }
});