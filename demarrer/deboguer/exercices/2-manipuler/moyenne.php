<?php

$notes = [12, 15, 9, 18];
$total = 0;

foreach ($notes as $note) {
    $total = $note;
}

$moyenne = $total / count($notes);

echo "Moyenne : $moyenne\n";
