<?php
	class ComarquesBDD {
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
                echo "Mal ".$this->conn->error."\n";
            }
            $this->close_connection();
        }

        private function get_results() {
            $this->open_connection();
            $result = $this->conn->query($this->query);

            for($i = 0; $i < $result->num_rows; $i++) {
                $this->rows[$i] = $result->fetch_assoc();
            }

            $result->close();
            $this->close_connection();
        }
        
        function insertComarca($comarca) {
				$codi=$comarca->codi;
				$nom=$comarca->nom;
				$casosConfirmatsHomes=$comarca->casosConfirmatsHomes;
				$casosConfirmatsDones=$comarca->casosConfirmatsDones;
				$casosSospitososHomes=$comarca->casosSospitososHomes;
				$casosSospitososDones=$comarca->casosSospitososDones;
				$casosConfirmatsTotals=$comarca->casosConfirmatsTotals;
				$casosSospitososTotals=$comarca->casosSospitososTotals;
				if(strpos($nom, "'")){
					$nom=str_replace("'", "\'", $nom);
				}
				
                $this->query = "INSERT INTO a18nacmunana_comarques.COMARCA VALUES ($codi, '$nom', $casosConfirmatsHomes, $casosConfirmatsDones, $casosSospitososHomes, $casosSospitososDones, $casosConfirmatsTotals, $casosSospitososTotals);";
                $this->execute_single_query(); 
            }
            
        function updateComarca($comarca) {
				$codi=$comarca->codi;
				$nom=$comarca->nom;
				$casosConfirmatsHomes=$comarca->casosConfirmatsHomes;
				$casosConfirmatsDones=$comarca->casosConfirmatsDones;
				$casosSospitososHomes=$comarca->casosSospitososHomes;
				$casosSospitososDones=$comarca->casosSospitososDones;
				$casosConfirmatsTotals=$comarca->casosConfirmatsTotals;
				$casosSospitososTotals=$comarca->casosSospitososTotals;
				
				if(strpos($nom, "'")){
					$nom=str_replace("'", "\'", $nom);
				}
				
				$this->query = "update COMARCA set casosConfirmatsHomes=casosConfirmatsHomes+$casosConfirmatsHomes, casosConfirmatsDones=$casosConfirmatsDones, casosSospitososHomes=$casosSospitososHomes, casosSospitososDones=$casosSospitososDones, casosSospitososTotals=$casosSospitososTotals, casosConfirmatsTotals=$casosConfirmatsTotals where id=$codi;";
				$this->execute_single_query(); 
		}
		
		function deleteComarques() {
				$this->query = "delete from COMARCA;";
				$this->execute_single_query(); 
        }
        
        function getInfoComarques(){
            $this->query = "SELECT * FROM COMARCA;";
            $this->get_results();
            return $this->rows;
        }
	}
	
?>
