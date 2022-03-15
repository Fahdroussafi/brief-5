<!-- Custom styles for this template -->
<link href="./views/includes/css/carousel.css" rel="stylesheet">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
       
            <form method="post" class="me-3">
                <div class="form-white input-group" style="width: 250px;">
                    <input type="text" name="search" class="form-control rounded" placeholder="Search or jump to... ( / )" aria-label="Search" aria-describedby="search-addon" />
                    <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>showvols">Flight Reserved</a>
                </li>
            </ul>
             <ul class="navbar-nav d-flex flex-row ms-auto me-3">
  
                    <!-- <button type="button" class="btn btn-primary" href="<?php echo BASE_URL ?>login">Login</button> -->
                    <!-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown1"> -->
                        <li><a class="btn btn-primary" href="<?php echo BASE_URL ?>login">Login</a></li>
                </ul>
            <!-- </ul> -->
        </div>
    </div>
</nav>


<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./views/includes/images/img4.jpg" class="d-block w-100">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>San Francisco</h1>
                        <p>The Golden Gate Bridge is a suspension bridge spanning the Golden Gate, the one-mile-wide strait connecting San Francisco Bay and the Pacific Ocean.</p>
                        <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo BASE_URL; ?>login">Log in</a></p> -->
                        <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo BASE_URL; ?>logout">Log out</a></p> -->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./views/includes/images/img1.jpg" class="d-block w-100">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>The Caribbean</h1>
                        <p>The Caribbean is a region of the Americas that comprises the Caribbean Sea, its surrounding coasts, and its islands.</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./views/includes/images/h1.jpg" class="d-block w-100">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Marakesh</h1>
                        <p>Jama lfna, the main square of Marrakesh, used by locals and tourists</p>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="./views/includes/images/pt2.jpg" class="rounded-circle" width="100" height="100" focusable="false">
                <rect width="100%" height="100%" fill="#777" />

                <h2>Victorine Andréa</h2>
                <p> Extremely pleasant experience. Super friendly staff, especially flight attendant name Kylarah and Lithuanian flight attendant.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="./views/includes/images/pt3.png" class="rounded-circle" width="100" height="100" focusable="false">
                <rect width="100%" height="100%" fill="#777" />

                <h2>Naliaka Chinyelu</h2>
                <p>Highly recommend. Cabin staff great, friendly and pleasant. Always smiling. Seat fine though after 13 hours they got hard! Food fine.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="./views/includes/images/pt4.jpg" class="rounded-circle" width="100" height="100" focusable="false">
                <rect width="100%" height="100%" fill="#777" />

                <h2>Flora Ariane</h2>
                <p>This airline was above expectations. The check-in opened on time. The staff where very helpful and gave me a seat with extra leg room.</p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">FLYING MADE SIMPLE</h2>
                <p class="lead">We are simplifying the travel experience from booking to flying and giving you more control. Learn how we're eliminating change fees and making it easier to adjust your travel plans.</p>
            </div>
            <div class="col-md-5">
                <img src="./views/includes/images/seat1.jpg" class="img-fluid" width="500" height="500" focusable="false">
                <rect width="100%" height="100%" fill="#eee" /></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">WHAT ARE THE LATEST TRAVEL UPDATES?</h2>
                <p class="lead">Information is more important than ever. We pledge to share updates with you as quickly as possible, with full transparency and, as always, with your safety foremost in mind.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="./views/includes/images/seat22.jpg" class="img-fluid" width="500" height="500" focusable="false">
                <rect width="100%" height="100%" fill="#eee" /></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">CLEAN TRAVEL EXPERIENCE</h2>
                <p class="lead">We're doing everything we can to deliver a safe, healthy and clean travel experience. Caring for our customers and employees is our top priority. </p>
            </div>
            <div class="col-md-5">
                <img src="./views/includes/images/seat3.jpg" class="img-fluid" width="500" height="500" focusable="false">
                <rect width="100%" height="100%" fill="#eee" /></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2021–2022 Flights, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>

</body>

</html>