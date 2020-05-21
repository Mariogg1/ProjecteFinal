<?php
	class BDD {
        static private $db_host;
        static private $db_user;
        static private $db_pass;
        static private $db_name;

        protected $query;
        public $rows = array();

        private $conn;

        // Proporciona configuración de MySQL
        function __construct($db_host, $db_user, $db_pass, $db_name) {
            self::$db_host = $db_host;
            self::$db_user = $db_user;
            self::$db_pass = $db_pass;
            self::$db_name = $db_name;
        }

        private function open_connection() {
            $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);

            if($this->conn->connect_error) {
                die("La conexión con la BD ha fallado. <br>Error: ".$this->conn->connect_error);
            }

            mysqli_set_charset($this->conn,'utf8'); 
        }

        private function close_connection() {
            $this->conn->close();
        }

        private function execute_single_query() {
            $this->open_connection();
            if($this->conn->query($this->query)) {
                echo "Bien";
            } else {
                echo "Mal";
            }
            $this->close_connection();
        }

        function inserirUsuari($usuari, $password, $email, $nom, $primer_cognom, $segon_cognom){
            $this->query = "INSERT INTO a18margongon_proyecto.usuaris (nomUsuari, passwordc, nom, primerCognom, segonCognom, email) VALUES ('$usuari', '$password', '$nom', '$primer_cognom', '$segon_cognom', '$email');";
            $this->execute_single_query(); 
        }

        function inserirComentari($comentari){
            $this->query = "INSERT INTO a18margongon_proyecto.comentaris (comentari) VALUES ('$comentari');";
            $this->execute_single_query();
        }

        function comprovaLogin($usuari, $password){
            $this->query="SELECT * FROM a18margongon_proyecto.usuaris WHERE nomUsuari='$usuari' AND passwordc='$password';";
            $this->open_connection();
            $result = $this->conn->query($this->query);
            if($result->num_rows > 0) {
                $this->close_connection();
                session_start(); 
                $_SESSION['user'] = $usuari;
                return "Ok";
            } else {
                $this->close_connection();
                return "Error";
            }
        }

    }
?>
