function veureCoincidencies(){
    var p1, p2, p3, p4, p5, comarca, sexe, resultat
    if (document.getElementById('customRadioInline1').checked==true) {p1=1}
    else {p1=0}
    if (document.getElementById('customRadioInline3').checked==true) {p2=1}
    else {p2=0}
    if (document.getElementById('customRadioInline5').checked==true) {p3=1}
    else {p3=0}
    if (document.getElementById('customRadioInline7').checked==true) {p4=1}
    else {p4=0}
    if (document.getElementById('customRadioInline9').checked==true) {p5=1}
    else {p5=0}
    if(document.getElementById("customRadioInline13").checked==true){sexe="Home"}
    else {sexe="Dona"}
    resultat=p1+p2+p3+p4+p5;
    comarca=document.getElementById("inputState").value;
    if(resultat<=2){
        Swal.fire({
            title: 'No sembla ser un cas positiu',
            text: 'Per a més informació pots trucar al 061'
        })    
    }
    else{
        app.sumaCas(comarca, sexe);
        Swal.fire({
            icon: 'warning',
            title: 'Podríes ser un cas positiu!',
            text: 'Hauries de trucar al 061'
          })
        axios.post('api.php/records/SospitososAPI', {
            sexe: sexe,
            comarca: comarca,
        }).then(function(response) {
                console.log("cas registrat: "+ response.data);
        }).catch(error => console.error(error));
    }
    document.getElementById("tablaSospitososAPI").style.display="block";
    document.getElementById("questionari").style.display="none";
}