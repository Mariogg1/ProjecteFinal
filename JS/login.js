function login() {
    let user = document.getElementById('login_name').value;
    let password = document.getElementById('login_passwrd').value;
  
    axios.post('PHP/login.php', {
        usuari: user,
        passwd: password,
    }).then(function(response) {
        if(response.data == "Ok") {
            Swal.fire({
                icon: 'success',
                title: 'Has iniciat sessió!',
              }).then((result) => {
                if (result.value) {
                    location.reload();
                }
            })
        } 
        else {
            Swal.fire({
                icon: 'error',
                title: 'Credencials incorrectes',
              })
        }
    }).catch(error => console.error(error));;
  }