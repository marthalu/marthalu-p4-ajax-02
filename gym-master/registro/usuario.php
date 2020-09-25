


<button onclick="window.location.href = '../index.html';">Principal</button>
    <?php


            $dbhost     = "localhost";
            $dbuser		= "root";
            $dbpass		= "";
            $dbname		= "gym_mtk";           

            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
            $sql = "INSERT INTO registro (id, nombre, apellido, cedula, telefono, peso, estatura, categoria, tarifa) VALUES (:id, :nombre, :apellido, :cedula, :telefono, :peso, :estatura, :categoria, :tarifa)";
            $q = $conn->prepare($sql);

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $cedula = $_POST['cedula'];
            $telefono = $_POST['telefono'];
            $peso = $_POST['peso'];
            $estatura = $_POST['estatura'];
            $categoria = $_POST['categoria'];
            $tarifa = $_POST['tarifa'];


            $result = $q->execute(array(
                ":id" => NULL,
                ":nombre" => $nombre,
                ":apellido" => $apellido,
                ":cedula" => $cedula,
                ":telefono" => $telefono,
                ":peso" => $peso,
                ":estatura" => $estatura,
                ":categoria" => $categoria,
                ":tarifa" => $tarifa

            ));

            if($result){
                echo "usuario guardado exitosamente";
            }
            else{
                echo "Error guardando el usuario";
            }
        ?>  
