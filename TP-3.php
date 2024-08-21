<?php
$user = [];
for ($student=0; $student < 10 ; $student++) { 
    $newUser = readline("Ingrese el nombre del estudiante: ");

    $user = [...$user, $newUser];
    // $newArray = array_pad($user, 10, "usuario nuevo");
    echo "Estudiantes: $user \n";
}

?>