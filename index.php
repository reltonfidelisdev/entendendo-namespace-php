<?php
require_once 'classes/Produto.php';
require_once 'models/Produto.php';
use Classes\Produto as productClass;
use Models\Produto as productModels;

$productModels = new productModels();
$productClasses = new productClass();

$productModels->mostrarDetalhes();
echo '<br>';
$productClasses->mostrarDetalhes();