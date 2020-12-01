<?php

@$db = new mysqli("localhost", "root", "", "mydb");

if ($db->connect_error) {
    die('Error de conexion (' . $db->connect_errno . ')' . $db->connect_error);
} else {

    if(isset($_POST['origen']) && isset($_POST['destino'])){

        $origen = $_POST['origen'];
        $destino = $_POST['destino'];
        $consulta = "SELECT * FROM `vuelos` WHERE origen = '$origen' AND destino = '$destino'";

       // $tabla = $db->query($consulta);

       // $numeroFilas = $tabla->num_rows;

        ?>

            <table class="table-bordered">
                <tr>
                    <th>Destino</th>
                    <th>Origen</th>
                </tr>

            </table>

<?php

    }else{
        echo 'No ingreso Datos';
    }

}

?>