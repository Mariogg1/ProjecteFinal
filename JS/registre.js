function register(){
    let user = document.getElementById("registre_usuari").value;
    let password = document.getElementById("registre_password").value;
    let email = document.getElementById("registre_email").value;
    let nom = document.getElementById("registre_nom").value;
    let primer_cognom = document.getElementById("registre_primer_cognom").value;
    let segon_cognom = document.getElementById("registre_segon_cognom").value;
    
    axios.post('PHP/registre.php', {
        registre_usuari: user,
        registre_password: password,
        registre_email: email,
        registre_nom: nom,
        registre_primer_cognom: primer_cognom,
        registre_segon_cognom: segon_cognom
    }).then(function(response) {
        if(response.data == "Bien") {
            console.log("Usuari registrat");
        } 
        else {
            console.log(response.data);
        }
      });
}