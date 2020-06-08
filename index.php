<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 2 exercice 4</title>
</head>
<body>
    <p>
        <?php
            $magnitude = 9;
            if ($magnitude == 1){
                echo 'Micro-séisme impossible à ressentir.';
            }else if ($magnitude == 2){
                echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
            }else if ($magnitude == 3){
                echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
            }else if ($magnitude == 4){
                echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
            }else if ($magnitude == 5){
                echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
            }else if ($magnitude == 6){
                echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
            }else if ($magnitude == 7){
                echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
            }else if ($magnitude == 8){
                echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
            }else if ($magnitude == 9){
                echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
            }

        ?>
    </p>
</body>
</html>