    <?php 

    session_start();

    // checking no of items in cart

    $total_item = 0;


        if (!empty($_COOKIE['item'])){

            foreach ($_COOKIE['item'] as $name1 => $value) {

                $total_item = $total_item + 1;
            }
        }

     ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>StreamNDCream</title>

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 

	<!-- Stylesheets -->
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Custom Styles-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" media="screen, projection" href="css/drift-basic.css">
	
	<!-- Favicon -->
	<link rel="icon" href="./img/favicon.jpg" type="image/x-icon"/>
	<link rel="shortcut icon" href="./img/streamndcream.png" type="image/x-icon"/>
	

</head>
<body>
   
    <!--  Start Header -->

        <section>
            <nav class="navbar navbar-dark bg-orange py-2">
                <div class="container">
                <a class="logo my-1" style="text-decoration: none;" href="index.php"><img src="img/streamndcream.png" style="width:150px;height:150px;"> </a>
                <div class=" my-1">
                    <ul class="navbar-nav" style="flex-direction: row;">
                        
                        <li class="nav-item ml-2 dropdown"> <span class="main-icon"><i class="fa fa-user" aria-hidden="true"></i></span> 
                        <a href="<?php if (isset($_SESSION['loggedin'])) { echo 'javascript:void(0);'; } else { echo 'login.php'; } ?>" id="dropdown"> 
                            <?php if (isset($_SESSION['loggedin'])) {
                            
                                echo 'Hi, '.$_SESSION['firstname'];
                                ?>
                                <i class="fa fa-angle-down"></i> </a> 
                                <div class="dropdown-content">
                                  <a href="orders.php">My Orders</a>
                                  <a href="logout.php">Logout</a>
                                </div>

                                <?php

                            } else {
                                echo 'LOGIN';
                            }

                            ?> 

                        
                        </li>

                        <li class="nav-item ml-4"> <span class="main-icon" style="padding: 5px 9px 5px 7px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> <a href="cart.php"> Cart 
							<?php
							// display no of items on cart
							if (!empty($_COOKIE['item'])){
								?>
								<span class="badge rounded-badge text-small custom-badge-light"> <?php  echo $total_item; ?> </span> 
								<?php
						}

						?>
                        	</a> </li>

                    </ul>
                </div>
            </div>
            </nav>
        </section>
    
    <!-- End Header -->

    <!-- Start navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark navbar-bg-color py-2">
                    <div class="container">    
                        <!-- <a class="navbar-brand" href="#"> <h3 class="text-center"><span class="text-blue">Axm</span><span class="text-warning">Mart</span> </h3> </a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarColor02">
                           <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                <a class="nav-link" href="index.php"> <span><i class="fa fa-home text-white" aria-hidden="true"></i> Home</span> <span class="sr-only">(current)</span></a>
                                </li>
                                
                                
                                <li class="nav-item dropdown2">
                                    <a class="nav-link " href="category.php?cat=Netflix">Netflix <i class="fa fa-caret-down text-custom-2 font-sm"></i> </a>
                                    <div class="dropdown-content2 animated fadeInUp faster">
                                      <a href="category.php?cat=Netflix&subcat=Basic">Basic</a>
                                      <a href="category.php?cat=Netflix&subcat=Standard">Standard</a>
                                      <a href="category.php?cat=Netflix&subcat=Premuim">Premuim</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown2">
                                    <a class="nav-link" href="category.php?cat=HBO MAX">HBO MAX <i class="fa fa-caret-down text-custom-2 font-sm"></i> </a>
                                    <div class="dropdown-content2 animated fadeInUp faster">
                                      <a href="category.php?cat=HBO MAX&subcat=HBO Max Premuim">HBO Max Premuim</a>
                                      <a href="category.php?cat=HBO MAX&subcat=Ad-supported plan">Ad-supported plan</a>
                                    
                                    </div>
                                </li>
                                <li class="nav-item dropdown2">
                                <a class="nav-link" href="javascript:void(0);">Disney Plus <i class="fa fa-caret-down text-custom-2 font-sm"></i> </a>
                                <div class="dropdown-content2 animated fadeInUp faster">
                                      <a href="category.php?cat=Disney Plus&subcat=Monthly">Monthly</a>
                                      <a href="category.php?cat=Disney Plus&subcat=Yearly">Yearly</a>
            
                                    </div>
                                </li>
                              
                            
                           </ul>
                        </div>
                    </div>
                </nav>
            
    <!-- End  Nabvar  -->
