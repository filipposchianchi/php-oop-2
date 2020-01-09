<!-- GOAL: 
- Definire la classe Persona caratterizzata da nome e cognome
- Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
- Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
- Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
- Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi -->


<?php

class Persona {

    public $nome;
    public $cognome;

    function __construct($nome, $cognome) {
        $this -> nome = $nome;
        $this -> cognome = $cognome;
    }

    function __toString(){
        return $this -> nome . " " . $this -> cognome;
    }
}

class Ospite extends Persona{
    
    public $annoDiNascita;

    function __construct($nome, $cognome, $annoDiNascita) {    
        
        parent::__construct($nome, $cognome);    
        $this -> annoDiNascita = $annoDiNascita;
    }

    function __toString(){
        return $this -> nome . " " . $this -> cognome . " " . $this -> annoDiNascita;
    }

}

class Pagante extends Ospite {
    
    public $indirizzo;

    function __construct($nome, $cognome, $annoDiNascita, $indirizzo) {    
        
        parent::__construct($nome, $cognome, $annoDiNascita);    
        $this -> indirizzo = $indirizzo;
    }

    function __toString(){
        return $this -> nome . " " . $this -> cognome . " " . $this -> annoDiNascita .
                " " . $this -> indirizzo;
    }

}






$persona = new Persona("Filippo", "Schianchi");

echo $persona . "<br>";

$ospite = new Ospite("Luca", "Rossi", "1994");

echo $ospite . "<br>";

$pagante = new Pagante("Paolo", "Ferrari", "1994", "Viale Duca");

echo $pagante;






?>