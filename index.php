<?php

require_once __DIR__ . '/vendor/autoload.php';

use jokodm\Datamining\Klasifikasi\DecisionTree;

$DCtree = new DecisionTreeLeaf();

$tree = $DCtree->train();

echo $DCtree->__toString();
// $treeString = $tree->toString();

// // print generated tree
// echo '<pre>';
// print_r($treeString);
// echo '</pre>';