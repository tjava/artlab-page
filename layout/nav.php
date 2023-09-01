<nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
    <div class="container">
    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand wow fadeInDownBig" href="/"><img class="office-logo" src="assets/img/slider/Office.png" alt="art-lab"></a>      
        </div>
    
        <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav pull-right">
                <li  <?php if(getTitle() == "Artlab") { ?> class="active" <?php } ?>>
                    <a href="/">Home</a>
                </li>
                <li  <?php if(getTitle() == "About") { ?> class="active" <?php } ?>>
                    <a href="about">About</a>
                </li>
                <li <?php if(getTitle() == "Services") { ?> class="active" <?php } ?>>
                    <a href="services">Services</a>
                </li>
                <li <?php if(getTitle() == "Products") { ?> class="active" <?php } ?>>
                    <a href="products">Products</a>
                </li>
                <li <?php if(getTitle() == "Team") { ?> class="active" <?php } ?>>
                    <a href="team">Team</a>
                </li>
                <li <?php if(getTitle() == "Contact") { ?> class="active" <?php } ?>>
                    <a href="contact"><span>Contact</span></a>
                </li>
            </ul>         
        </div>
    </div>
</nav>