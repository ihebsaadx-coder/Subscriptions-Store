<?php 
   
    include './inc/header.php';
    include './inc/db_connect.php';

    
    $_SESSION["ref"] = "index";


    // if( empty($_SESSION["user_id"]) || $_SESSION["user_id"] == ""){
    //     // do nothing 
    // } else {
    //     $_SESSION["user_id"] = "";
    // }

    // $_SESSION["user_id"] = "";

?>
    <!-- Start Carousel  -->
    <section class="carousel-wrapper">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="img/streamndcreamban.jpg" class="d-block w-100" alt="Stream ND Cream 1ST Banner">
                    <div class="dark-overlay"></div>
                    <div class="carousel-text">
                        <div class="text-white text-center">
                            <h1 class="display-4" style="font-weight:bold;">New Accounts</h1>
                            <h1 class="display-4"><span style="color:red;font-weight:bold;">NETFLIX</span> , <span style="color:white;font-weight:bold;">HBO MAX</span> , <span style="color:blue;font-weight:bold;">DISNEY PLUS</span> </h1>
                            <a data-scroll href="#latest_deals" class="btn custom-btn btn-lg ml-2 mt-2">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="img/streamndcream2.jpg" class="d-block w-100" alt="Stream ND Cream 2ND Banner">
                    <div class="dark-overlay"></div>
                    <div class="carousel-text">
                        <div class="text-center">
                            <h1 class="display-4 text-orange">Big Sale</h1>
                            <h3 class="text-white">Upto 50% Discount</h3>
                            <a data-scroll href="#todays_deal" class="btn custom-btn bg-dark btn-lg ml-2 mt-2">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/streamndcream3.jpg" class="d-block w-100" alt="...">
                    <div class="dark-overlay"></div>
                     <div class="carousel-text">
                        <div class="text-center">
                            <h1 class="display-4 text-black" style="font-weight:bold;">Hot Deals</h1>
                            <h3 class="text-white">upto 50% Off</h3>
                            <a data-scroll href="#todays_deal" class="btn custom-btn bg-dark btn-lg ml-2 mt-2">Buy Now</a>
                        </div>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
    </section>

    <!--  End Carousel  -->

<!-- New Collections section-->

    <section>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="my-2 position-relative">
                        <img src="img/banner10.JPG" class="img-fluid">
                        <div class="dark-overlay"></div>
                        <div class="carousel-text text-center">
                            <h1> New<br>Deals</h1>
                            <p class="pt-3">30% Off</p>
                        </div>
                        <div class="light-overlay">
                            <div class="carousel-text">
                                <div class="text-white">
                                    <a href="JavaScript:Void(0);" class="btn custom-btn btn-lg ml-2 mt-2">
                                        <div><div class="display-4"><i class="fa fa-plus-circle text-white" aria-hidden="true"></i></div>
                                        <h2>Explore</h2>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-2" style="position:relative;">
                        <img src="img/banner11.JPG" class="img-fluid">
                        <div class="dark-overlay"></div>
                        <div class="carousel-text text-center">
                            <h1> New<br>Deals</h1>
                            <p class="pt-3">15% Off</p>
                        </div>
                        <div class="light-overlay">
                            <div class="carousel-text">
                                <div class="text-white">
                                    <a href="JavaScript:Void(0);" class="btn custom-btn btn-lg ml-2 mt-2">
                                        <div><div class="display-4"><i class="fa fa-plus-circle text-white" aria-hidden="true"></i></div>
                                        <h2>Explore</h2>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-2" style="position:relative;">
                        <img src="img/banner12d.JPG" class="img-fluid">
                        <div class="dark-overlay"></div>
                        <div class="carousel-text text-center">
                            <h1> New<br>Deals</h1>
                            <p class="pt-3">10% Off</p>
                        </div>
                        <div class="light-overlay">
                            <div class="carousel-text">
                                <div class="text-white">
                                    <a href="JavaScript:Void(0);" class="btn custom-btn btn-lg ml-2 mt-2">
                                        <div><div class="display-4"><i class="fa fa-plus-circle text-white" aria-hidden="true"></i></div>
                                        <h2>Explore</h2>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- End New Collections section-->

