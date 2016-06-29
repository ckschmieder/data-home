<?php
/**
 * Template Name: DataMotion Home-Dev Template
 */
?>

<?php get_header(); ?>

<style type="text/css">

	body .row {
	  width: 100%;
	  max-width: 946px;
	  min-width: 720px;
	  margin: 0 auto;
	  padding-left: 36px;
	  padding-right: 36px;
	  clear: both;
	}

	section.home-section .text {
	  font-size: 10px;
	}

	@media screen and (min-width: 960px) {
	  section.home-section .text {
	    font-size: 16px;
	  }
	}
	@media screen and (min-width: 720px) {
	  section.home-section .text {
	    font-size: 14px;
	  }
	}
	@media screen and (min-width: 600px) {
	  section.home-section .text {
	    font-size: 12px;
	  }
	}
	section.home-section {
	  position: relative;
	  border-top: 2px solid orange;
	}
	section.home-section .section-inner {
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  top: 0;
	  left: 0;
	  bottom: 0;
	  right: 0;
	  padding: 5em 4em;
	}
	section.home-section h1,
	section.home-section h2,
	section.home-section h3,
	section.home-section p {
	  font-family: "proxima-nova";
	}
	section.home-section h1 {
	  font-size: 1.6875em;
	}
	section.home-section h2 {
	  font-size: 1.4375em;
	}
	section.home-section p {
	  font-size: 1em;
	}
	section.home-section img {
	  width: 100%;
	}
	section.home-section .text {
	  z-index: 9999999;
	  max-width: 35%;
	}
	section.home-section .text.left {
	  float: left;
	}
	section.home-section .text.right {
	  float: right;
	}

	section#video .video-container {
	  z-index: 99999999;
	}
	section#video .container {
	  height: 100%;
	}
	section#video .container .row {
	  height: 100%;
	}
	section#video .container .row div {
	  height: 100%;
	}

	section#lock {
	  background-image: url("https://www.datamotion.com/wp-content/uploads/2016/06/DM-Tile-4.jpg");
	  background-size: cover;
	}

	.video-container {
	  width: 100%;
	}

	section#hero-2 {
	  background-image: url("https://www.datamotion.com/wp-content/uploads/2016/06/DM-Tile-5.jpg");
	  background-size: cover;
	}

	section#social {
	  background-image: url("https://www.datamotion.com/wp-content/uploads/2016/06/DM-Tile-6.jpg");
	  background-size: cover;
	}

	.slick-slide {
	  margin: 0 20px;
	}
	.slick-slide a:hover {
	  text-decoration: none;
	}
	.slick-slide img {
	  padding: 15px 0;
	  margin: 0 auto;
	  max-height: 140px;
	  border-bottom: 7px solid gray;
	  -webkit-filter: grayscale(1);
	  filter: grayscale(1);
	}
	.slick-slide p {
	  margin-top: 10px;
	  text-align: center;
	  text-decoration: none;
	  visibility: hidden;
	}

	.slick-slide:hover img,
	.slick-slide:active img {
	  border-bottom: 7px solid purple;
	  -webkit-filter: grayscale(0);
	  filter: grayscale(0);
	}
	.slick-slide:hover p,
	.slick-slide:active p {
	  visibility: visible;
	}

	body {
	  padding-top: 70px;
	  /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
	}

	.portfolio-item {
	  margin-bottom: 25px;
	}

	footer {
	  margin: 50px 0;
	}

	.flex-wrap.logos-wrap {
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-pack: justify;
	  -webkit-justify-content: space-between;
	      -ms-flex-pack: justify;
	          justify-content: space-between;
	}
	.flex-wrap.logos-wrap .case-logo {
	  width: 19%;
	}


