<?php
$estudiantes = array("");

for ($student=0; $student < 10 ; $student++) { 
    $nombre = readline("Ingrese el nombre del estudiante: ");
    $notas = array();

    for ($cantNotas=0; $cantNotas < 2 ; $cantNotas++) { 
        $nota = readline("Ingrese la calificación del parcial " . ($cantNotas + 1) . ": ");
        
        array_push($notas, $nota);
    }

    $DNI = readline("Ingrese el DNI del alumno:");

    $nota1 = $notas[0];
    $nota2 = $notas[1];
    print_r("$nota1 \n");
    print_r("$nota2 \n");
    
    
    for ($cantAsistencia=0; $cantAsistencia < 1; $cantAsistencia++) { 
        $asistencia = readline("Ingrese la asistencia en números entero (max: 40): ");
        $calAsistencia = ($asistencia / 40) * 100;
    }

    if((($nota1 >= 8) && ($nota2 >= 8)) && ($calAsistencia >= 80)){
        print_r("Alumno regular: $DNI \n");
    }elseif ((($nota1 > 8) && ($nota2 > 8)) && ($calAsistencia < 80)) {
        print_r("Debe realizar clases de apoyo: $DNI \n");
    }elseif ((($nota1 < 8) || ($nota2 < 8)) && ($calAsistencia >= 80)) {
        print_r("Debe recuperar un parcial: $DNI \n");
    }else{
        print_r("Alumno libre: $DNI \n");
    }
    
    $estudiante = array(
        "nombre" => $nombre,
        "notas" => $notas,
        "asistencia %" => $calAsistencia
    );
    

    array_push($estudiantes, $estudiante);
    print_r($estudiantes);
}

?>