<!-- Today's Deals section -->
    <section id="todays_deal">
        <div class="container py-4">
        <div class="row">
        <div class="col-md-3">
             <h6 class="text-custom-1 custom-badge-light py-2 text-center">CATEGORIES</h6>
            <div class="custom-card">
            <ul class="custom-list-group pl-0">
                <li class=""><i class="fa fa-angle-right"></i> <a href="category.php?cat=Netflix">NETFLIX</a> </li>
                <li class=""><i class="fa fa-angle-right"></i> <a href="category.php?cat=HBO MAX">HBOX MAX</a> </li>
                <li class=""><i class="fa fa-angle-right"></i> <a href="category.php?cat=Disney Plus">DISNEY PLUS</a> </li>
              
              </ul>
              </div>
        </div>

        <div class="col-md-9 pl-4 pr-4">
        <div class="text-left">
            <div class="" style="border-bottom: 1px solid #000;">
                <h3 class="badge badge-primary custom-badge-light" style="margin-bottom: 0px;">TODAY'S DEALS</h3>
            </div>

    <!-- Todays Deals Slider -->

            <section class="deals-slider slider">
                
                <?php  

                $res = mysqli_query($conn, "SELECT * FROM products WHERE product_slider='todays_deal' ");
                while ($row=mysqli_fetch_array($res)) {
                
                ?>

            <div class="product position-relative">
                <div class="badge product-badge custom-badge-light"><?php echo $row["product_tag"] ?></div>
                <div class="custom-card p-0">
                    <img class="product-img img-fluid" src="./admin/<?php echo $row["product_img"] ?>">
                    <div class="p-2">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="py-2">$<?php echo $row["product_price"] ?></h5>
                            </div>
                            <div class="col-5">
                                <div class="rating py-2 m-0">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <h6 class="py-1"> <a href="product_details.php?id=<?php echo $row["id"] ?>"><?php echo $row["product_name"] ?></a> </h6>
                        <div class="row py-3">
                            <div class="col-12 text-center">
                                <a href="product_details.php?id=<?php echo $row["id"] ?>" class="btn custom-btn btn-block font-sm"><i class="fa fa-eye text-white" aria-hidden="true"></i> QUICK LOOK </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <?php

                }
                
                ?>

                </section>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- End Today's Deals section-->


    <!-- Latest Products-->
        <section id="latest_deals">
            <div class="container">
                <div class="text-left">
                        <div class="" style="border-bottom: 1px solid #000;">
                            <h3 class="badge badge-primary custom-badge-light" style="margin-bottom: 0px;">LATEST PRODUCTS</h3>
                        </div>
                        <section class="latests-slider slider">
                <?php  

                $res = mysqli_query($conn, "SELECT * FROM products WHERE product_slider='New' ");
                while ($row=mysqli_fetch_array($res)) {
                
                ?>

            <div class="product position-relative">
                <div class="badge product-badge custom-badge-light"><?php echo $row["product_tag"] ?></div>
                <div class="custom-card p-0">
                    <img class="img-fluid product-img" src="./admin/<?php echo $row["product_img"] ?>">
                    <div class="p-2">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="py-2">$<?php echo $row["product_price"] ?></h5>
                            </div>
                            <div class="col-5">
                                <div class="rating py-2 m-0">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <h6 class="py-1"> <a href="product_details.php?id=<?php echo $row["id"] ?>"><?php echo $row["product_name"] ?></a> </h6>
                        <div class="row py-3">
                          <!--  <div class="col-4 text-center">
                                <button class="btn custom-btn font-sm"><i class="fa fa-heart text-white" aria-hidden="true"></i></button>
                            </div> -->
                            <div class="col-12 text-center">
                                <a href="product_details.php?id=<?php echo $row["id"] ?>" class="btn custom-btn btn-block font-sm"><i class="fa fa-eye text-white" aria-hidden="true"></i> QUICK LOOK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <?php

                }
            ?>
                              </section>
                    </div>
            </div>
        </section>
    <!-- End Latest Products -->
    
    <!-- New arrivals -->

    <section class="py-5" style="background-color:#F6F7F8">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="position-relative my-3">
                        <img src="img/banner13.JPG" class="img-fluid">
                        <div class="dark-overlay"></div>
                        <div class="carousel-text text-center">
                            <h1 class="text-orange display-4"> HOT DEALS</h1>
                            <p class="pt-2">Upto 50% Off</p>
                            <a href="category.php?cat=Disney%20Plus&subcat=Yearly"><button class="btn custom-btn">BUY NOW</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="position-relative my-3">
                            <img src="img/banner10.JPG" class="img-fluid">
                            <div class="dark-overlay"></div>
                            <div class="carousel-text text-center">
                                <h1> New<br>Accounts</h1>
                                <p class="pt-3">30% Off</p>
                            </div>
                            <div class="light-overlay">
                                <div class="carousel-text">
                                    <div class="text-white">
                                        <a href="category.php?cat=Netflix&subcat=Basic" class="btn custom-btn btn-lg ml-2 mt-2">
                                            <div><div class="display-4"><i class="fa fa-plus-circle text-white" aria-hidden="true"></i></div>
                                            <h2>Explore</h2>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="position-relative mt-4">
                        <img src="img/hbomax.jpg" class="img-fluid">
                            <div class="dark-overlay"></div>
                            <div class="carousel-text text-center">
                                <h2> Big Sale</h2>
                                <p class="pt-3">30% Off</p>
                            </div>
                            <div class="light-overlay">
                                <div class="carousel-text">
                                    <div class="text-white">
                                        <a href="category.php?cat=HBO%20MAX&subcat=HBO%20Max%20Premuim" class="btn custom-btn btn-lg ml-2 mt-2">
                                            <div><div class="display-4"><i class="fa fa-plus-circle text-white" aria-hidden="true"></i></div>
                                            <h2>Explore</h2>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End New Arrivals -->

    
    <!-- Picked for you  -->

        <section>
            <div class="container">
                <div class="text-left">
                        <div class="" style="border-bottom: 1px solid #000;">
                            <h3 class="badge badge-primary custom-badge-light" style="margin-bottom: 0px;">PICKED FOR YOU</h3>
                        </div>
                        <section class="picks-slider slider">
                <?php

                $id1= rand(1,10);
                $id2= rand(1,10);
                $id3= rand(1,10);
                $id4= rand(1,10);
                $id5= rand(1,10);
                $id6= rand(1,10);
                $id7= rand(1,10);
                $id8= rand(1,10);

                $res = mysqli_query($conn, "SELECT * FROM products WHERE id IN ($id1,$id2,$id3,$id4,$id5,$id6,$id7,$id8) ");
                while ($row=mysqli_fetch_array($res)) {
                
                ?>

            <div class="product position-relative">
                <div class="badge product-badge custom-badge-light"><?php echo $row["product_tag"] ?></div>
                <div class="custom-card p-0">
                    <img class="img-fluid product-img" src="./admin/<?php echo $row["product_img"] ?>">
                    <div class="p-2">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="py-2">₹<?php echo $row["product_price"] ?></h5>
                            </div>
                            <div class="col-5">
                                <div class="rating py-2 m-0">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <h6 class="py-1"> <a href="product_details.php?id=<?php echo $row["id"] ?>"><?php echo $row["product_name"] ?></a> </h6>
                        <div class="row py-3">
                            <div class="col-12 text-center">
                                <a href="product_details.php?id=<?php echo $row["id"] ?>" class="btn custom-btn btn-block font-sm"><i class="fa fa-eye text-white" aria-hidden="true"></i> QUICK LOOK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <?php

                }
            ?>        
                        </section>
                    </div>
            </div>
        </section>

    <!-- End Picked for you -->


    <?php 
        include './inc/footer.php';
    ?>