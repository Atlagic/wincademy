<?php
	session_start();
	include("connection.php");
?>
<html>
	<head>
			<link rel="stylesheet" href="style.css"/>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	</head>
	<body>
		<div class="cover">
			<div class="singleCenter">
				<div class="jumbotron">
					<?php
						$query = "SELECT * FROM vezbe WHERE idKursa=".$_GET['id'];
						$res = mysqli_query($conn, $query) or die(" reg Query is not executed!".mysqli_error());
						while($r = mysqli_fetch_array($res))
						{
							echo '<a class="list-group-item list-group-item-action" href="examples.php?id='.$r["idVezbe"].'">'.$r["nazivVezbe"].'</a>';							
						}	
					?>
				</div>
			</div>
		</div>
		<script src="script.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>