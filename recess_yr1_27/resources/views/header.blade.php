
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta property="og:title" content="Welcome to UTF"></meta>
 		
		<meta property="og:description" content="" /> 
		
		<title>UFT | welcome</title> 

		<link rel="canonical" href="https://blog.gitea.io/2016/12/welcome-to-gitea/">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://blog.gitea.io/styles/main.css">

		<link rel="shortcut icon" type="image/x-icon" href="https://blog.gitea.io/images/favicon.png">
		<link rel="icon" type="image/x-icon" href="https://blog.gitea.io/images/favicon.png">
		<style>
		 	body{background-color:wheat;}
		 	#headline{font-size:30px; font-weight:400;  margin-bottom:60px; color:gray;}
		 	a{text-decoration:none; }
		 	.navbar-brand{position:absolute; left:5%; top:4px; border:1px solid black;   z-index:10; 
		 		border-radius:40px; background:black; font-weight:800; padding:20px; font-size:40px; color:white;} 
		 	#navMenu{position:absolute; left:0%; top:70px; border:1px solid red; width:100%; padding:4px; padding-right:50px; 
		 		background:palegreen; z-index:5; border-top:6px solid black; color:black; font-weight:600;}
		 	#navMenu a{float:right; margin-right:20px; background:mediumseagreen; padding:3px; border-radius:3px; color:white;}
		 	#add-more-container{position:absolute; z-index:7; top:160px; left:4%; background:linen; border-radius:5px; padding:4px; color:gray;}
		 	#add-more-container:hover{border:2px solid gray; color:white}
		 	#add-more-button{font-size:40px; color:gray; }
		 	#recomendr_div{position:absolute; left:2%; top:280px; width:16%; }
		 	#recomendr_div table{border-top:1px solid skyblue;}
		 	table tr:nth-child(1){background:gray; }
		 	table tr:nth-child(odd){background:wheat;}
		 	table{background-color:palegreen;}
		 	td,th{padding:4px; }
		 	section{margin-left:25%; margin-right:5%; background:palegreen;}
			footer{background:mediumseagreen; text-align:center; z-index:7;}
			#sidebarr{position:absolute; z-index:1; background:palegreen; width:20%; min-height:100%;  }
		</style>
 
	</head>
	
	
	<body>

			<nav class="navbar">
				<div class="container">
					<div class="navbar-brand">
						<a href="/home">  UTF </a> 
					</div>
					
					<div class="navbar-menu" id="navMenu">
						<div class="navbar-end">  
							<a class="navbar-item" href="/members"> 
								Members 
							</a> 
							<a class="navbar-item" href="/agents"> 
								Agents
							</a> 
							<a class="navbar-item" href="payments"> 
								Payments
							</a>
							<a class="navbar-item" href="/districts"> 
								Districts
							</a> 
							<a class="navbar-item" href="/donations"> 
								Donations
							</a> 
							<a class="navbar-item" href="/home"> 
								Home
							</a>  
							 
						</div>
					</div>
					<div class="navbar-background" id="navbar-background"></div>
				</div>
			</nav>
			<!--<div id="sidebarr"> </div> -->
			<center> <h2 id="headline"><b>United Front for Transformation   </b></h2> </center>

			@yield('content')



		<footer class="footer">
			<div class="container">
				<div class="content has-text-centered">
					<p>
						Copyright &copy; 2019 <a href="home">The UFT management</a>. All rights reserved. With <i class="fa fa-heart" aria-hidden="true"></i> and <a href="#">Determination</a>.
					</p>
					<p>
						 Headed by <a href="#">Group-27</a>, <a href="#">Year 1</a>, <a href="#">Makerere</a>, and all of our supporters .
					</p>
					<p>
						
						<a class="nav-link" href="http://localhost:8000" hreflang="en-us"></a>
						
					</p>
				</div>
			</div>
		</footer>
	</body>
</html>


