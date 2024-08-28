<?php
$estudiantes = array("");

for ($student=0; $student < 10 ; $student++) { 
    $nombre = readline("Ingrese el nombre del estudiante: ");
    $notas = array();

    for ($cantNotas=0; $cantNotas < 2 ; $cantNotas++) { 
        $nota = readline("Ingrese la calificación del parcial " . ($cantNotas + 1) . ": ");

        
        array_push($notas, $nota);
        // array_push($nota, readline("Ingrese la calificación del primer parcial: "));
        // array_push($nota, readline("Ingrese la calificación del segundo parcial: "));
    }
    for ($cantAsistencia=0; $cantAsistencia < 1; $cantAsistencia++) { 
        $asistencia = readline("Ingrese la asistencia en números entero (max: 40): ");
        $calAsistencia = ($asistencia / 40) * 100;
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