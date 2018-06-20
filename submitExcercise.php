<?php
	session_start();
	include("connection.php");
	
	if(isset($_POST['subForm']))
		{
				$title = $_POST['title'];

				$content = $_POST['content'];
				
				$idCourse = $_POST['courseList'];

				if($title == '')
				{
					$_SESSION['errMsg'] = "Enter the title!";
					header("Location:insertExcercise.php");
				}

				else if($content == '')
				{
					$_SESSION['errMsg'] = "Enter the content!";
					header("Location:insertExcercise.php");
				}
				else
				{
					$query = "INSERT INTO vezbe VALUES('','$title', '$content', '$idCourse')";
					$res = mysqli_query($conn, $query) or die(" reg Query is not executed!".mysqli_error());

					$_SESSION['succMsg'] = "Successfully added!";
					
					header("Location:insertExcercise.php");
					
				}
			}
		 ?>