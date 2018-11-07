<!DOCTYPE html>
<html>
<head>
	<title>
		VRD MUSIC
	</title>
</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="..\css\bootstrap.css">
	<link rel="stylesheet" href="..\css\myStyle.css">
	<link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.4.1/css/all.css'>
<body class="bg">
	<div class="container-fluid header">
		<div class="row">
			<div class="col-md-4">
				<h1 class="judul">
					VRD MUSIC
				</h1>
			</div>
			<div class="col-md-3 col-md-offset-5">
				<table>
					<tr>
						<td>
							<div class="search-box">
								<input class="search-txt" name="" placeholder="Search">
								<button class="btn-search" type="submit" onclick="alert('Test')">
									<i class="fa fa-search"> </i>
								</button>
									<a class="search-btn" href="#"> 
							</div>
						</td>
						<td>
							<a href="loginpage.php">
                                <button class="btn-login" style='font-size:32px' type="submit" formaction="loginpage.html">
                                    <i class="fas fa-user-circle"></i>
                                </button>
                            </a>
						</td>
					</tr>
				</table>
			</div>
		</div> 
		
		<div class="navibar row">
			<div class="col-md-3 col-xs-12">
				<li><a href="homepage.php">Beranda</a></li>
			</div>
			<div class="col-md-3 col-xs-12">
				<li><a href="news.asp">Rilisan Baru</a></li>
			</div>
			<div class="col-md-3 col-xs-12">   
				<li><a href="contact.asp">Rekomendasi</a></li>
			</div>
			<div class="col-md-3 col-xs-12">
				<li><a href="about.asp">Top 10</a></li>
			</div>
					
		</div>
		
	</div>
	<div style="color: white">
		<div class="container" style="text-align:center; padding: 30px">
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "vrd";
				//Create Connection
				$conn = new mysqli($servername,$username,$password,$dbname);
				//Check Connection
				if ($conn->connect_error){
					die("Connection Failed: " . $conn->connect_error);
				}
				$result = mysqli_query($conn,"SELECT * FROM lagu");
				
				while($row = mysqli_fetch_array($result))
				{
					echo "<b>" . $row['nama_lagu'] . "</b><br>";
					echo "" . $row['lirik_lagu'] . "";
				}
				
				mysqli_close($conn);
			?>
		</div>
	</div>
	
	<!-- <script src="script.js"></script>	 -->
</body>
</html>