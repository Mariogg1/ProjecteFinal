function comentari(){
    let comentari = document.getElementById("registre_comentari").value;

    axios.post('PHP/afegirComentaris.php', {
        registre_comentari: comentari,
    }).then(function(response) {
        alert(registre_comentari);
        if(response.data == "Bien") {
            alert("Comentari afegir");
        } 
        else {
            console.log(response.data);
        }
    }).catch(error => console.error(error));;
}