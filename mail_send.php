<?php

if (isset($_POST['voornaam']) && isset($_POST['provincie'])&& isset($_POST['onderwerp'])) {

$msg = strip_tags($_POST['voornaam']) . "uit ".strip_tags($_POST['provincie'])." schreef het volgende ".strip_tags($_POST['onderwerp']);

mail("jordibens1999@gmail.com",strip_tags($_POST['onderwerp']),$msg);
}

header('location: index.html')
?>