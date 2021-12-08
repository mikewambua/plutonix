<?php
   include('path.php');
   include(ROOT_PATH . '/app/includes/header.php');
   include(ROOT_PATH . '/app/includes/navbar.php');
   include(ROOT_PATH . '/admin/database/dbconfig.php');
?>
    <!--Start Page loader -->
    <!-- <div id="pageloader">   
        <div class="loader">
          <-- <img src=" '/assets/uploads/images/progress.gif'?>" alt='loader' /> -->
        <!-- </div> -->
   <!-- </div> --> 
   <!--End Page loader -->
   
  
  <!-- =====================Image Slider================-->
    <div id="slides" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <li data-bs-target="#slides" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#slides" data-bs-slide-to="1"></li>
            <li data-bs-target="#slides" data-bs-slide-to="2"></li>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"> 
                <img src="img/slide.jpg" class="img-fluid">
                <div class="carousel-caption">
                    <h2 class="display-2">Growing with Technology</h2>
                    <h4>Improve your business productivity by using cutting edge technology</h4>
                    <a href="#"class="btn btn-outline-light btn-lg">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="img-fluid" >
                <div class="carousel-caption">
                    <h2 class="display-2">Programming Solutions</h2>
                    <h4>Improve your business productivity by using cutting edge technology</h4>
                    <a class="btn btn-primary btn-lg" 
                        href="#">Contact Us</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" class="img-fluid" >
                <div class="carousel-caption">
                    <h2 class="display-2">Business and Data Analytics</h2>
                    <h4>Improve your business productivity by using cutting edge technology</h4>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal"
                    data-bs-target="#contactus"> Request a Quote</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slides"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slides" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--==================Jumbotron==============-->
    <div class="container-fluid">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p class="lead">How is consumer desire transformed by contemporary technology? Most extant theory holds that technology rationalizes and reduces passion. In our investigation of networks of desire—complex open systems of machines, consumers, energy, and objects—we find technology increasing the passion to consume.
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="#" class="btn btn-outline-secondary btn-lg">Contact Us</a>
            </div>
        </div>
    </div>

    <!--====================Welcome Section==============-->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h2 class="display-4"> Why Choose US?</h2>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">There's no denying thke fact that customer service is important to a small or mid-sized business. The quality of that service will either enhance or degrade customer loyalty to your brand and your business. With the economy in recession, customers have more alternatives than ever. The business that proves to be responsive to customer questions, complaints, or other needs can gain a clear competitive advantage. That's why it's so important to understand how new technologies can help you anticipate customer needs, tailor business processes to best serve customers, and ultimately improve the efficiency of your business – the latter of which can keep costs down.
                </p>
            </div>
        </div>
    </div>

    <!--=================Three Column Section-->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-binoculars"></i>
                <h2>Data Analytics</h2>
                <p>We provide data analytics to our clients to uncover the insights encrypted in data</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-business-time"></i>    
                <h2>Telecommunication Services</h2>
                <p>We provide data analytics to our clients to uncover the insights encrypted in data</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <i class="fas fa-laptop"></i>
                <h2>Programming</h2>
                <p>We provide data analytics to our clients to uncover the insights encrypted in data</p>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!--===================Two Columns Section====================-->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>Business Solutions...</h2>
                <p>Up to this point, the customer is sovereign: the process aims to determine what customers perceive to be optional shopping conditions among the many pertaining to distribution and related services.
                </p>
                <p>Up to this point, the customer is sovereign: the process aims to determine what customers perceive to be optional shopping conditions among the many pertaining to distribution and related services.
                </p>
                <p>Up to this point, the customer is sovereign: the process aims to determine what customers perceive to be optional shopping conditions among the many pertaining to distribution and related services.
                </p>
                <br>
                <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="img/slide.jpg" class="img-fluid">
            </div>
        </div>
    </div>

<hr class="my-4">
<!--===================Fixed Background===================-->
<Section>
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>
</section>



<!--===================Meet the Team===================-->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h2 class="display-4">Meet the Team</h2>
            </div>
            <hr>
        </div>
    </div>

    <!--===================Cards===================-->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/team1.png">
                    <div class="card-body">
                        <h4 class="card-title">Micaiah Kilonzo</h4>
                        <p class="card-text">Micaiah is an Electrical and Electronics engineer with 5+ years of experience...</p>                
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/team2.png">
                    <div class="card-body">
                        <h4 class="card-title">Sharon Wambua</h4>
                        <p class="card-text">Sharon is an experienced web designer and web developer with 5+ years of experience...</p>                
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/team3.png">
                    <div class="card-body">
                        <h4 class="card-title">Michael Wambua</h4>
                        <p class="card-text">Michael is a Software engineer with 5+ years of experience...</p> 
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--===================Our Philosophy===================-->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2>Our Philosophy</h2>
                <p>Up to this point, the customer is sovereign: the process aims to determine what customers perceive to be optional shopping conditions among the many pertaining to distribution and related services.
                </p>
                <p>Up to this point, the customer is sovereign: the process aims to determine what customers perceive to be optional shopping conditions among the many pertaining to distribution and related services.
                </p>
                <p>Up to this point, the customer is sovereign: the process aims to determine what customers perceive to be optional shopping conditions among the many pertaining to distribution and related services.
                </p>
                <br>
            </div>
            <div class="col-lg-6">
                <img src="img/slide2.jpg" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>

<!--===================Social Media===================-->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>Connect</h2>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

<?php
   include(ROOT_PATH . '/app/includes/scripts.php');
   include(ROOT_PATH . '/app/includes/footer.php');
?>
   