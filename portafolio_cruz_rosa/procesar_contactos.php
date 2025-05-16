<?php
$servidor = "localhost";  
$usuario = "root";        
$contrasena = "";         
$base_datos = "contactos_r"; 

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
                $sql = "INSERT INTO datos (nombre, email, telefono, mensaje) VALUES (:nombre, :email, :telefono, :mensaje)";
                $stmt = $conexion->prepare($sql);
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':mensaje', $mensaje);


                if ($stmt->execute()) {
                    echo '<div class="mensaje-exito">
                            🎀Datos ingresados correctamente🎀.
                          </div>';} else {
                    echo '<div class="mensaje-error">No se ha podido enviar los datos.</div>';
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
        background-color:rgba(253, 41, 207, 0.5);
        color: hsla(318, 71.70%, 49.80%, 0.69);;
        padding: 15px 30px;
        border-radius: 10px;
        text-align: center;
        font-size: 18px;
        box-shadow: 0px 0px 10px rgba(214, 221, 221, 0.75);
        width: auto;
        max-width: 80%;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translate(-50%, -60%);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -50%);
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }
        to {
            opacity: 0;
        }
    }

    .mensaje i {
        font-size: 24px;
    }

    .cerrar {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: white;
        transition: 0.3s;
        font-weight: bold;
    }

    .cerrar:hover {
        color: #ff4b5c;
        transform: scale(1.2);
    }
</style>
