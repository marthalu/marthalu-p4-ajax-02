<html>
<head>
        <title>Servidor - Listado de usuarios</title>
    </head>
    <body>

    <?php 
            $dbhost     = "localhost";
            $dbuser		= "root";
            $dbpass		= "";
            $dbname		= "gym_mtk";           

            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

            $action = null;
            if(isset($_REQUEST["action"])){
                $action = $_REQUEST["action"];
                sleep(0);
            }

            
            $categoria = null;
            /*Si viene la variable 'categoria' en el request*/
            if(isset($_REQUEST["categoria"])){
                $categoria = $_REQUEST["categoria"];
            }

            $sql = "SELECT nombre, apellido, cedula, telefono, peso, estatura, categoria, tarifa FROM registro";                        

            if($action == 'Buscar'){
                $sql = $sql . " WHERE categoria = '$categoria'";
                $q = $conn->prepare($sql);
                $result = $q->execute();
                
            }
            else{
                $q = $conn->prepare($sql);
                $result = $q->execute();
            }
                                    
            $data = $q->fetchAll();

            for($i=0; $i<count($data); $i++){                
                ?>
                    <h2><?php echo $data[$i]["nombre"] ?> - <?php echo $data[$i]["apellido"] ?> - <?php echo $data[$i]["cedula"] ?> - <?php echo $data[$i]["telefono"] ?> - <?php echo $data[$i]["peso"] ?> - <?php echo $data[$i]["estatura"] ?> - <?php echo $data[$i]["tarifa"] ?> </h2>
                    <img src="../img/<?php echo $data[$i]["categoria"] ?>.jpg" alt="<?php echo $data[$i]["categoria"] ?>">
                <?php
            }   
               
        ?>        

<?php 
            $dbhost     = "localhost";
            $dbuser		= "root";
            $dbpass		= "";
            $dbname		= "gym_mtk";           

            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

            $action = null;
            if(isset($_REQUEST["action"])){
                $action = $_REQUEST["action"];
                sleep(0);
            }

            
            $tarifa = null;
            /*Si viene la variable 'tarifa' en el request*/
            if(isset($_REQUEST["tarifa"])){
                $tarifa = $_REQUEST["tarifa"];
            }

            $sql = "SELECT nombre, apellido, cedula, telefono, peso, estatura, categoria, tarifa FROM registro";                        

            if($action == 'Buscar'){
                $sql = $sql . " WHERE tarifa = '$tarifa'";
                $q = $conn->prepare($sql);
                $result = $q->execute();
                
            }
            else{
                $q = $conn->prepare($sql);
                $result = $q->execute();
            }
                                    
            $data = $q->fetchAll();

            for($i=0; $i<count($data); $i++){                
                ?>
                    <h2><?php echo $data[$i]["nombre"] ?> - <?php echo $data[$i]["apellido"] ?> - <?php echo $data[$i]["cedula"] ?> - <?php echo $data[$i]["telefono"] ?> - <?php echo $data[$i]["peso"] ?> - <?php echo $data[$i]["estatura"] ?> - <?php echo $data[$i]["categoria"] ?> </h2>
                    <img src="../img/<?php echo $data[$i]["tarifa"] ?>.jpg" alt="<?php echo $data[$i]["tarifa"] ?>">
                <?php
            }  
                   
        ?>        
        
        </body>
</html>