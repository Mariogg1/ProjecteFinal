var app = new Vue({
    el:'#tablaSospitososAPI',
    data: {
        comarcaAPI: 0,
        comarcas:[
            "Aran","Alt Urgell", "Alt Camp","Alt Empordà","Alt Penedès","Alta Ribargorça","Baix Camp","Bages","Anoia",
            "Garrigues","Garraf","Conca de Barberà","Cerdanya","Berguedà","Barcelonès","Baix Penedès","Baix Llobregat","Baix Empordà","Baix Ebre",
            "Pla d'Urgell","Pallars Sobirà","Pallars Jussà","Osona","Noguera","Montsià","Moianès","Maresme","Gironès","Garrotxa",
            "Vallès Oriental","Vallès Occidental","Urgell","Terra Alta","Tarragonès","Solsonès","Selva","Segrià","Segarra","Ripollès","Ribera d'Ebre","Priorat","Pla de l'Estany"
        ]
    },
    created: function (){
        this.getData();
    },
    methods:{
        getData: function(){
            for(let i=0; i<this.comarcas.length; i++){
                axios.get(`api.php/records/SospitososAPI?filter=comarca,eq,${this.comarcas[i]}`)
                .then(response => {
                    console.log(response.data.records);
                    this.comarcaAPI+=response.data.records;
                })
                .catch(error => console.error(error));
            }
        },
    }
});