<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

	<section id='home'>

		<h1>Welcome To Our Basketball Player Database!</h1>
		<form action="search.php">
			<div class="row">
			  <div class="col-lg-8">
			    <div class="input-group">
			      <input type="text" class="form-control" name="inputText" placeholder="Search for your favorite player">
			      <span class="input-group-btn">
			        <button class="btn btn-default" name="submitForm" type="submit">Search!</button>
			      </span>
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			</div>
		</form>


		<section id='content'>

			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Name</th>
			      <th>Team</th>
			      <th>GP</th>
			      <th>Min</th>
			      <th>FGM</th>
			      <th>FGA</th>
			      <th>3PTM</th>
			      <th>3PTA</th>
			      <th>3PTPct</th>
			      <th>FTM</th>
			      <th>FTA</th>
			      <th>FTPCT</th>
			      <th>ROFF</th>
			      <th>RDEF</th>
			      <th>RTOT</th>
			      <th>AST</th>
			      <th>TO</th>
			      <th>STL</th>
			      <th>BLK</th>
			      <th>PF</th>
			      <th>PPG</th>


			    </tr>
			  </thead>
			  <tbody>
			 

				<?php  

					require_once('player.php');
					$input = $_GET['inputText']; 

					try {
					    $conn = new PDO('mysql:host=info344.c64bdivc3coj.us-west-2.rds.amazonaws.com:3306;dbname=newschema', 'info344user', '<password>');
					    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
					     
					    $data = $conn->query('SELECT * FROM table1 WHERE Name Like ' . $conn->quote('%' . $input . '%') );
					    foreach($data as $row) {
					    	$player = new Player($row['Name'],$row['Team'],$row['GP'],$row['Min'],$row['FGM'],$row['FGA'],$row['3PTM'],$row['3PTA'],$row['3PTPct'],$row['FTM'],$row['FTA'],$row['FTPct'],$row['Roff'],$row['Rdef'],$row['Rtot'],$row['Ast'],$row['TO'],$row['Stl'],$row['Blk'],$row['PF'],$row['PPG']);


					    	echo "<tr>
					    			<td>" .$player->getName()."</td>" . "
					    			<td>" .$player->getTeam()."</td>" . "
					    			<td>" .$player->getGp()."</td>" . "
					    			<td>" .$player->getMin()."</td>" . "
					    			<td>" .$player->getFgm()."</td>" . "
					    			<td>" .$player->getFga()."</td>" . "
					    			<td>" .$player->getTptm()."</td>" . "
					    			<td>" .$player->getTpta()."</td>" . "
					    			<td>" .$player->getTptpct()."</td>" . "
					    			<td>" .$player->getFtm()."</td>" . "
					    			<td>" .$player->getFta()."</td>" . "
					    			<td>" .$player->getFtpct()."</td>" . "
					    			<td>" .$player->getRoff()."</td>" . "
					    			<td>" .$player->getRdef()."</td>" . "
					    			<td>" .$player->getRtot()."</td>" . "
					    			<td>" .$player->getAst()."</td>" . "
					    			<td>" .$player->getTo()."</td>" . "
					    			<td>" .$player->getStl()."</td>" . "
					    			<td>" .$player->getBlk()."</td>" . "
					    			<td>" .$player->getPf()."</td>" . "
									<td>" .$player->getPpg()."</td>" . "
					    	</tr>"; 


					    }

					    
					 
					} catch(PDOException $e) {
					    echo 'ERROR: ' . $e->getMessage();
					}
				    
				

			?>


			  </tbody>
			</table>			


		

	</section>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



	</body>

</html>


