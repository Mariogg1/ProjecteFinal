function borrarComent(num){
    num=num.id;
    Swal.fire({
        title: 'Segur que vols eliminar el comentari?',
        text: "Els canvis són irreversibles!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí'
      }).then((result) => {
        if (result.value) {
            axios.delete(`api.php/records/comentaris/${num}`, {
            }).then(response => {
                console.log("S'ha esborrat el comentar: "+response.data)
                Swal.fire(
                    'Esborrat!',
                    'S\'ha esborrat el comentari.',
                    'success'
                  ).then((result)=>{
                    if (result.value)
                        location.reload();
                  })
            }).catch(error => console.error(error));
        }
      })
}