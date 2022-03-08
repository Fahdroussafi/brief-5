
<!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    
    <!-- Custom styles for this template -->
    <link href="./Views/includes/css/carousel.css" rel="stylesheet">


<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="img/Logo1.png"></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                </ul>
            </div>
        </div>
    </nav>
</header>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img4.jpg" class="d-block w-100">

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>San Francisco</h1>
                        <p>The Golden Gate Bridge is a suspension bridge spanning the Golden Gate, the one-mile-wide strait connecting San Francisco Bay and the Pacific Ocean.</p>
                        <p><a class="btn btn-lg btn-primary" href="<?php echo BASE_URL; ?>logout">Log out</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img1.jpg" class="d-block w-100">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>The Caribbean</h1>
                        <p>The Caribbean is a region of the Americas that comprises the Caribbean Sea, its surrounding coasts, and its islands.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/h1.jpg" class="d-block w-100">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Marakesh</h1>
                        <p>Jama lfna, the main square of Marrakesh, used by locals and tourists</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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
                <img src="img/pt2.jpg" class="rounded-circle" width="100" height="100" focusable="false">
                <rect width="100%" height="100%" fill="#777" />

                <h2>Victorine Andréa</h2>
                <p> Extremely pleasant experience. Super friendly staff, especially flight attendant name Kylarah and Lithuanian flight attendant.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="img/pt3.png" class="rounded-circle" width="100" height="100" focusable="false">
                <rect width="100%" height="100%" fill="#777" />

                <h2>Naliaka Chinyelu</h2>
                <p>Highly recommend. Cabin staff great, friendly and pleasant. Always smiling. Seat fine though after 13 hours they got hard! Food fine.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="img/pt4.jpg" class="rounded-circle" width="100" height="100" focusable="false">
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
                <img src="img/seat1.jpg" class="img-fluid" width="500" height="500" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="img/seat22.jpg" class="img-fluid" width="500" height="500" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="img/seat3.jpg" class="img-fluid" width="500" height="500" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
