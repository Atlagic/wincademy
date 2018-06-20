<?php
	session_start();
	include("connection.php");
	
	if(isset($_POST['subForm']))
		{
				$title = $_POST['title'];

				$content = $_POST['content'];

				$codeList = $_POST['codeList'];
				
				$file = "https://vincaskola.rs";
				
				$idExcercise = $_POST['excerciseList'];

				if($title == '')
				{
					$_SESSION['errMsg'] = "Enter the title!";
					header("Location:insertExample.php");
				}

				else if($content == '')
				{
					$_SESSION['errMsg'] = "Enter the content!";
					header("Location:insertExample.php");
				}
				else
				{
					$query = "INSERT INTO primeri VALUES('','$title', '$content', '$codeList', '$file', '$idExcercise')";
					$res = mysqli_query($conn, $query) or die(" reg Query is not executed!".mysqli_error());

					$_SESSION['succMsg'] = "Successfully added!";
					
					header("Location:insertExample.php");
					
				}
			}
		 ?>