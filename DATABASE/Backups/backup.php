<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'socialdb';

// Ruta donde se guardará el respaldo
$ruta_archivo = 'C:\Users\User\Documents\GitHub\Red-social\DATABASE\Backups\backup_total_' . date('Y-m-d_H-i-s') . '.sql';

// Ruta al ejecutable mysqldump dentro de XAMPP
$mysqldump_path = 'C:\xampp\mysql\bin\mysqldump.exe';

// Comando para exportar toda la base de datos
$comando = "\"$mysqldump_path\" --user=$user --password=$pass --host=$host $db > \"$ruta_archivo\"";

// Ejecutar el comando en el sistema de Windows
exec($comando, $output, $result_code);

// Verificar si funcionó
if ($result_code === 0) {
    echo "¡Éxito! Toda la base de datos ha sido descargada en: " . $ruta_archivo;
} else {
    echo "Error al exportar la base de datos. Código de error: " . $result_code;
}
?>
