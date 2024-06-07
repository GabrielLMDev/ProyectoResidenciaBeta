<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'assets/php/database-mensajes.php';
    $query = "SELECT * FROM historia WHERE n_control = 186010076";
    $result = $conn->query($query);
    if ($result = $mysqli->query($query)) {
        $calificaciones = [];
        while ($row = $result->fetch_assoc()) {
            $numero_control = $row["n_control"];
            $semestre = $row["semestre"];
            $materia = $row["materia"];
            $calificacion_parcial = $row["calificacion"];
            $tipo = $row["parcial"];

            // Almacena la calificación en el arreglo por materia, semestre y parcial
            $calificaciones[$materia][$semestre][$tipo] = $calificacion_parcial;
        }

        // Muestra las calificaciones por materia, semestre y parcial
        foreach ($calificaciones as $materia => $semestres) {
            echo "<td>N_control: " . $numero_control . "</td>";
            echo "Materia: " . $materia . "<br>";
            foreach ($semestres as $semestre => $parciales) {
                echo "Semestre: " . $semestre . "<br>";
                foreach ($parciales as $tipo => $calificacion) {
                    echo "Parcial " . $tipo . ": " . $calificacion . "<br>";
                }
                echo "<br>";
            }
            echo "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }


    ?>
</body>
<?php foreach ($calificaciones as $materia => $semestres) : ?>
                                            <tr>
                                                <td><?php echo $numero_control; ?></td>
                                                <td><?php echo $materia; ?></td>
                                                <?php
                                                foreach ($semestres as $semestre => $parciales) {
                                                ?>
                                                    <td><?php echo $semestre; ?></td>
                                                    <?php
                                                    $suma = 0;
                                                    foreach ($parciales as $parcial => $calificacion) {
                                                        $suma += $calificacion;
                                                    ?>
                                                        <td><?php echo $calificacion; ?></td>
                                                    <?php
                                                    }
                                                    ?>
                                                <?php
                                                }
                                                ?>
                                                <td style="color: black; font-weight: bold;"><?php echo $resultado = number_format($suma / 3, 1);; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
</html>