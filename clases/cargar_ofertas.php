<?php



@$db = new mysqli("localhost", "root", "", "mydb");

if ($db->connect_error) {
    die('Error de conexion (' . $db->connect_errno . ')' . $db->connect_error);
} else {

    $consulta = "SELECT * FROM `ofertas`";
    $tabla = $db->query($consulta);

    $numeroFilas = $tabla->num_rows;
?>

    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <?php
        for ($e = 1; $e < $numeroFilas; $e++) {

            echo "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$e\"></li>";
        }



        ?>
    </ol>

    <div class="carousel-inner">

        <?php
        for ($i = 0; $i < $numeroFilas; $i++) {
            $oferta = $tabla->fetch_object();
                 

            if ($i === 0) {
                echo "<div class=\"carousel-item active\">
                <div style=\"max-height: 250px;\">
                <img class=\"d-block w-100\"  style=\"max-height: 250px;\"  src=\"./IMG/background.jpg\" >
                <p class=\"ofertas\">$oferta->nombre</p>
               
                
                </div>
                    </div>";
            } else {
                echo "<div class=\"carousel-item\">
                <div style=\"max-height: 250px;\">
                <img class=\"d-block w-100\"  style=\"max-height: 250px;\"  src=\"./IMG/background.jpg\" >
                <p class=\"ofertas\">$oferta->nombre</p>
                </div>
                    </div>";
            }
          
        }
        ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
<?php
}


?>