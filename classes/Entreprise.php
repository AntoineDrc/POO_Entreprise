<?php

// Création de la classe Entreprise
class Entreprise
{
    private string $raisonSociale;
    private string $adresse;
    private string $cp;
    private string $ville;
    private DateTime $dateCreation;

    // Constructeur de la classe Entreprise
    public function __construct(string $raisonSociale, string $adresse, string $cp, string $ville, string $dateCreation)
    {
        $this->raisonSociale = $raisonSociale;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->dateCreation = new DateTime($dateCreation);
    }

    // Création des getters / setters
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

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

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;

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

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }
}
