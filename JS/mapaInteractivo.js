window.onload = function(){
    var s= Snap("#mapa");
    Snap.load("fotos/Mapa_comarcal_de_Catalunya.svg", function(f){
        var g=f.selectAll("*");
        s.append(g);
    });
}