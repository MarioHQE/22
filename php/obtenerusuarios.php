<?php
$result = $conexion->query("SELECT * FROM restaurante.empleado");
if ($result) {
    while ($row = $result->fetch_array()) {
        echo "<tr class='trempleado' data-empleado=" . $row['id_empleado']. " data-id=" . $row['id_empleado']. " id='idempleado'>";
        echo "<td>" . $row['id_empleado'] . "</td>";
        echo "<td>" . $row['nombre_usuario'] . "</td>";
        echo "<td>" . $row['apellido'] . "</td>";
        echo "<td>" . $row['correo'] . "</td>";
        echo "<td>" . $row['contrasena'] . "</td>";
        echo " 
        <td>
        <a onclick='return eliminara()' href='?id_empleado=" . intval($row['id_empleado']) . "' class='btn btn-danger'> <i class='bi bi-trash'></i> Eliminar</a>
        <button class='btn btn-warning btn-edit' data-id='" . intval($row['id_empleado']) . "' data-nombre='" . $row['nombre_usuario'] . "' data-apellido='" . $row['apellido'] . "' data-correo='" . $row['correo'] . "' data-contrasena='" . $row['contrasena'] . "' data-bs-toggle='modal' data-bs-target='#formactu'><i class='bi bi-pencil'></i> Actualizar</button>
        </td>";
        echo "</tr>";
    }
}
