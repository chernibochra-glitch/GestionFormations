<?php
require_once 'Models/Inscription.php';
require_once 'Models/Formation.php';


// Protection : accessible uniquement après paiement validé
if (!isset($_SESSION['paiement_ok']) || $_SESSION['paiement_ok'] !== true) {
    header('Location: index.php');
    exit();
}

$inscription_id = $_SESSION['inscription_id'] ?? 0;
$inscription = Inscription::getById($inscription_id);
$formation = $inscription ? Formation::getById($inscription['formation_id']) : null;

require 'views/cours.php';
