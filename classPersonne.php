<?php

//création d'une personnage(Objet)
class Personnage{
    public $vie = 80;
    public $atk = 20;
    public $nom;
   //créer une méthode
   public function crier(){
       echo 'LEEROY JENKINS';
   }

   public function regenerer($vie=null){
       if(is_null($vie)){//si la méthode regener contient null entre() afficher ici en bas
           echo $vie=100; //afficher
       }else{ //sinon afficher ici en bas
           echo $vie+=$vie;
       }
       
   }

   public function mortOuVivant(){
      //this fait référence à l'objet , c'est à dire classe personnage qui englobe toutes ces fonctions
       
      if($this->vie <= 0){
      
           echo 'il est mort';

       } else{
           echo 'il est vivant';
       }
   }
   

public function attaque($cible){
    //$this attaquant
   // $cible defenseur
   $cible->vie-=$this->atk;
  // $cible->vie=20;
 

}
}
?>