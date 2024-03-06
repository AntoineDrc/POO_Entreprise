<?php

// Création de la classe Employe
class Employe {
    private string $nom;
    private string $prenom;
    private DateTime $dateEmbauche;
    private string $adresse;
    private string $ville;


    // Constructeur de la classe Employe
    public function __construct(string $nom, string $prenom, string $dateEmbauche) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = new DateTime($dateEmbauche);
        $this->adresse = $adresse;
        $this->ville = $ville;
    }

    // Création des getters / setters
    

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
}