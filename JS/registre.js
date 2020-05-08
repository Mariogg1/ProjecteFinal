function register(){
    let user = document.getElementById("rUsuari").value;
    let password = document.getElementById("rPassword").value;
    let email = document.getElementById("rEmail").value;
    let nom = document.getElementById("rNom").value;
    let pCognom = document.getElementById("rPCognom").value;
    let sCognom = document.getElementById("rSCognom").value;
    
    axios.post('PHP/registre.php', {
        rUsuari: user,
        rPassword: password,
        rEmail: email,
        rNom: nom,
        rPCognom: pCognom,
        rSCognom: sCognom
    }).then(function(response) {
        if(response.data == "Bien") {
            console.log("Usuari registrat");
        } 
        else {
            console.log(response.data);
        }
      });
}