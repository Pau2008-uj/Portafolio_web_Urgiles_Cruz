<?php
$servidor = "localhost";  
$usuario = "root";        
$contrasena = "";         
$base_datos = "contactos"; 

try {
    
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = trim($_POST["nombre"]);
        $email = trim($_POST["email"]);
        $telefono = trim($_POST["telefono"]);
        $mensaje = trim($_POST["mensaje"]);

        if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                $sql = "INSERT INTO datos (nombre, email, telefono, mensaje) 
                        VALUES (:nombre, :email, :telefono, :mensaje)";
                $stmt = $conexion->prepare($sql);

                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':mensaje', $mensaje);

                if ($stmt->execute()) {
                    echo '<div class="mensaje-exito">Gracias por su visita, el mensaje fue enviado correctamente <3</div>';
                } else {
                    echo '<div class="mensaje-error">Error al enviar el mensaje.</div>';
                }

            } else {
                echo '<div class="mensaje-error">El correo electrónico no es válido.</div>';
            }
        } else {
            echo '<div class="mensaje-error">Por favor, completa todos los campos requeridos.</div>';
        }
    }
} catch (PDOException $error) {
    echo '<div class="mensaje-error">Error en la conexión: ' . $error->getMessage() . '</div>';
}
?>

<style>
    .mensaje-exito, .mensaje-error {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color:rgb(234, 160, 190);
        color: rgb(26, 10, 16);;
        padding: 15px 30px;
        border-radius: 10px;
        text-align: center;
        font-size: 18px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
        width: auto;
        max-width: 80%;
    }

    .mensaje-error {
        background-color:rgb(157, 63, 63);
    }
</style>

