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

    public function __construct($telboutique,$type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img){
        parent::__construct($type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img);
        $this->telboutique=$telboutique;
    }

    public function affiche_boutique(){
        echo"<h2>Boutique : </h2><ul><li>Nom : ".$this->nom."</li><li>Description : ".$this->description."</li><li>Type : ".$this->type."</li><li>Horaire d'ouverture : ".$this->ouverture."</li><li>Horaire de fermeture : ".$this->fermeture."</li><li>Téléphone de la Boutique : ".$this->telboutique."</li></ul>";
    }
}

Class Stand extends Commerce{
    public $emplacement="";

    public function __construct($emplacement,$type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img){
        parent::__construct($type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img);
        $this->emplacement=$emplacement;
    }

    public function affiche_stand(){
        echo"<h2>Stand : </h2><ul><li>Nom : ".$this->nom."</li><li>Description : ".$this->description."</li><li>Type : ".$this->type."</li><li>Horaire d'ouverture : ".$this->ouverture."</li><li>Horaire de fermeture : ".$this->fermeture."</li><li>Type d'emplacement du stand : ".$this->emplacement."</li></ul>";
    }
}

Class Evenement extends Atelier{
    public $debutevent="";
    public $duree="";
    public $jour="";

    public function __construct($debutevent,$duree,$jour,$nom,$description,$xcoord,$ycoord,$img){
        parent::__construct($nom,$description,$xcoord,$ycoord,$img);
        $this->debutevent=$debutevent;
        $this->duree=$duree;
        $this->jour=$jour;
    }

    public function affiche_event(){
        echo"<h2>Stand : </h2><ul><li>Nom : ".$this->nom."</li><li>Description : ".$this->description."</li><li>Jour de l'événement : ".$this->jour."</li><li>Début : ".$this->debutevent."</li><li>Durée : ".$this->duree."</li></ul>";
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

    public function __construct($nomparticipant,$prenomparticipant,$emailparticipant,$telparticipant){
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

