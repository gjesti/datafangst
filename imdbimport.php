<?php

include('IMDbapi.php');

$IMDBidFile="/tmp/__imdbid";
$IMDBid = file_get_contents($IMDBidFile);

$imdb = new IMDbapi('t6iMiFbPxzcIfXiLh1oUM5Vb0FtKzs');
$IMDBData = $imdb->get($IMDBid,'json');

$IMDBData = iconv('UTF-8', 'UTF-8//IGNORE', utf8_encode($IMDBData));
$Result = json_decode($IMDBData);


#var_dump($Result);
#echo "JSON Error: ".json_last_error()."\n";

echo "(\n";

echo ' "'.$Result->imdb_id.'",';
echo ' "'.$Result->budget.'",';
echo ' "'.$Result->country.'",';
echo ' "'.$Result->director.'",';
echo ' "'.$Result->genre.'",';
echo ' "'.$Result->language.'",';
echo ' "'.$Result->metascore.'",';
echo ' "'.$Result->title.'",';
echo ' "'.$Result->plot.'",';
echo ' "'.$Result->poster.'",';
echo ' "'.$Result->production.'",';
echo ' "'.$Result->rated.'",';
echo ' "'.$Result->rating.'",';
echo ' "'.$Result->released.'",';
echo ' "'.$Result->runtime.'",';
echo ' "'.$Result->actors.'",';
echo ' "'.$Result->votes.'",';
echo ' "'.$Result->writers.'",';
echo ' "'.$Result->year.'"\n';

echo "),\n";

/*
echo "ID        : ".$Result->imdb_id." ".strlen($Result->imdb_id)."\n";
echo "Budget    : ".$Result->budget." ".strlen($Result->budget)."\n";
echo "Country   : ".$Result->country." ".strlen($Result->country)."\n";
echo "Director  : ".$Result->director." ".strlen($Result->director)."\n";
echo "Genre     : ".$Result->genre." ".strlen($Result->genre)."\n";
echo "Language  : ".$Result->language." ".strlen($Result->language)."\n";
echo "Metascore : ".$Result->metascore." ".strlen($Result->metascore)."\n";
echo "Movie     : ".$Result->title." ".strlen($Result->title)."\n";
echo "Plot      : ".$Result->plot." ".strlen($Result->plot)."\n";
echo "Poster    : ".$Result->poster." ".strlen($Result->poster)."\n";
echo "Production: ".$Result->production." ".strlen($Result->production)."\n";
echo "Rated     : ".$Result->rated." ".strlen($Result->rated)."\n";
echo "Rating    : ".$Result->rating." ".strlen($Result->rating)."\n";
echo "Released  : ".$Result->released." ".strlen($Result->released)."\n";
echo "Runtime   : ".$Result->runtime." ".strlen($Result->runtime)."\n";
echo "Stars     : ".$Result->actors." ".strlen($Result->actors)."\n";
echo "Votes     : ".$Result->votes." ".strlen($Result->votes)."\n";
echo "Writers   : ".$Result->writers." ".strlen($Result->writers)."\n";
echo "Year      : ".$Result->year." ".strlen($Result->year)."\n";
*/
#echo "Error     : ".$Result->error_code."\n";
#echo "Message   : ".$Result->message."\n";
#echo "";


#echo "<<".$IMDBData.">>"
?>
