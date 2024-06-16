<?php


$result = $conexion->query("SELECT * FROM restaurante.plato");

if ($result) {

    while ($row = $result->fetch_array()) {
        echo "<tr class='trplato' data-plato=" . $row['id_plato'] . " data-id=" . $row['id_plato'] . " id='idplato'>";
        echo "<td>" . $row['id_plato'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['imagen'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo " 
        <td>
        <a onclick='return eliminara()' href='?id_plato=" . intval($row['id_plato']) . "' class='btn btn-danger'><i class='bi bi-trash'></i> Eliminar</a>
        <button class='btn btn-warning text-white btn-edit' data-id='" . intval($row['id_plato']) . "' data-nombre='" . $row['nombre'] . "' data-imagen='" . $row['imagen'] . "' data-descripcion='" . $row['descripcion'] . "' data-precio='" . $row['precio'] . "' data-bs-toggle='modal' data-bs-target='#formactu'><i class='bi bi-pencil'></i> Actualizar</button>
        </td>";
        echo "</tr>";

    }





}






