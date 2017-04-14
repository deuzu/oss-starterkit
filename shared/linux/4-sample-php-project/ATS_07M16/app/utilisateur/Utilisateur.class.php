<?php

/**
 * Description of Membre
 * So much wow
 *
 * @author <jean-maurice@skill.com>
 */
class Utilisateur{
    
    private $nom;
    private $role;
    private $username;
    private $password;
            
    function __construct($nom, $role, $username, $password) {
        $this->nom = $nom;
        $this->role = $role;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function getNom() {
        return $this->nom;
    }

    public function getRole() {
        return $this->role;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}
