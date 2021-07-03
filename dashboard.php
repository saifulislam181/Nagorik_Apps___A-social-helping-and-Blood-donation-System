<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="text/css" href="img/download.png">
	 <script src="https://kit.fontawesome.com/76235dc605.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<title>Dashboard</title>
</head>
<body>
	<div class="header">
		<a href="home.php"><img src="img/logo.png" style="width: 70px; height: 70px"></a>
	</div>

	<div class="sidebarbox">
		<div class="col1">
			<a href="#">
			<i class="fas fa-tachometer-alt" id="dashIcon"></i>
			<h4>Dashboard</h4></a><br>

		
			<i class="fas fa-sign-out-alt" id="logoutIcon"></i>
			<h4>Logout</h4><br>

		</div>

		<div class="col2">  <!--start column 2-->
			 <h1>Welcome to the Admin DashBoard</h1>
            
			 <div class="adminpanel">

              <div class="requesterpage">
                <a href="requestlist.php">
                <i class="fas fa-users"></i>
                <h2>Requester List</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </a>
              </div>
          

        
              <div class="settings">
                
                <i class="fas fa-lira-sign"></i>
                <h2>Money Donar List</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              	<a class="showlist"href="moneydonarlist.php">Show List</a>
                
              </div>
           

           
              <div class="statuspost">
                <a href="bloodDonarlist.php">
                <i class="fas fa-newspaper"></i>
                <h2>Blood Donar List</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </a>
              </div>
          

              </div>
			
		</div>
    
	</div>
  </div>

</body>
</html>