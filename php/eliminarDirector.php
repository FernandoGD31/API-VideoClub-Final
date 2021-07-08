<?php

if (isset($_POST['eliminar'])) {



    if ($_POST['id']) {

        $director_id  = $_POST['id'];

        $url = "http://31.220.62.39/API/VIDEOCLUB/public/EliminarDirector/{$director_id}";

        $json = file_get_contents($url);


       
        header("location: ../eliminarDirector.php");
    } else {
        echo '<script type="text/javascript">
        alert("faltan datos");
        window.location.href="eliminarDirector.php";
    </script>';
    }
}
