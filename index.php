<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.


include 'classes/StrUtils.php';

$myStr = new StrUtils('php is awesome !');
$myStr->bold();
echo $myStr->getStr();
$myStr->italic();
echo $myStr->getStr();
$myStr->underline();
echo $myStr->getStr();
$myStr->capitalize();
echo $myStr->getStr();
$myStr->uglify();
echo $myStr->getStr();