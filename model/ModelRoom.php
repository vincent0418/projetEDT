<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelRoom extends Model{
    
	protected static $object = "Room";
	protected static $primary = "idRoom";
    protected $idRoom;
        
    // Constructeur
    public function __construct($i = NULL) {
      if (!is_null($i)) {
        $this->idRoom = $i;
      }
    }

    // Getter générique
    public function get($nom_attribut) {
        if (property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }

    // Setter générique
    public function set($nom_attribut, $valeur) {
        if (property_exists($this, $nom_attribut))
            $this->$nom_attribut = $valeur;
        return false;
    }
}
?>
