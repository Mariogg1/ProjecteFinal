var app = new Vue({
    el:'#tablaSospitososAPI',
    data: {
        results: 0,
        comarcas:[
            {nom:"Alt Camp", homes:0, dones:0},
            {nom:"Alt Empordà", homes:0, dones:0},
            {nom:"Alt Penedès", homes:0, dones:0},
            {nom:"Alt Urgell", homes:0, dones:0},
            {nom:"Alta Ribagorça", homes:0, dones:0},
            {nom:"Anoia", homes:0, dones:0},
            {nom:"Bages", homes:0, dones:0},
            {nom:"Baix Camp",homes:0, dones:0},
            {nom:"Baix Ebre", homes:0, dones:0},
            {nom:"Baix Empordà", homes:0, dones:0},
            {nom:"Baix Llobregat", homes:0, dones:0},
            {nom:"Baix Penedès", homes:0, dones:0},
            {nom:"Barcelonès", homes:0, dones:0},
            {nom:"Berguedà", homes:0, dones:0},
            {nom:"Cerdanya", homes:0, dones:0},
            {nom:"Conca de Barberà", homes:0, dones:0},
            {nom:"Garraf", homes:0, dones:0},
            {nom:"Garrigues", homes:0, dones:0},
            {nom:"Garrotxa", homes:0, dones:0},
            {nom:"Gironès", homes:0, dones:0},
            {nom:"Maresme", homes:0, dones:0},
            {nom:"Montsià", homes:0, dones:0},
            {nom:"Noguera", homes:0, dones:0},
            {nom:"Osona", homes:0, dones:0},
            {nom:"Pallars Jussà", homes:0, dones:0},
            {nom:"Pallars Sobirà", homes:0, dones:0},
            {nom:"Pla d'Urgell", homes:0, dones:0},
            {nom:"Pla de l'Estany", homes:0, dones:0},
            {nom:"Priorat", homes:0, dones:0},
            {nom:"Ribera d'Ebre", homes:0, dones:0},
            {nom:"Ripollès", homes:0, dones:0},
            {nom:"Segarra", homes:0, dones:0},
            {nom:"Segrià", homes:0, dones:0},
            {nom:"Selva", homes:0, dones:0},
            {nom:"Solsonès", homes:0, dones:0},
            {nom:"Tarragonès", homes:0, dones:0},
            {nom:"Terra Alta", homes:0, dones:0},
            {nom:"Urgell", homes:0, dones:0},
            {nom:"Aran", homes:0, dones:0},
            {nom:"Vallès Occidental", homes:0, dones:0},
            {nom:"Vallès Oriental", homes:0, dones:0},
            {nom:"Moianès", homes:0, dones:0}
        ],
        pag: 1,
        perPag: 10
    },
    created: function (){
        this.getData();
    },
    methods:{
        getData: function(){
            for(let i=0; i<this.comarcas.length; i++){
                axios.get(`api.php/records/SospitososAPI?filter=comarca,eq,${this.comarcas[i].nom}`)
                .then(response => {
                    if(response.data.records.length>0){
                        for (let j = 0; j < response.data.records.length; j++) {
                            if(response.data.records[j].sexe=="Home")
                                this.comarcas[i].homes+=1;
                            else
                                this.comarcas[i].dones+=1;
                        }
                        this.results+=response.data.records;
                    }
                })
                .catch(error => console.error(error));
            }
        }
    }
});