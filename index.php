<!doctype html>
<html lang="en">
    
    <?php include 'layout/header.php'; ?>

    <body>

    <!-- Header -->
        
    <?php include 'layout/nav.php'; ?>

    <!-- End Header -->
    <?php  $pageTitle = "Page Title"; ?>

    <!-- Begin #carousel-section -->
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn">
            <div class="row">
                <div id="carousel-1" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Begin Slide 1 -->
                        <div class="item active">
                            <img src="assets/img/slider/home_banner.png" height="400" alt="Image of first carousel">
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs">We enjoy developing great software, </h3>
                                <h3 class="carousel-title hidden-xs"><a>And helping others do the same.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->


    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Art lab lets you do everything</h3>
                    <a><p class="services-header-body"><em> Solutions focused on people </em>  </p><hr></a>
                </div>
            </div>
      
            <!-- Begin Services Row 1 -->
            <div class="row services-row services-row-head services-row-1">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animated fadeInLeft">
                    <img class="office-logo" src="assets/img/slider/images3.png" alt="art-lab">
                    <h4 class="services-title"><a>Collaboration</a></h4>
                    <p class="services-body">We collaborate with non technical entrepreneurs to enable the building, launching and growth of successful tech businesses.</p>
                    
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animated zoomIn">
                    <img class="office-logo" src="assets/img/slider/images2.png" alt="art-lab">
                    <h4 class="services-title"><a>New Entrepreneurs</a></h4>
                    <p class="services-body">We specialise in helping non technical first time founders go from idea to launch, guiding you step by step.</p>
                    
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animated fadeInRight">
                    <img class="office-logo" src="assets/img/slider/images1.png" alt="art-lab">
                    <h4 class="services-title"><a>Experienced Entrepreneurs</a></h4>
                    <p class="services-body">You know what you want to build and need a tech partner to accelerate your journey from idea to launch.</p>
                    
                </div>
            </div>
            <!-- End Serivces Row 1 -->
    
        </div>      
    </section>
    <!-- End #services-section -->


    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>

  </body>
</html>
