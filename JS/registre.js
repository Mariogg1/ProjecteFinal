function tiene_numeros(texto){
    var numeros="0123456789";
    for(i=0; i<texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0)!=-1){
            alert('tiene numeros');
            return 1;
        }
    }
    return 0;
}

function register(){
    let formulari_bien=true;
    let user = document.getElementById("registre_usuari").value;
    let password = document.getElementById("registre_password").value;
    let correu = document.getElementById("registre_email").value;
    let nom = document.getElementById("registre_nom").value;
    let primer_cognom = document.getElementById("registre_primer_cognom").value;
    let segon_cognom = document.getElementById("registre_segon_cognom").value;

    if (user.length == '') {
        formulari_bien=false;
    }
    else if(password.length == ''){
        formulari_bien=false;
    }
    else if(correu.length == ''){
        formulari_bien=false;
    }
    else if(nom.length == '' || tiene_numeros(nom.length)){
        formulari_bien=false;
    }
    else if(primer_cognom.length == '' || tiene_numeros(primer_cognom.length)){
        formulari_bien=false;
    }
    else if(segon_cognom.length == '' || tiene_numeros(segon_cognom.length)){
        formulari_bien=false;
    }
    if(formulari_bien==true){
        axios.post('api.php/records/usuaris', {
            nomUsuari: user,
            passwordc: password,
            nom: nom,
            primerCognom: primer_cognom,
            segonCognom: segon_cognom,
            email: correu
        }).then(function(response) {
                console.log("Usuari registrat amb id="+ response.data);
        }).catch(error => console.error(error));;
    }
    else{
        document.getElementById("alerta").style.display="block";
    }
}