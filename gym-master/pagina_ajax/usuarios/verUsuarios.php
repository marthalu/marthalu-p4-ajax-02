<!DOCTYPE html>
	<html >
	<head>

		 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/nice-select.css">			
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/main.css">
		</head>
		<body>
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-1 col-sm-3 menu-top-middle justify-content-center d-flex">
							<a href="../index.html">
								<img class="img-fluid" src="../img/elefantegym.png" alt="">	
							</a>			    			
			    		</div>
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
						  <li class="menu-active"><a href="../index.html#home">Home</a></li>
						  <li><a href="../generic.html#tarifa">Tarifa</a></li>
				          <li><a href="../generic.html#registro">registro</a></li>
				          
				        </ul>
				      </nav>	    		
			    	</div>
			    </div>
			  </header>
		
		<!-- About Generic Start -->
		<div class="main-wrapper">
			
			
			<!-- plan -->
			<section class="price-area pt-100" id="plan">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">FILTRADO</h1>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-4">
							<div class="single-price">
								<div class="top-sec d-flex justify-content-between">
									<div class="top-center">
										<h1>Usuario 1</h1>
									</div>
								</div>
								<div class="end-sec">
									<form action="verUsuarios.php">
										Categoria:
										<select name="categoria">
											<option value="platino">Platino</option>
											<option value="one">One</option>
											<option value="premium">Premium</option>
											<option value="classic">Classic</option>
											<option value="super">Super</option>
											<option value="zonal">Zonal</option>
										</select>
										<input type="submit" value="buscar" name="buscar">
										<input type="submit" value="Ver todos" name="verTodos">
									</form>
									<form action="verUsuarios.php">
										Tarifa:
										<select name="tarifa">
										<option value="trimestral">Tarifa Trimestral</option>
										<option value="semestral">Tarifa Semestral</option>
										<option value="anual">Tarifa Anual</option>
										</select>
										<input type="submit" value="buscar" name="buscar">
										<input type="submit" value="Ver todos" name="verTodos">
									</form>
                                </div>										
							</div> 
						</div>

						<div class="col-lg-4">
							<div class="single-price">
								<div class="top-sec d-flex justify-content-between">
									<div class="top-center">
										<h1>Usuario 2</h1>
									</div>
								</div>
								<div class="end-sec">
									<form action="verUsuarios.php">
										Categoria:
										<select name="categoria">
											<option value="platino">Platino</option>
											<option value="one">One</option>
											<option value="premium">Premium</option>
											<option value="classic">Classic</option>
											<option value="super">Super</option>
											<option value="zonal">Zonal</option>
										</select>
										Tarifa:
										<select name="tarifa">
											<option value="trimestral">Tarifa Trimestral</option>
											<option value="semestral">Tarifa Semestral</option>
											<option value="anual">Tarifa Anual</option>
										</select>
										<input type="submit" value="buscar" name="buscar">
										<input type="submit" value="Ver todos" name="verTodos">
									</form>
								</div>								
							</div> 
						</div>	

						<div class="col-lg-4">
							<div class="single-price">
								<div class="top-sec d-flex justify-content-between">
									<div class="top-center">
										<h1>Usuario 3</h1>
									</div>
								</div>
								<div class="end-sec">
									<form action="verUsuarios.php">
										Categoria:
										<select name="categoria">
											<option value="platino">Platino</option>
											<option value="one">One</option>
											<option value="premium">Premium</option>
											<option value="classic">Classic</option>
											<option value="super">Super</option>
											<option value="zonal">Zonal</option>
										</select>
									</form>
								</div>								
							</div> 
						</div>
					</div>
				</div>	
			</section>
			<!-- End price Area -->			
			
			
			<script src="../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="../https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../js/vendor/bootstrap.min.js"></script>			
			<script type="../text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="../js/easing.min.js"></script>			
			<script src="../js/hoverIntent.js"></script>
			<script src="../js/superfish.min.js"></script>	
			<script src="../js/jquery.ajaxchimp.min.js"></script>
			<script src="../js/jquery.magnific-popup.min.js"></script>	
			<script src="../js/owl.carousel.min.js"></script>			
			<script src="../js/jquery.sticky.js"></script>
			<script src="../js/jquery.nice-select.min.js"></script>			
			<script src="../js/parallax.min.js"></script>	
			<script src="../js/waypoints.min.js"></script>
			<script src="../js/jquery.counterup.min.js"></script>
			<script src="../js/mail-script.js"></script>				
            <script src="../js/main.js"></script>	
            

            
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
                /*
                $result = $q->execute(array(
                    ":cat" => $categoria
                ));    
                */
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
            /*Si viene la variable 'categoria' en el request*/
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