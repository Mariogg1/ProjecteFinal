<?php
	require "comarques_BDD.php";
	require "dades_BDD.php";
	$url="http://analisi.transparenciacatalunya.cat/resource/jj6z-iyrp.json?\$limit=7500000";

	$data=json_decode(file_get_contents($url));
	
	$tipus=$_POST['tipus'];
	
	class comarca{
		public $codi=0;
		public $nom="";
		public $casosConfirmatsHomes=0;
		public $casosConfirmatsDones=0;
		public $casosSospitososHomes=0;
		public $casosSospitososDones=0;
		public $casosConfirmatsTotals=0;
		public $casosSospitososTotals=0;
    }
        
    if($tipus==1)
		emplena_BDD($data);
	
	else
		actulitza_BDD($data);
	
	function emplena_BDD ($data){
		
		for($i=1;$i<=42;$i++)
			${comarca.$i}= new comarca;
			
		foreach($data as $key=>$fila){
			
			if($fila->comarcacodi==01)
				$cod=1;	
				
			elseif($fila->comarcacodi==02)
				$cod=2;
			
			elseif($fila->comarcacodi==03)
				$cod=3;
			
			elseif($fila->comarcacodi==04)
				$cod=4;
			
			elseif($fila->comarcacodi==05)
				$cod=5;
			
			elseif($fila->comarcacodi==06)
				$cod=6;
			
			elseif($fila->comarcacodi==07)
				$cod=7;
				
			elseif(strcmp((string)$fila->comarcacodi,"08")==0)
				$cod=8;
			
			elseif(strcmp((string)$fila->comarcacodi,"09")==0)
				$cod=9;
			
			elseif($fila->comarcacodi!=null)
				$cod=$fila->comarcacodi;
			
			else
				$cod=null;
			
			if($cod!=null){
				${comarca.$cod}->nom = $fila->comarcadescripcio;
				${comarca.$cod}->codi = $fila->comarcacodi;
				if($fila->sexecodi==1){
					if (strcmp($fila->resultatcoviddescripcio, 'Positiu')==0){
						${comarca.$cod}->casosConfirmatsDones+=$fila->numcasos;
						${comarca.$cod}->casosConfirmatsTotals+=$fila->numcasos;
					}
					else{
						${comarca.$cod}->casosSospitososDones+=$fila->numcasos;
						${comarca.$cod}->casosSospitososTotals+=$fila->numcasos;
					}
				}
				else{
					if (strcmp($fila->resultatcoviddescripcio, 'Positiu')==0){
						${comarca.$cod}->casosConfirmatsHomes+=$fila->numcasos;
						${comarca.$cod}->casosConfirmatsTotals+=$fila->numcasos;
					}
					else{
						${comarca.$cod}->casosSospitososHomes+=$fila->numcasos;
						${comarca.$cod}->casosSospitososTotals+=$fila->numcasos;
					}
				}
			}
		}
		$bdd = new ComarquesBDD();
		$bdd->deleteComarques();
		for($i=1;$i<=42;$i++){
			echo $i."\n";
			print_r(${comarca.$i});
			$bdd->insertComarca(${comarca.$i}); 
		}
	}
	
	function actulitza_BDD($data){			
		$fecha=date("Y-m-d",strtotime("- 1 days"));
		
		for($i=1;$i<=42;$i++)
			${comarca.$i}= new comarca;
			
		foreach($data as $key=>$fila){
			if (strcmp($fecha,substr($fila->data, 0,10))==0){
				if($fila->comarcacodi==01)
					$cod=1;	
					
				elseif($fila->comarcacodi==02)
					$cod=2;
				
				elseif($fila->comarcacodi==03)
					$cod=3;
				
				elseif($fila->comarcacodi==04)
					$cod=4;
				
				elseif($fila->comarcacodi==05)
					$cod=5;
				
				elseif($fila->comarcacodi==06)
					$cod=6;
				
				elseif($fila->comarcacodi==07)
					$cod=7;
					
				elseif(strcmp((string)$fila->comarcacodi,"08")==0)
					$cod=8;
				
				elseif(strcmp((string)$fila->comarcacodi,"09")==0)
					$cod=9;
				
				elseif($fila->comarcacodi!=null)
					$cod=$fila->comarcacodi;
				
				else
					$cod=null;
				
				if($cod!=null){
					${comarca.$cod}->nom = $fila->comarcadescripcio;
					${comarca.$cod}->codi = $fila->comarcacodi;
					if($fila->sexecodi==1){
						if (strcmp($fila->resultatcoviddescripcio, 'Positiu')==0){
							${comarca.$cod}->casosConfirmatsDones+=$fila->numcasos;
							${comarca.$cod}->casosConfirmatsTotals+=$fila->numcasos;
						}
						else{
							${comarca.$cod}->casosSospitososDones+=$fila->numcasos;
							${comarca.$cod}->casosSospitososTotals+=$fila->numcasos;
						}
					}
					else{
						if (strcmp($fila->resultatcoviddescripcio, 'Positiu')==0){
							${comarca.$cod}->casosConfirmatsHomes+=$fila->numcasos;
							${comarca.$cod}->casosConfirmatsTotals+=$fila->numcasos;
						}
						else{
							${comarca.$cod}->casosSospitososHomes+=$fila->numcasos;
							${comarca.$cod}->casosSospitososTotals+=$fila->numcasos;
						}
					}
				}
			}
		}
		$bdd = new ComarquesBDD($db_host, $db_user, $db_pass, $db_name);
		for($i=1;$i<=42;$i++){
			if(${comarca.$i}->codi!=0){
				echo $i."\n";
				print_r(${comarca.$i});
				$bdd->updateComarca(${comarca.$i});
			}
		}
	}
?>