</style>

    <div class="row">

    <section id="hero" class="home-section nav-section">

      <div><img src="https://www.datamotion.com/wp-content/uploads/2016/06/DM-Tile-1.jpg"></div>
      <div class="section-inner">
        <div class="text left">
          <h1>Protect your data -</br>and your reputation</h1>
          <p>Send secure, compliant messages,</br>email and files anywhere, to anywhere.</p>
        </div>
      </div>


    </section>

    <section id="video" class="home-section">
      <div><img src="https://www.datamotion.com/wp-content/uploads/2016/06/DM-Tile-2.jpg"></div>
      <div class="section-inner">

        
          <div class="col-md-7">
            <div class="video-container">

              <iframe src="http://www.youtube.com/embed/MP24gyjVuuM" frameborder="0"></iframe>

            </div>
          </div>
          <div class="col-md-5">
            <div class="text right">
              <h2>Security & compliance</br>- it's required</h2>
              <p>Securing communications containing PHI and PII is not optional - it's a legal requirement.</p>
            </div>
          </div>
        </div>

     
    </section>


    <section id="logo-success" class="home-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-md-5">
              <h2 class="section-title">A platform for success</h2>
              <p>See how others protect their data and streamline their workflows.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="gallery gallery-responsive portfolio_slider">
              <div class="inner">
                <a href="#">
                  <img class="logo-slide img-responsive portfolio-item" src="https://www.datamotion.com/wp-content/uploads/2016/06/dell_blue_rgb-222-140.jpg" alt="">
                  <p>View Case Study</p>
                </a>
              </div>
              <div class="inner">
                <a href="#">
                  <img class="logo-slide img-responsive portfolio-item" src="https://www.datamotion.com/wp-content/uploads/2016/06/guardian1.jpg" alt="">
                  <p>View Case Study</p>
                </a>
              </div>
              <div class="inner">
                <a href="#">
                  <img class="logo-slide img-responsive portfolio-item" src="https://www.datamotion.com/wp-content/uploads/2016/06/sunlifefinancial.jpg" alt="">
                  <p>View Case Study</p>
                </a>
              </div>
              <div class="inner">
                <a href="#">
                  <img class="logo-slide img-responsive portfolio-item" src="https://www.datamotion.com/wp-content/uploads/2016/06/salesforce_logo_detail.png" alt="">
                  <p>View Case Study</p>
                </a>
              </div>
              <div class="inner">
                <a href="#">
                  <img class="logo-slide img-responsive portfolio-item" src="https://www.datamotion.com/wp-content/uploads/2016/06/Rite_Aid_Pharmacy.jpg" alt="">
                  <p>View Case Study</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /#logo-success -->

    <!--   <section id="lock" class="section">
    <div class="row">
      <div class="col-md-5">
        <h3>Build in security & compliance</h3>
        <p>Power your communication work flows & apps using our complete set of standard connectors, SDKs & APIs</p>
      </div>
    </div>
  </section> -->

    <section id="lock" class="home-section nav-section">
      <div><img src="https://www.datamotion.com/wp-content/uploads/2016/06/DM-Tile-4.jpg"></div>
      <div class="section-inner">
        <div class="text right">
          <h2>Build in security & compliance</h2>
          <p>Power your communication work flows & apps using our complete set of standard connectors, SDKs & APIs</p>
        </div>
    </section>

    <section id="cross" class="home-section nav-section">
      
        <div><img src="https://www.datamotion.com/wp-content/uploads/2016/06/DM-Tile-5.jpg"></div>
      <div class="section-inner">
        <div class="text left">
          <h2>Security & compliance shouldn't slow you down</h2>
          <p>Streamline communications and accelerate positive outcomes while raising your security & compliance profile.</p>
        </div>
      </div>
      </div>
    </section>
    <!--   <section id="hero-2" class="section nav-section">
    <div class="row">
      <div class="col-md-5">
        <h3>Security & compliance shouldn't slow you down</h3>
        <p>Streamline communications and accelerate positive outcomes while raising your security & compliance profile.</p>
      </div>
      <div class="col-md-7">
      </div>
    </div>
  </section> -->
    <!-- /#hero -->
    <section id="social" class="home-section nav-section">
      <!-- Hero Section -->
      <div class="row">
        <div class="col-md-5">
          <h3>Stay up to date with us...</h3>

        </div>
        <div class="col-md-7">
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /#hero -->
    <hr>

  </div>




<?php get_footer(); ?>