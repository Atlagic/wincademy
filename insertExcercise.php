<?php
	session_start();
	include("connection.php")
?>
<html>
	<head>
			<link rel="stylesheet" href="style.css"/>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	</head>
	<body>
		<div class="cover">
			<div class="center">
				<div class="jumbotron" style="background-color:#e9ecef47; width:100%;">
				<form name="forma" method="post" action="submitExcercise.php">
				<div class="input-group mb-3" style="width:250px;">
					<select class="custom-select" id="courseList" name="courseList">
						<option selected>Choose course ...</option>
						  <?php
						 
							$query = "SELECT * FROM kursevi";
							$res = mysqli_query($conn, $query) or die(" reg Query is not executed!".mysqli_error());
							while($r = mysqli_fetch_array($res))
							{
								echo '<option value="'.$r["idKursa"].'">'.$r["nazivKursa"].'</option>';							
							}
						  ?>
					</select><br/>
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title of excercise" style="width:580px">
				  <small id="emailHelp" class="form-text text-muted">(Write a clear title for lesson)</small>
			    </div>
				<div class="form-group">
				  <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter the content of excercise ..." style="width:580px"></textarea>
				  <small id="emailHelp" class="form-text text-muted">(Make sure that the content is meaningful)</small>
			    </div>
				<div class="form-group" style="width:80px;margin:0 auto;">
					<button type="submit" class="btn btn-primary" id="subForm" name="subForm" value="Submit">Submit</button>	
				</div>
				<div class="errMsg">
					<?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
				</div>
				<div class="succMsg">
					<?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?>
				</div>
				<?php unset($_SESSION['errMsg']); ?>
				<?php unset($_SESSION['succMsg']); ?>
				</form></div>
			</div>
		</div>
		<script src="script.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>