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
				<div id="carouselExampleControls" class="carousel slide" >
				  <div class="carousel-inner">
					  <?php
						$query = "SELECT * FROM primeri WHERE idPrimer=".$_GET['id'];
						$res = mysqli_query($conn, $query) or die(" reg Query is not executed!".mysqli_error());
						while($r = mysqli_fetch_array($res))
							{
								echo '
									<div class="carousel-item active">
										<div class="d-block w-100">
									  <h1 class="display-4">'.$r["naslov"].'</h1>
									  <p class="lead">'.$r["tekst"].'</p>
									  <hr class="my-4">
									  <p>'.$r["kod"].'</p>									
									<div class="editor">';
									switch ($r["kod"]) {
											case "htmlcss":
												echo '<iframe src="https://codesandbox.io/s/04y5m351n0" style="width:100%; height:500px; border:0; border-radius: 4px; overflow:hidden;" sandbox="allow-modals allow-forms allow-popups allow-scripts allow-same-origin"></iframe>';
												break;
											case "js":
												echo '<iframe src="https://codesandbox.io/s/04y5m351n0" style="width:100%; height:500px; border:0; border-radius: 4px; overflow:hidden;" sandbox="allow-modals allow-forms allow-popups allow-scripts allow-same-origin"></iframe>';
												break;
											case "php":
												echo '<iframe src="https://paiza.io/projects/e/g-CWz6N9mYmVUkUawXIxkA?theme=twilight" width="100%" height="500" scrolling="no" seamless="seamless"></iframe>';											
												break;
											case "sql":
											echo '<iframe src="https://paiza.io/projects/e/MyR5ux8_TL0Ql4hcTqegtA?theme=twilight" width="100%" height="500" scrolling="no" seamless="seamless"></iframe>';											
												break;
											case "excel":
												echo '<iframe width="100%" height="500" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?resid=2A773816BC2E48A1%212657&authkey=%21ALXiRJzZAjf99SY&em=2&AllowTyping=True&wdDownloadButton=True&wdInConfigurator=True"></iframe>';						
												break;
											default:
												break;
										}'
									</div></div></div>';
									
							}	
					?>
					<!--<div class="carousel-item">
					  <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
					</div>-->
				  </div>
				  <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>-->
				</div>
				<div class="jumbotron">	
					<div class="custom-control custom-checkbox exChb">
					  <input type="checkbox" class="custom-control-input finishCheck" id="finishCheck" name="finishCheck" >
					  <label class="custom-control-label" for="finishCheck">Check when you finish</label>
					</div>
					<div class="form-group" style="width:124px;margin:0 auto;margin-top:25px;">
						<a class="btn btn-primary carousel-control-next isDisabled" id="nextEx" name="nextEx" value="Submit" href="<?php print 'singleexample.php?id='.$next; ?>"  role="button" data-slide="next">Next example</a>	
					</div>
				</div>
			</div>
		</div>
		<script src="script2.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>