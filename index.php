<?php
$player1 = Bobby;

$player2 = Bybbo;

$player1Life = 100;

$player2Life = 100;


?>

<?php
echo('/////////////////////////////////////'."\n");
echo('  C\'est l\'heure du dueeeeeeeeel !'."\n");
echo('/////////////////////////////////////'."\n");
echo("\n");

while ($player1Life > 0 and $player2Life > 0) {
    $puissanceAttaque1 = floor(rand(0,50));
    $puissanceAttaque2 = floor(rand(0,50));

    
    echo "\n" .$player1." ".$player1Life." - ".$player2." ".$player2Life."\n";

    echo 'Bobby attaque et enlève ' .$puissanceAttaque1.' points de vie'."\n";
    $player2Life = $player2Life - $puissanceAttaque1;

    echo 'Bybbo attaque et enlève ' .$puissanceAttaque2. ' points de vie';
    $player1Life = $player1Life - $puissanceAttaque2;

    echo "\n";
    
}

echo "\n" .'/////////////////////////////////////'."\n";

if ($player1Life >= 0) {
    echo $player1 .' a gangé' ;
}

else {
    echo $player2 .' a gagné' ;
}


?>

