<!-- Exercice 1 -->

<?php

// Vérification de lastname
if ( isset($_GET['lastname']) && $_GET['lastname'] !== ''){

    // vérification de firstname
    if(isset($_GET['firstname']) && $_GET['firstname'] !== ''){

         // Vérification de l'age //Exercice 2 
         if(isset($_GET['age']) && $_GET['age'] !== ''){
            
            echo 'lastname : ' . $_GET['lastname'];
            echo 'firstname : ' . $_GET['firstname'];
            echo 'age : ' . $_GET['age']; 
        }else{
            echo "The 'age' parameter is missing.";
    }
    }
}
?>

<!-- Exercice 3 -->

<?php

if ( isset($_GET['startDate']) && isset ($_GET['endDate'])){

            echo 'startDate : ' . $_GET['startDate'] . "<br>";
            echo 'endDate : ' . $_GET['endDate'];
        }else{
            echo "Some parameters is missing.";
        }

?>

<!-- Exercice 4 -->

<?php

if ( isset($_GET['language']) && isset ($_GET['server'])){

            echo 'language : ' . $_GET['language'] . "<br>";
            echo 'server : ' . $_GET['server'];
        }else{
            echo "Some parameters is missing.";
        }

?>

<!-- Exercice 5 -->

<?php

if ( isset($_GET['week'])){
     echo 'Week : ' . $_GET['week'];
} else {
        echo "The 'week' parameter is missing.";
    }
?>

<!-- Exercice 6 -->

<?php
if (isset($_GET['building']) && isset($_GET['room'])) {
    echo "Building: " . $_GET['building'] . "<br>";
    echo "Room: " . $_GET['room'];
} else {
    echo "Some parameters are missing.";
}
?>

