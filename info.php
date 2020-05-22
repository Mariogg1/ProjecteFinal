<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COVID19</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="CSS/index.css">
    </head>
    <body>
        <?php 
            include_once 'headersAVer.php';
        ?>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h1>Informació sobre el covid-19</h1> <hr/></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h3>Símptomes</h3>
                <div>
                    <ul>
                        <h5 id="simp">Comuns:</h5>
                        <li>
                            Febre
                        </li>
                        <li>
                            Tos
                        </li>
                        <li>
                            Cansament
                        </li>
                    </ul>
                    <ul>
                        <h5 id="simp">Altres símptomes:</h5>
                        <li>                      
                            Manca d'aire o dificultat per respirar
                        </li>
                        <li>
                            Dolors musculars
                        </li>
                        <li>
                            Calfreds
                        </li>
                        <li>
                            Mal de coll
                        </li>
                        <li>
                            Pèrdua del sentit del gust o de l'olfacte
                        </li>
                        <li>
                            Mal de cap
                        </li>
                        <li>
                            Dolor al pit
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h3></h3></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h3>Mesures de prevenció</h3>
                <div>
                    <ul>
                        <li>                                             
                            Renteu-vos les mans amb freqüència. Utilitza aigua i sabó o un desinfectant de mans a base d'alcohol.
                        </li>
                        <li>
                            Per estar a una distància segura de qualsevol persona que tussi o esternudi.
                        </li>
                        <li>
                            No es toqui els ulls, el nas o la boca.
                        </li>
                        <li>
                            Quan tossiu o esternudeu, cobreix-te el nas i la boca amb el colze flexionat o amb un mocador.
                        </li>
                        <li>
                            Quedeu-vos a casa si se sent malament.
                        </li>
                        <li>
                            Si té febre, tos i dificultat per respirar, sol·liciti atenció mèdica. Truqui amb antelació.
                        </li>
                        <li>
                            Seguiu les instruccions del seu organisme sanitari local.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h3></h3></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h3>Fases del confinament</h3>
                <div>
                <ul>
                    <h4 id="f0">Fase 0(Preparació)</h4>
                    <li>                                             
                        <h6 id="f0">Passejades i esports no professionals.</h6> Els majors de 14 anys podran acer esport o passejar en les franges de 6.00 a 10.00 i 20.00 a 23.00. Els menors de 14 anys podran sortir acompanyats d'un adult entre les 12:00 i les 19:00. I els majors de 70 anys podran fer-ho entre les 10:00 i les 12:00 i entre les 19:00 i les 20:00
                    </li>
                   <li>     
                        <h6 id="f0">Comerç. </h6>Els locals comercials de menys de 400 metres quadrats podran obrir sense cita prèvia i amb un 30% de su port aforament. Els establiments més grans podran delimitar una superfície equivalent. Tots hauria de tenir un horari per atendre prioritàriament a majors de 65 anys. Els centres comercials seguiran tancats.
                   </li>
                   <li>
                        <h6 id="f0">Museus. </h6>Es Permet que la reobertura, però limitant l'aforament a un terç de la Capacitat de les instal·lacions.
                   </li>
                   <li>
                   <h6 id="f0">Biblioteques.</h6> Les biblioteques públiques i privades Volvo a obrir, aúnque no es podran realitzar activitats d'estudi i culturals Dins de les instal·lacions.
                   </li>
                   <li>
                   <h6 id="f0">Vetlles.</h6> Es podran realitzar vetlles però amb un màxim de 15 persones si són a l'aire lliure i de 10 si són a porta tancada.
                   </li>
                    <li>
                    <h6 id="f0">Temples.</h6> Es Permet que l'obertura de lloc de culte amb un terç de su port aforament. No es podran compartir Objectes. I si es resa a terra, cada assistent haurà treure sumi estoreta.
                    </li>
                    <li>
                    <h6 id="f0">Centres educatius i laboratoris universitaris.</h6> Es permetrà la reobertura de les instal·lacions, només per super manteniment i funcions administratives inajornables.
                    </li>
                    <li>
                    <h6 id="f0">Instal·lacions cientificotècniques.</h6> Es Permet que la reobertura de les instal·lacions científiques que quedarón afectades pel decret d'estat d'alarma. A més, es permetrà la realització de congressos i trobades en l'àmbit de la investigació científica i tècnica, però sense superar els 30 participants.
                    </li>
                    <li>
                    <h6 id="f0">Bars i restaurants.</h6> Només es permet que que Obrin per vendre menjars per treure
                    </li>
                    <h4 id="f1">Fase 1(Incial)</h4>
                    <li>
                        <h6 id="f1">Passejades i esports no professionals.</h6> Es mantenen les franges horàries per a passejos o jocs de nens al carrer. Això no s'aplica a les localitats de menys de 10.000 habitants, que tenen llibertat.
                    </li>
                    <li>
                        <h6 id="f1">Contacte social.</h6> Podran ajuntar-fins a 10 persones amb mesures de protecció (separació, mascaretes), tant en un habitatge particular com en un establiment públic que ho permeti o, per exemple, al camp durant una excursió. I grups de fins a 10 persones podran realitzar activitats de turisme actiu i de natura.
                    </li>
                    <li>
                        <h6 id="f1">Segones residències.</h6> Es permet acudir a les segones residències sempre que estiguin a la mateixa província, illa o unitat territorial de referència. Els ciutadans podran desplaçar-se per tot el territori de la seva província o illa.
                    </li>
                    <li>
                        <h6 id="f1">Comerç.</h6> Els locals comercials de menys de 400 metres quadrats podran obrir sense donar cita prèvia i amb un 30% del seu aforament. Els establiments més grans podran delimitar una superfície equivalent. Han de tenir un horari per atendre prioritàriament a majors de 65 anys. Els centres comercials seguiran tancats.
                    </li>
                    <li>
                        <h6 id="f1">Mercats.</h6> Es permeten els mercats a l'aire lliure amb un 25% dels llocs i un terç de l'aforament.
                    </li>
                    <li>
                        <h6 id="f1">Espectacles i centres culturals.</h6> Els teatres, cinemes i museus podran obrir per un terç del seu aforament, amb un màxim de 30 persones en els espectacles amb seients en zones tancades. En els espectacles a l'aire lliure s'amplia l'aforament a les 200 persones. A Castella-la Manxa, Comunitat Valenciana i Múrcia els aforaments seran una mica menors. Les biblioteques obriran amb les mateixes condicions, però només per al préstec i devolució de llibres.
                    </li>
                    <li>
                        <h6 id="f1">Bars i restaurants.</h6> S'autoritza l'obertura de les terrasses dels bars i els restaurants a un 50% de l'aforament i prioritzant els objectes d'un sol ús.
                    </li>
                    <li>
                        <h6 id="f1">Temples.</h6> Es permet l'obertura de llocs de culte amb un terç del seu aforament. No es podran compartir objectes. I si es resa a terra, cada assistent haurà de portar la seva estoreta.
                    </li>
                    <li>
                        <h6 id="f1">Concessionaris, ITV i vivers.</h6> Es permet la reobertura amb cita prèvia dels concessionaris d'automoció, les estacions d'inspecció tècnica de vehicles i els centres de jardineria independentment de la seva superfície.
                    </li>
                    <li>
                        <h6 id="f1">Activitats esportives.</h6> Entrenaments individuals d'esportistes d'elit i federats. Podran obrir centres esportius amb cita prèvia.
                    </li>
                    <li>
                        <h6 id="f1">Centres educatius.</h6> Podran estar oberts per a tasques indispensables (manteniment).
                    </li>
                    <li>
                        <h6 id="f1">Centres sociosanitaris.</h6> Es prioritzarà l'atenció telemàtica, però obriran si requereixen prestar atenció a persona.
                    </li>
                    <li>
                        <h6 id="f1">Allotjaments turístics.</h6> Poden obrir hotels i altres albergs turístics amb el 100% de les habitacions, però sense fer servir les zones comunes.
                    </li>
                    <li>
                        <h6 id="f1">Caça i pesca.</h6> Podran reprendre la seva activitat la caça i la pesca esportiva.
                    </li>
                    <h4 id="f2">Fase 2(Intermitja)</h4>
                    <li>
                        <h6 id="f2">Passejades i esport.</h6> Totes les persones menors de 70 anys podran passejar i realitzar activitats físiques durant el dia. Només es reserven les franges compreses entre les 10.00 i les 12.00 i les 19.00 i les 20.00 per a les persones majors de 70 anys.
                    </li>
                    <li>
                        <h6 id="f2">Contacte social</h6> S'amplien a 15 els participants permesos en reunions. S'incrementa fins a 20 les persones que poden realitzar en grup activitats de turisme actiu i de natura i es permet la celebració de congressos, trobades, reunions de negoci i conferències sense que se superi la xifra de 50 assistents i sempre que es respecti la distància física exigida de dos metres.
                    </li>
                    <li>
                        <h6 id="f2">Segones residències.</h6> Es permet sempre que estiguin en la mateixa província, illa o unitat territorial de referència.
                    </li>
                    <li>
                        <h6 id="f2">Comerços.</h6> Els locals comercials podran obrir independentment del seu tamany, encara que l'aforament es reduirà a l'40%. Hi ha d'haver un horari per atendre prioritàriament a majors de 65 anys.
                    </li>
                    <li>
                        <h6>Mercats.</h6> Es permeten els mercats a l'aire lliure amb un terç de les parades.
                    </li>
                    <li>
                        <h6 id="f2">Centres comercials.</h6> Centres comercials i parcs comercials podran obrir sempre que limitin l'aforament total a l'30% de les seves zones comuns i a l'40% l'aforament de cada un dels establiments situats en ells. No es permetrà la permanència de clients a les zones comunes excepte per al trànsit i les zones infantils segueixen tancades.
                    </li>
                    <li>
                        <h6 id="f2">Restauració.</h6> Obriran establiments d'hostaleria i restauració per a consum en el local, llevat dels locals de discoteques i bars d'oci nocturn, sempre que no se superi un 40% del seu aforament. No es podrà consumir a les barres i preferiblement el client haurà de reservar una taula prèviament. Les terrasses seguiran amb una limitació de l'50% del seu aforament.
                    </li>
                    <li>
                        <h6 id="f2"> Hotels.</h6> Podran obrir a el públic les zones comunes dels hotels i allotjaments turístics, sempre que no se superi un terç del seu aforament.
                    </li>
                    <li>
                        <h6 id="f2">Cinemes i teatres.</h6> Tots els cinemes, teatres, auditoris i espais similars podran reobrir sempre que comptin amb butaques preassignades i no superin un terç de l'aforament. També podran obrir les sales d'exposicions i monuments, però amb un terç d'aforament. A les biblioteques es permetrà la lectura dins de les instal·lacions, però amb la mateixa limitació d'aforament.
                    </li>
                    <li>
                        <h6 id="f2">Concerts.</h6> En el cas d'activitats a l'aire lliure, el públic haurà de romandre assegut, guardant la distància necessària i no podrà superar un terç de l'aforament autoritzat, ni reunir més de 400 persones.
                    </li>
                    <li>
                        <h6 id="f2">Piscines i platges.</h6> Les piscines recreatives podran reobrir, però limitant a l'30% l'aforament. També es reobriran platges, però guardant la distància de seguretat de dos metres entre persones.
                    </li>
                    <li>
                        <h6 id="f2">Esports.</h6> Es permet la represa de les competicions professionals, però a porta tancada. I qualsevol persona podrà acudir a instal·lacions esportives per exercitar-sempre amb cita prèvia.
                    </li>
                    <li>
                        <h6 id="f2">Llocs de culte.</h6> Es permetrà l'assistència a llocs de culte sempre que no se superi el 50% del seu aforament. A més, es podran realitzar de nou casaments sempre que no se superi el 50% de l'aforament de el lloc en el qual es dugui a terme i que no se superin les 100 persones si és a l'aire lliure i les 50 si és sota sostre.
                    </li>
                    <li>
                        <h6 id="f2">Vetlles.</h6> El màxim d'assistents a les sales de vetlla serà de 25 persones en espais a l'aire lliure i de 15 en espais tancats.
                    </li>
                    <h4 id="f3">Fase 3(Avançada)</h4>
                    <li>
                        <h6 id="f3">En restauració </h6>disminuiran les restriccions d'aforament, però amb estricta separació entre el públic.
                    </li>
                    <li>                                             
                        <h6 id="f3">Es flexibilitzarà la mobilitat general.</h6>
                    </li>
                    <li>
                        <h6 id="f3">S'ampliarà l'ocupació d'espais,</h6> com el comerç, per exemple, fins a un 50% del seu aforament.
                    </li>
                    <li>
                        <h6 id="f3">Discoteques i bars nocturns</h6> amb un aforament màxim d'un terç de l'habitual.
                    </li>
                    <li>
                        <h6 id="f3">Obertura de platges</h6> en condicions de seguretat i distanciament.
                    </li>
                    <li>
                        <h6 id="f3">Bous:</h6> amb una limitació d'aforament que garanteixi una persona per cada 9 metres quadrats.
                    </li>

                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h3></h3></div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h3>Ayuda/Assitència</h3>
                <div>
                    <ul>
                        <li>
                        <h6>Telefon a trucar en cas de necessitar-ho: </h6>
                        061
                        </li>
                        <li>
                            <h6>Dudes i consultes: </h6>
                            010 y 012
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><h3></h3></div>
            <div class="col-sm-4"></div>
        </div>
        <footer>
            <div>© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
        </footer>
    </body>
</html>