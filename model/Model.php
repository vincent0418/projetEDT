<?php
require_once(File::build_path(array("config", "Conf.php")));

class Model {
	public static $pdo;
	
	public static function Init() {
		$hostname = Conf::getHostname();
		$database_name = Conf::getDatabase();
		$login = Conf::getLogin();
		$password = Conf::getPassword();
		try{
			// Connexion à la base de données
  			self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password,
  								array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  			// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		  if (Conf::getDebug()) {
		    echo $e->getMessage(); // affiche un message d'erreur
		  } else {
		    echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
		  }
		  die();
		}
	}
	
	public function save() {
        $table_name = static::$object;
		$class_name = 'Model' . $table_name;
        $champs = "";
        foreach ($this as $cle => $valeur){
            $champs = $champs .':'.$cle.',';
        }
        try{
            $sql = "INSERT INTO sch_$table_name VALUES (".rtrim($champs, ',').")";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            foreach ($this as $cle => $valeur){
                $values[$cle] = $valeur;
        }
        // On donne les valeurs et on exécute la requête   
        $req_prep->execute($values);
        } catch(PDOException $e) {
            if (Conf::getDebug())
                echo $e->getMessage(); // affiche un message d'erreur
            else
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            die();
		}
    }
	
	public static function select($primary_value) {
        $table_name = static::$object;
		$class_name = 'Model' . ucfirst($table_name);
        $primary_key = static::$primary;
        
        try{
            $sql = "SELECT * 
                    FROM sch_$table_name
                    WHERE $primary_key = :primary";
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
              "primary" => $primary_value,
            );  
            $req_prep->execute($values);
            $req_prep->setFetchMode(PDO::FETCH_CLASS, $class_name);
            $tab = $req_prep->fetchAll();
        } catch(PDOException $e) {
            if (Conf::getDebug())
                echo $e->getMessage(); // affiche un message d'erreur
            else
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            die();
		}
        //Si il n'y a pas de résultats, on renvoie false
        if (empty($tab))
            return false;
        return $tab[0];
    }
    
    public static function selectAll() {
		$table_name = static::$object;
		$class_name = 'Model' . ucfirst($table_name);
		try{
			$rep = Model::$pdo->query("SELECT * FROM sch_$table_name");
			$rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
			$tab = $rep->fetchAll();
		} catch(PDOException $e) {
			if (Conf::getDebug())
				echo $e->getMessage(); // affiche un message d'erreur
			else
				echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
			die();
		}
		return $tab;
    }
	
	public static function delete($primary_value) {
        $table_name = static::$object;
		$class_name = 'Model' . ucfirst($table_name);
        $primary_key = static::$primary;
        try {
            $sql = "DELETE FROM sch_$table_name
                    WHERE $primary_key = :primary";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                'primary' => $primary_value,
            );
            // On donne les valeurs et on exécute la requête
            $req_prep->execute($values);
        } catch(PDOException $e) {
			if (Conf::getDebug())
				echo $e->getMessage(); // affiche un message d'erreur
			else
				echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
			die();
		}
    }
}
Model::Init();
?>
