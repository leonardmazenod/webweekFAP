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

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/icon.png">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="class">

        <?php

        Class Boutique extends Commerce{
            public $telboutique="";

            public function __construct($nom,$type,$xcoord,$ycoord,$description,$img,$ouverture,$fermeture,$telboutique){
                parent::__construct($type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img);
                $this->telboutique=$telboutique;
            }

            public function affiche_boutique(){
                echo"
                <div class='flexarticle'>
                    <div class='boiteimage'>
                        <img alt='image de la boutique ".$this->nom."' src='ajout/ajouter/".$this->img."'>
                    </div>
                    <div class='articletexte'>
                        <ul>
                            <li><h3>".$this->nom."</h3></li>
                            <li>".$this->description."</li>
                            <li>Type : ".$this->type."</li>
                            <li>Horaire d'ouverture : ".$this->ouverture."</li>
                            <li>Horaire de fermeture : ".$this->fermeture."</li>
                            <li>Téléphone de la Boutique : ".$this->telboutique."</li>
                        </ul>
                    </div>
                </div>";
            }
        }

        Class Stand extends Commerce{
            public $emplacement="";

            public function __construct($nom,$type,$xcoord,$ycoord,$description,$img,$ouverture,$fermeture,$emplacement){
                parent::__construct($type,$ouverture,$fermeture,$nom,$description,$xcoord,$ycoord,$img);
                $this->emplacement=$emplacement;
            }

            public function affiche_stand(){
                echo"
                <div class='flexarticle'>
                    <div class='boiteimage'>
                        <img alt='image de la boutique ".$this->nom."' src='ajout/ajouter/".$this->img."'>
                    </div>
                    <div class='articletexte'>
                        <ul>
                            <li><h3>".$this->nom."</h3></li>
                            <li>".$this->description."</li>
                            <li>Horaire d'ouverture : ".$this->ouverture."</li>
                            <li>Horaire de fermeture : ".$this->fermeture."</li>
                            <li>Type d'emplacement du stand : ".$this->emplacement."</li>
                        </ul>
                    </div>
                </div>";
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
                echo"
                <div class='flexarticle'>
                    <div class='boiteimage'>
                        <img alt='image de la boutique ".$this->nom."' src='ajout/ajouter/".$this->img."'>
                    </div>
                    <div class='articletexte'>
                    <ul>
                        <li><h3>".$this->nom."</h3></li>
                        <li>".$this->description."</li>
                        <li>Début : ".$this->duree."  Durée : ".$this->debutevent."</li>
                    </ul> 
                ";
                if ($this->nbplace>0){
                    echo "<br><a href='inscription.php?id=".$this->id."'><button>S'insrire</button></a><br><a> Total de places : ".$this->nbplace."</a><br><a>Nombre de participants inscrit : ".$object."</a></div>
                    </div>";
                }
                else{
                    echo "<br><a>Il n'y a pas besoin de s'inscrire pour assister à cet événement. (Il ce peut aussi qu'il n'y est plus de place pour cette événement)</a></div>
                    </div>";
                }
            }

            public function creeparticipants($nomparticipant,$prenomparticipant,$emailparticipant,$telparticipant){
                $participant= new Participant($nomparticipant,$prenomparticipant,$emailparticipant,$telparticipant);
                $participant->affiche_participant();
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

            public function affiche_participant(){
                echo"<h3>".$this->nomparticipant." ".$this->prenomparticipant."</h3><ul><li>E-mail: ".$this->emailparticipant."</li><li>N° de téléphone : ".$this->telparticipant."</li></ul>";
            }

        }

        ?>
    </div>
</body>

