<?php

// echo ini_get("memory_limit")."\n";
ini_set("memory_limit", "512M");
// echo ini_get("memory_limit")."\n";

require_once('./vendor/autoload.php');

use PokeAPI\Client;

$client = new Client();

// Returns a PokeAPI\Pokemon\Species instance
$species = $client->species('ivysaur'); // or $client->species(1);

//print_r($species);

$name = $species->getName(); // 'bulbasaur'
$growthRate = $species->getGrowthRate(); // A proxy of PokeAPI\Pokemon\GrowthRate

$Growth_Indicator = $growthRate->getName(); // Here the real API call to the GrowthRate endpoint is made

echo $Growth_Indicator . "\n";
echo $name;
echo "\n" . "\n";

$abilities = $client->Ability('12');
$abilityName = $abilities->getName();
echo $abilityName;
