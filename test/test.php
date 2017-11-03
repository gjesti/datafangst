<?php
include('IMDbapi.php');
$imdb = new IMDbapi('t6iMiFbPxzcIfXiLh1oUM5Vb0FtKzs');
$data = $imdb->get('tt4726636','json');

print $data;
print "";
?>
