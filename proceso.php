<?php
/*
  require 'menu.php';
 */
/*
  var_dump($_POST);


  echo $codigo=$_POST["codigo"];
  echo $mt2=$_POST["mt2"];
  echo $fecha=$_POST["fechaAvance"];
  echo $nombre=$_POST["nombre"];
  echo $correo=$_POST["correo"];
  echo $piso=$_POST["piso"];
  echo $comment=$_POST["comment"];
 */

$codigo = $_POST["codigo"];
$mt2 = $_POST["mt2"];
$fecha = $_POST["fechaAvance"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$piso = $_POST["piso"];
$comment = $_POST["comment"];
?>

<b><table border="0">
        <tbody>
            <tr>
                <td>Codigo:  </td>
                <td><?= $codigo; ?></td>
            </tr>
            <tr>
                <td>Metros Cuadrados: </td>
                <td><?= $mt2; ?></td>
            </tr>
            <tr>
                <td>Fecha ingresada: </td>
                <td><?= $fecha; ?></td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td><?= $nombre; ?></td>
            </tr>
            <tr>
                <td>Correo: </td>
                <td><?= $correo; ?></td>
            </tr>
            <tr>
                <td><?php if ($piso == 0) {
    ?>Nivel: </td>
                    <td>Subterraneo</td><?php
} else {
    ?><td>Nivel: </td><td><?=
    $piso;
}
?></td>
            </tr>
            <tr>
                <td>Comentario: </td>
                <td><?= $comment; ?></td>
            </tr>
        </tbody>
    </table>




</b>