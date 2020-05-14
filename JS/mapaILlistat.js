function veureMapa(){
    document.getElementById("boton1").addEventListener("click", function(){
        document.getElementById("mapa").style.display="block";
        document.getElementById("info").style.display="none";
      });
}
function veureLlistat(){
    document.getElementById("boton2").addEventListener("click", function(){
        document.getElementById("info").style.display="block";
        document.getElementById("mapa").style.display="none";
      });
}