<?php

Class Admin{
    public $login="";

    public function affiche(){
        echo"<h2>Admin : </h2>".$this->login;
    }
    
    public function __construct($login){
        $this->login=$login;
    } 

}

Class Atelier{
    public $id;
    public $nom="";
    public $description="";
    public $xcoord=0.0;
    public $ycoord=0.0;
    public $img;

    public function __construct($nom,$description,$xcoord,$ycoord,$img){
        $this->nom=$nom;
        $this->description=$description;
        $this->xcoord=$xcoord;
        $this->ycoord=$ycoord;
        $this->img=$img;
    }

    public function afficheatelier(){
        echo"<h2>Atelier : ".$this->nom."</h2>description".$this->description;
    }
}

Class Commerce extends Atelier{
    public $type="";
    public $ouverture="";
    public $fermeture="";

    public function __construct($type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img){
        parent::__construct($nom,$description,$xcoord,$ycoord,$img);
        $this->type=$type;
        $this->ouverture=$ouverture;
        $this->fermeture=$fermeture;
    }
}

Class Boutique extends Commerce{
    public $telboutique="";

    public function __construct($nom,$type,$xcoord,$ycoord,$description,$img,$ouverture,$fermeture,$telboutique){
        parent::__construct($type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img);
        $this->telboutique=$telboutique;
    }

    public function affiche_boutique(){
        echo"<h3>".$this->nom."</h3><ul><li>Description : ".$this->description."</li><li>Type : ".$this->type."</li><li>Horaire d'ouverture : ".$this->ouverture."</li><li>Horaire de fermeture : ".$this->fermeture."</li><li>Téléphone de la Boutique : ".$this->telboutique."</li></ul>";
    }
}

Class Stand extends Commerce{
    public $emplacement="";

    public function __construct($nom,$type,$xcoord,$ycoord,$description,$img,$ouverture,$fermeture,$emplacement){
        parent::__construct($type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img);
        $this->emplacement=$emplacement;
    }

    public function affiche_stand(){
        echo"<h3>".$this->nom."</h3><ul><li>Description : ".$this->description."</li><li>Type : ".$this->type."</li><li>Horaire d'ouverture : ".$this->ouverture."</li><li>Horaire de fermeture : ".$this->fermeture."</li><li>Type d'emplacement du stand : ".$this->emplacement."</li></ul>";
    }
}

Class Evenement extends Atelier{
    public $debutevent="";
    public $duree="";
    public $nbplace="";
    public $id;

    public function __construct($nom,$description,$xcoord,$ycoord,$img,$duree,$debutevent,$nbplace,$id){
        parent::__construct($nom,$description,$xcoord,$ycoord,$img);
        $this->debutevent=$debutevent;
        $this->duree=$duree;
        $this->nbplace=$nbplace;
        $this->id=$id;
    }

    public function affiche_event($object){
        echo"<h3>".$this->nom.": </h3><ul><li>Description : ".$this->description."</li><li>Début : ".$this->duree."</li><li>Durée : ".$this->debutevent."</li></ul>";
        if ($this->nbplace>0){
            echo "<a href='inscription.php?id=".$this->id."'><button>S'incrire</button></a><a> Place restante : ".$this->nbplace-$object."</a>";
        }
        else{
            echo "Il n'y a pas besoin de s'inscrire pour assister à cet événement. (Il ce peut aussi qu'il n'y est plus de place pour cette événement)";
        }
    }

    public function creeparticipants($nomparticipant,$prenomparticipant,$emailparticipant,$telparticipant){
        $participant= new Participant($nomparticipant,$prenomparticipant,$emailparticipant,$telparticipant);
    }

    public function affiche(){

    }

}


Class Participant{
    public $id_participant;
    public $nomparticipant="";
    public $prenomparticipant="";
    public $emailparticipant="";
    public $telparticipant="";

    public function __construct($nomparticipant,$prenomparticipant,$emailparticipant,$telparticipant,$nbplace){
        $this->nomparticipant=$nomparticipant;
        $this->prenomparticipant=$prenomparticipant;
        $this->emailparticipant=$emailparticipant;
        $this->telparticipant=$telparticipant;
        
    }

    public function affiche_event(){
        echo"<h2>Participant : </h2><ul><li>Nom : ".$this->nomparticipant."</li><li>Prénom : ".$this->prenomparticipant."</li><li>E-mail: ".$this->emailparticipant."</li><li>N° de téléphone : ".$this->telparticipant."</li>";
    }

}

?>

