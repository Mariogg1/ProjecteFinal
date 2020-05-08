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
        function __construct() {
            self::$db_host = "labs.iam.cat";
            self::$db_user = "a18margongon_a18";
            self::$db_pass = "proyectofinal";
            self::$db_name = "a18margongon_proyecto";
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

        function inserirUsuari($usuari, $password, $email, $nom, $pCognom, $sCognom){
            $this->query = "INSERT INTO a18margongon_proyecto.usuaris (nomUsuari, passwordc, nom, primerCognom, segonCognom, email) VALUES ('$usuari', '$password', '$nom', '$pCognom', '$sCognom', '$email');";
            $this->execute_single_query(); 
        }

    }
?>
