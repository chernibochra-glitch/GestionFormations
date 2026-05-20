<?php
require_once 'Models/Formation.php';

$formations = Formation::getAll();
$niveau = $_GET['niveau'] ?? '';

if (!empty($niveau)) {
    $formations = Formation::getByNiveau($niveau);
}

require 'views/Formationsviews.php';
