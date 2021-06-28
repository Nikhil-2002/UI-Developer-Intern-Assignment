<?php

if(isset($_POST["submit"]))
{

$filename = $_FILES["file"]["tmp_name"];

$orgname = $_FILES["file"]["name"];

$filesize = $_FILES["file"]["size"];

$fileext = explode(".", $orgname);

$ext=$fileext[1];

$arr=array("JPG","jpg","JPEG","jpeg","PNG","png");

if(in_array($ext,$arr))
{
	if($filesize<=1000)
	{
		?><script>alert("Successfull !!");</script><?php
	}
	else{

		?><script>alert("File Size Invalid");</script><?php
	}
}
else

{
	?><script>alert("Extension Invalid");</script><?php
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Embold
 
	</title>



<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
#con{

	margin: 0px;
	padding: 0px;

}
#con1
{
	margin: 0px;
	padding: 0px;
	margin-top:-26px;
}
#size{
	font-size:35px;
	padding:8px;
	background: #23a9b8;
	padding-left:10px;
	padding-right:18px;
	padding-top:20px;
	padding-bottom:20px;
}

#ic1
{
	font-size:24px;
	color:gray;
	padding:20px;

	margin-left:8px;
	padding-left:16px;

}

#us
{
	padding:15px;
	color: gray;
	font-family:arial;
}

#inp
{
	margin-top: -20px;
	margin-left: -10px;
	border-radius:20px;
	/*padding-top:-10px;*/
	padding-left:30px;
	padding-bottom:6px;
}

#sr
{
	position:relative;
	left:20px;
}

#user
{
	padding-top:50px;
	padding-left:40px;
	color:gray;
	font-family:arial;
}
#uin
{
	padding-left:18px;
	width:276px;

}

#position{
	padding:180px;
}

#sp
{
	width:100%;
	height:40%;
	border:1px solid gray;
}
#btn1
{
	background:#23a9b8;
	padding:5px; 
	padding-left:20px;
	padding-right:20px;
}
#btn2{
	color: gray ; 
	padding:5px; 
	padding-left:20px;
	padding-right:20px;
}
#chrow
{
	margin-left:4px;
}
#eid{

	padding-left:18px;
	width:276px;

}
#mail
{
   margin-right: 50px;
}
.row
{
 margin-top: 0px;
}
#opt
{
   width: 128%;
   height: 30px;
}
table{
	padding-top: 10px;
	margin-right: 100px;
	
}

</style>

</head>
<body>

	<div class="container-fluid" id="con">

		<div class="row">

			<div class="col-md-9">

				<i class="fa fa-bars text-light" id="size"></i>

				<img src="embold-logo.svg" width="" height="34" style="position:relative; left: 30px; top: -10px;"/>
			

			</div>			

			<div class="col-md-2" style="padding-top:15px;">

				<h6 style="text-align:right">NIKHIL FALKE</h6>
				
				<p style="text-align:right">Account Setting</p>


			</div>

			<div class="col-md-0.5">
	
			<img src="login.png" class="rounded-circle"/>
		
			</div>
		

		</div>
	</div>

	

	<form method="post" enctype="multipart/form-data">
	
	<div class="container-fluid" id="con1">
		<hr>

		<div class="row">

			<div class="col-md-0.5 bg-light" style="margin-top:-16px;">

				<br>
				<center>
					<a href="#"><i class="fa fa-search" id="ic1"></i></a>
				<br>

					<a href="#
					"><i class="fa fa-home" id="ic1"></i></a>
				<br>
				<a href="#"><i class="fas fa-chart-line" id="ic1"></i></a>
				<br>
				<a href="#"><i class="fas fa-user-friends" id="ic1"></i></a>
				<br>
				<a href="#"><i class="fa fa-cog" id="ic1"></i></a>

			</center>


			</div>

			<div class="col-md-11">

				<h2 id="us">User list</h2>
                 
				<i class="fa fa-search" id="sr"></i>

				<input type="text" placeholder="Search" id="inp">

				<table class="table table-bordered" style="display: all; overflow-y:auto; width: 75%;height: 20%;padding: -5px;margin-top:15px; margin-left:20px;"><!-- margin-top:15px; margin-left:20px;  -->

					<tr>
						<th style="background-color: #D2D0D0;">Name</th>
						<th style="background-color: #D2D0D0;">Role</th>
						<th style="background-color: #D2D0D0;" style="text-align:center;">Actions</th>
					</tr>
					<tr>
						<td>Jake Loue</td>
						<td>Admin</td>
						<td style="text-align: center;"><a href="#"><i class="fa fa-pencil"style="color: #6A6464;"></i></a></td>
					</tr>
					<tr>
						<td>Grace Hopper</td>
						<td>Developer</td>
						<td style="text-align: center"><a href="#"><i class="fa fa-pencil"style="color: #6A6464;"></i></a></td>
					</tr>
					<tr>
						<td>Mortal kong</td>
						<td>QA</td>
						<td style="text-align: center"><a href="#"><i class="fa fa-pencil"style="color: #6A6464;"></i></a></td>
					</tr>
					<tr>
						<td>John Wilson</td>
						<td>Manager</td>
						<td style="text-align: center"><a href="#"><i class="fa fa-pencil"style="color: #6A6464;"></i></a></td>
					</tr>
				</table>


		<div class="row">
          <div class="col-md-6" id="user">
            <h3>New User Details</h3><hr>
               <input type="text" placeholder="Username" required>
                  <span style="margin-left:100px;"></span>
               <input type="text" placeholder="Email"required>
                      <br><br>
               <input type="text" placeholder="First Name"required>
                  <span style="margin-left:100px;"></span>
               <input type="text" placeholder="Last Name"required>
                       <br><br>

									<div class="row" style="margin-bottom:6px">
										<div class="col-md-4">
									<select id="opt" class="form-control" name="opt">

										<option value="Role">Role</option>
										<option value="Developer">Developer</option>
										<option value="Manager">Manager</option>
										<option value="QA">QA</option>
										

									</select>

										</div>
										<div class="col-md-9">
										</div>
									</div>
									<div class="row" id="chrow">
										<div class="col-md-0.5">
									<input type="checkbox" required>
								</div>
								<div class="col-md-10">
									<p>Send email confirmation</p>
								</div>
							</div>
					</div>
					

					<div class="col-md-3" id="user">
										<h3>Profile Picture</h3>

<hr>

		<img src="Cap1.JPG" width="210px" height="180px" bordered>
		

		
		<h6 style="padding: 10px ;padding-left:2px;" class="bg-light"><input type="file" name="file" required></h6>
					</div>

				

				</div>

				<hr>

		</div>
	
	</div>

</div>

<div class="container">

	<input type="submit" value="Add User" name="submit" class="text-light" id="btn1">
	<input type="reset" value="Cancel" class="bg-light" id="btn2">
</div>

</form>




<script>
		$(document).ready(function(){
				$("#eid").keyup(function(){
					if(checkeid())
					{
						$("#eid").css("border","3px solid #418a37");
					}
					else
					{
						$("#eid").css("border","3px solid #a83a23");
					}

				});
				
 			$("#fn").focus(function(){
 					$("#fn").css({"font-weight":"550","font-family":"Comic Sans MS","background-color":"white","color":"#1d241"});
 				});

 				
 				});
		
			function checkeid()
			{
				var id=$("#eid").val();
				var expr= /^([\w-\.]+@([\w-]+\.)+[\w-]{3,4})?$/;
				if(expr.test(id))
				{
					return true;
				}
				else
				{
					return false;
				}
			}

		


</script>

</body>


</html>
<!-- Created by Nikhil Falke -->
