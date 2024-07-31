	<!DOCTYPE htm1>
<htm1 lang="en">
<head>
      <meta charset="UTF-8">
	  <title>Price</title
	   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>	  
    	<header>
		    <nav class="navbar-default" role ="navigation">
			    <div class="container-fluid"> 
					<div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-ex1-collapse">
						   <span class="sr-only">Toggle navigation</span>
						   <span class="icon-bar"></span>
						   <span class="icon-bar"></span>
						   <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Price</a
					</div>
					
					<div class="collapse navbar-collapse navbar-ex1-collapse">
					    <ul class="nav navbar-nav">
						    <li><a href="price.php">Price</a></li>
							<li><a href="air.php">Air</li>
							<li><a href="hotels.php">Hotels</li>
							<li><a href="ex.rates.php">Exchange_Rates</li>
						</ul>
					</div>		
				</div>			
		    </nav>
	
		</header>
		
	 <style>
		th, td {
			padding: 10px;
		}
		
		th {
			background: #606060;
			color: #ffffff;
		}
		
		td {
			
			background: #b5b5b5;
		}
		</style>
		
		<table>
		<tr>
		<th>ID</th>
		<th>Country</th>
		<th>Price</th>
		
		
		
		</tr>
		
		<?php
		$conn = new mysqli("localhost", "root", "", "tur_1");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
		
		$sql = "SELECT * FROM Price";
        if($result = $conn->query($sql)){
			  $rowsCount = $result->num_rows;
			  echo "<p>Получено объектов: $rowsCount</p>";
    
        foreach($result as $row){
          echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Country"] . "</td>";
			echo "<td>" . $row["Price"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
       
      }
		?>
		
		<footer>
		
		</footer>
</body>
</htm1>

