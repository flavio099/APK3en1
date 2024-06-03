<?php
require_once 'footballTeam.php';
 
$real = new footBallTeam("real","anceloti","flavio umberto",20-4-1956,22);

$real -> getNameTeam();

$paris = new footBallTeam("paris","thomas tuchel","darcia",20-4-1965,22);

$paris -> getNameTeam();

echo "{$real -> getNameTeam()} {$paris -> getNameTeam()}" ;




?>
