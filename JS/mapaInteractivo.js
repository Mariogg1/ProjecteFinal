window.onload = function(){
    var s= Snap("#mapa");
    Snap.load("fotos/Mapa_comarcal_de_Catalunya.svg", function(f){
        let g=f.selectAll("*");
        s.append(g);
        
        let altcamp = s.select("#altcamp");
        altcamp.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            altcamp.attr({
                fill:"red"
            })
            app.setComarcaActual(0);
        })

        let altemporda = s.select("#altemporda");
        altemporda.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            altemporda.attr({
                fill:"red"
            })
            app.setComarcaActual(1);
        })

        let altpenedes = s.select("#altpenedes");
        altpenedes.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            altpenedes.attr({
                fill:"red"
            })
            app.setComarcaActual(2);
        })

        let alturgell = s.select("#alturgell");
        alturgell.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            alturgell.attr({
                fill:"red"
            })
            app.setComarcaActual(3);
        })

        let altaribagorça = s.select("#altaribagorça");
        altaribagorça.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            altaribagorça.attr({
                fill:"red"
            })
            app.setComarcaActual(4);
        })

        let anoia = s.select("#anoia");
        anoia.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            anoia.attr({
                fill:"red"
            })
            app.setComarcaActual(5);
        })

        let bages = s.select("#bages");
        bages.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            bages.attr({
                fill:"red"
            })
            app.setComarcaActual(6);
        })

        let baixcamp = s.select("#baixcamp");
        baixcamp.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            baixcamp.attr({
                fill:"red"
            })
            app.setComarcaActual(7);
        })

        let baixebre = s.select("#baixebre");
        baixebre.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            baixebre.attr({
                fill:"red"
            })
            app.setComarcaActual(8);
        })

        let baixemporda = s.select("#baixemporda");
        baixemporda.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            baixemporda.attr({
                fill:"red"
            })
            app.setComarcaActual(9);
        })

        let baixllobregat = s.select("#baixllobregat");
        baixllobregat.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            baixllobregat.attr({
                fill:"red"
            })
            app.setComarcaActual(10);
        })

        let baixpenedes = s.select("#baixpenedes");
        baixpenedes.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            baixpenedes.attr({
                fill:"red"
            })
            app.setComarcaActual(11);
        })

        let barcelones = s.select("#barcelones");
        barcelones.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            barcelones.attr({
                fill:"red"
            })
            app.setComarcaActual(12);
        })

        let bergueda = s.select("#bergueda");
        bergueda.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            bergueda.attr({
                fill:"red"
            })
            app.setComarcaActual(13);
        })

        let cerdanya = s.select("#cerdanya");
        cerdanya.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            cerdanya.attr({
                fill:"red"
            })
            app.setComarcaActual(14);
        })

        let concabarbera = s.select("#concabarbera");
        concabarbera.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            concabarbera.attr({
                fill:"red"
            })
            app.setComarcaActual(15);
        })

        let garraf = s.select("#garraf");
        garraf.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            garraf.attr({
                fill:"red"
            })
            app.setComarcaActual(16);
        })

        let garrigues = s.select("#garrigues");
        garrigues.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            garrigues.attr({
                fill:"red"
            })
            app.setComarcaActual(17);
        })

        let garrotxa = s.select("#garrotxa");
        garrotxa.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            garrotxa.attr({
                fill:"red"
            })
            app.setComarcaActual(18);
        })

        let girones = s.select("#girones");
        girones.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            girones.attr({
                fill:"red"
            })
            app.setComarcaActual(19);
        })

        let maresme = s.select("#maresme");
        maresme.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            maresme.attr({
                fill:"red"
            })
            app.setComarcaActual(20);
        })

        let montsia = s.select("#montsia");
        montsia.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            montsia.attr({
                fill:"red"
            })
            app.setComarcaActual(21);
        })

        let noguera = s.select("#noguera");
        noguera.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            noguera.attr({
                fill:"red"
            })
            app.setComarcaActual(22);
        })

        let osona = s.select("#osona");
        osona.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            osona.attr({
                fill:"red"
            })
            app.setComarcaActual(23);
        })

        let pallarsjussa = s.select("#pallarsjussa");
        pallarsjussa.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            pallarsjussa.attr({
                fill:"red"
            })
            app.setComarcaActual(24);
        })

        let pallarssobira = s.select("#pallarssobira");
        pallarssobira.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            pallarssobira.attr({
                fill:"red"
            })
            app.setComarcaActual(25);
        })

        let plaurgell = s.select("#plaurgell");
        plaurgell.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            plaurgell.attr({
                fill:"red"
            })
            app.setComarcaActual(26);
        })

        let plaestany = s.select("#plaestany");
        plaestany.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            plaestany.attr({
                fill:"red"
            })
            app.setComarcaActual(27);
        })

        let priorat = s.select("#priorat");
        priorat.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            priorat.attr({
                fill:"red"
            })
            app.setComarcaActual(28);
        })

        let riberaebre = s.select("#riberaebre");
        riberaebre.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            riberaebre.attr({
                fill:"red"
            })
            app.setComarcaActual(29);
        })

        let ripolles = s.select("#ripolles");
        ripolles.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            ripolles.attr({
                fill:"red"
            })
            app.setComarcaActual(30);
        })

        let segarra = s.select("#segarra");
        segarra.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            segarra.attr({
                fill:"red"
            })
            app.setComarcaActual(31);
        })

        let segria = s.select("#segria");
        segria.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            segria.attr({
                fill:"red"
            })
            app.setComarcaActual(32);
        })

        let selva = s.select("#selva");
        selva.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            selva.attr({
                fill:"red"
            })
            app.setComarcaActual(33);
        })

        let solsones = s.select("#solsones");
        solsones.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            solsones.attr({
                fill:"red"
            })
            app.setComarcaActual(34);
        })

        let tarragones = s.select("#tarragones");
        tarragones.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            tarragones.attr({
                fill:"red"
            })
            app.setComarcaActual(35);
        })

        let terraalta = s.select("#terraalta");
        terraalta.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            terraalta.attr({
                fill:"red"
            })
            app.setComarcaActual(36);
        })

        let urgell = s.select("#urgell");
        urgell.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            urgell.attr({
                fill:"red"
            })
            app.setComarcaActual(37);
        })

        let aran = s.select("#aran");
        aran.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            aran.attr({
                fill:"red"
            })
            app.setComarcaActual(38);
        })

        let vallesoccidental = s.select("#vallesoccidental");
        vallesoccidental.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            vallesoccidental.attr({
                fill:"red"
            })
            app.setComarcaActual(39);
        })

        let vallesoriental = s.select("#vallesoriental");
        vallesoriental.click(function(){
            g.attr({
                fill:"#e6e6e6"
            })
            vallesoriental.attr({
                fill:"red"
            })
            app.setComarcaActual(40);
        })

    });
}