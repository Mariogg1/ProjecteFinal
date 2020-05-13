var app = new Vue({
    el:'#info',
    data: {
        comarques: null
    },
    created: function (){
        this.getData();
    },
    mounted: function (){

    },
    methods:{
        getData: function(){
            axios.get('php/obtenirDades.php')
            .then(response => {
                this.comarques=response.data;
                console.log(response.data[0].nom);
            })
            .catch(error => console.error(error));
        }
    }
});