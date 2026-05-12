$host = "172.20.101.107";
$port = "5432";
$dbname = "Batches";
$user = "postgres";
$password = "1155.Jona";

// Cadena de conexión
$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Establecer la conexión
$db = pg_connect($connection_string);

// Verificar conexión
if (!$db) {
    echo "Error: No se ha podido conectar a la base de datos.\n";
    exit;
} else {
    echo "¡Conexión exitosa a PostgreSQL!\n";
}

// ... realizar consultas ...

// Cerrar conexión
pg_close($db);
?>