<?php 
    $extension = $_POST["extension"];
    $texto = $_POST["text"];
    $archivo = fopen("/var/spool/asterisk/outgoing/dictado.call","a+");
    if ($archivo == false ) echo "Error al crear el archivo";
    else
    {
        fwrite($archivo, "Channel: SIP/".$extension.PHP_EOL);
        fwrite($archivo, "Application: Festival".PHP_EOL);
        fwrite($archivo, "Data: ".$texto.PHP_EOL);
        fclose($archivo);
    }
    header("Location: formulario.html", true,301);
    exit();
?>