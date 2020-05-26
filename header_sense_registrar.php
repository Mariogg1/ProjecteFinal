<header>
    <div class="todoHeader">
        <div>
            <div class="titulo">
                <h1>
                    Informació actualizada sobre el Covid-19
                </h1>
            </div>
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white" style="justify-content: center;">
                <ul class="navbar-nav">
                        <a class="nav-link" href="index.php">Mapa</a>
                        <a class="nav-link" href="selectorTest.php">Test</a>
                        <a class="nav-link" href="info.php">Informació</a>
                        <a class="nav-link" href="foro.php">Foro</a>
                </ul>
            </nav>
        </div>
            <!--Final navbar-->
            <!--Formulario-->
        <form id="loginform ">
            <div class="formulario">
                <div>
                    <input id="login_name" type="text" placeholder="User name" required="required">
                </div>
                <div>
                    <div >
                        <input id="login_passwrd" type="password" placeholder="Password" required="required">
                    </div>
                </div>
                <div class="boton">
                    <button type="button" id="envia" onclick="login()">Login</button>
                    <button type="button" data-toggle="modal" data-target="#modalRegistre">Registra't</button>
                </div>
                </div>
        </form>
            <!--Final formulario-->
    </div>
    <div class="modal fade" id="modalRegistre">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h2 class="modal-title">Registre</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">	
                    <div class="alert alert-warning" role="alert" id="alerta">
                        Les dades no estan bé
                    </div>			
                    <div class="form-group">
                        <label>*Usuari</label>
                        <input id ="registre_usuari" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <div class="clearfix">
                            <label>*Clau</label>
                        </div>
                        <input id ="registre_password" type="password" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>*Email</label>
                        <input id ="registre_email" type="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>*Nom</label>
                        <input id ="registre_nom" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>*Primer Cognom</label>
                        <input id ="registre_primer_cognom" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>*Segon Cognom</label>
                        <input id ="registre_segon_cognom"type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="modal-footer">
                        <button data-dismiss="modal" type="submit" class="btn btn-outline-dark pull-right enviar" onclick="register()">Registrar</button>
                </div> 
                </div>
            </div>
        </div>
    </div>
</header>