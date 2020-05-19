
    var s= Snap("#mapa");
    Snap.load("fotos/Mapa_comarcal_de_Catalunya.svg", function(f){
        let g=f.selectAll("*");
        s.append(g);
        
        let altcamp = s.select("#altcamp");
        altcamp.click(function(){
            setColors(g, altcamp, 0);
        })

        let altemporda = s.select("#altemporda");
        altemporda.click(function(){
            setColors(g, altemporda, 1);
        })

        let altpenedes = s.select("#altpenedes");
        altpenedes.click(function(){
            setColors(g, altpenedes, 2);
        })

        let alturgell = s.select("#alturgell");
        alturgell.click(function(){
            setColors(g, alturgell, 3);
        })

        let altaribagorça = s.select("#altaribagorça");
        altaribagorça.click(function(){
            setColors(g, altaribagorça, 4);
        })

        let anoia = s.select("#anoia");
        anoia.click(function(){
            setColors(g, anoia, 5);
        })

        let bages = s.select("#bages");
        bages.click(function(){
            setColors(g, bages, 6);
        })

        let baixcamp = s.select("#baixcamp");
        baixcamp.click(function(){
            setColors(g, baixcamp, 7);
        })

        let baixebre = s.select("#baixebre");
        baixebre.click(function(){
            setColors(g, baixebre, 8);
        })

        let baixemporda = s.select("#baixemporda");
        baixemporda.click(function(){
            setColors(g, baixemporda, 9);
        })

        let baixllobregat = s.select("#baixllobregat");
        baixllobregat.click(function(){
            setColors(g, baixllobregat, 10);
        })

        let baixpenedes = s.select("#baixpenedes");
        baixpenedes.click(function(){
            setColors(g, baixpenedes, 11);
        })

        let barcelones = s.select("#barcelones");
        barcelones.click(function(){
            setColors(g, barcelones, 12);
        })

        let bergueda = s.select("#bergueda");
        bergueda.click(function(){
            setColors(g, bergueda, 13);
        })

        let cerdanya = s.select("#cerdanya");
        cerdanya.click(function(){
            setColors(g, cerdanya, 14);
        })

        let concabarbera = s.select("#concabarbera");
        concabarbera.click(function(){
            setColors(g, concabarbera, 15);
        })

        let garraf = s.select("#garraf");
        garraf.click(function(){
            setColors(g, garraf, 16);
        })

        let garrigues = s.select("#garrigues");
        garrigues.click(function(){
            setColors(g, garrigues, 17);
        })

        let garrotxa = s.select("#garrotxa");
        garrotxa.click(function(){
            setColors(g, garrotxa, 18);
        })

        let girones = s.select("#girones");
        girones.click(function(){
            setColors(g, girones, 19);
        })

        let maresme = s.select("#maresme");
        maresme.click(function(){
            setColors(g, maresme, 20);
        })

        let montsia = s.select("#montsia");
        montsia.click(function(){
            setColors(g, montsia, 21);
        })

        let noguera = s.select("#noguera");
        noguera.click(function(){
            setColors(g, noguera, 22);
        })

        let osona = s.select("#osona");
        osona.click(function(){
            setColors(g, osona, 23);
        })

        let pallarsjussa = s.select("#pallarsjussa");
        pallarsjussa.click(function(){
            setColors(g, pallarsjussa, 24);
        })

        let pallarssobira = s.select("#pallarssobira");
        pallarssobira.click(function(){
            setColors(g, pallarssobira, 25);
        })

        let plaurgell = s.select("#plaurgell");
        plaurgell.click(function(){
            setColors(g, plaurgell, 26);
        })

        let plaestany = s.select("#plaestany");
        plaestany.click(function(){
            setColors(g, plaestany, 27);
        })

        let priorat = s.select("#priorat");
        priorat.click(function(){
            setColors(g, priorat, 28);
        })

        let riberaebre = s.select("#riberaebre");
        riberaebre.click(function(){
            setColors(g, riberaebre, 29);
        })

        let ripolles = s.select("#ripolles");
        ripolles.click(function(){
            setColors(g, ripolles, 30);
        })

        let segarra = s.select("#segarra");
        segarra.click(function(){
            setColors(g, segarra, 31);
        })

        let segria = s.select("#segria");
        segria.click(function(){
            setColors(g, segria, 32);
        })

        let selva = s.select("#selva");
        selva.click(function(){
            setColors(g, selva, 33);
        })

        let solsones = s.select("#solsones");
        solsones.click(function(){
            setColors(g, solsones, 34);
        })

        let tarragones = s.select("#tarragones");
        tarragones.click(function(){
            setColors(g, tarragones, 35);
        })

        let terraalta = s.select("#terraalta");
        terraalta.click(function(){
            setColors(g, terraalta, 36);
        })

        let urgell = s.select("#urgell");
        urgell.click(function(){
            setColors(g, urgell, 37);
        })

        let aran = s.select("#aran");
        aran.click(function(){
            setColors(g, aran, 38);
        })

        let vallesoccidental = s.select("#vallesoccidental");
        vallesoccidental.click(function(){
            setColors(g, vallesoccidental, 39);
        })

        let vallesoriental = s.select("#vallesoriental");
        vallesoriental.click(function(){
            setColors(g, vallesoriental, 40);
        })

    });

function setColors(g, comarca, num) {
    g.attr({
        fill:"#e6e6e6"
    })
    comarca.attr({
        fill:"red"
    })
    app2.setComarcaActual(num);
}