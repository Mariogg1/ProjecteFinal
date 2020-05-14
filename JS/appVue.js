var app = new Vue({
    el:'#info',
    data: {
        comarques: null,
        pag: 1,
        porPag: 10,
        pags:[],
        infoPag: null
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
        },
        setPags: function(){
            let numPages = Math.ceil(this.comarques.length / this.porPag);
            for (let i = 1; i <=numPages ; i++) 
                this.pags.push(i);
        },
        paginar: function(){
            
        }

    }
});