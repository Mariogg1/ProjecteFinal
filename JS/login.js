function login() {
    let user = document.getElementsByName('user_name').value;
    let password = document.getElementsByName('passwordc').value;
    console.log(user, password);
  
    axios.post('php/login.php', {
        usuari: user,
        passwd: password,
    }).then(function(response) {
        if(response.data == "Ok") {
            console.log("Usuari loged");
        } 
        else {
            console.log(response.data);
        }
    }).catch(error => console.error(error));
  }