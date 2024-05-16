<!doctype html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/bootstrap-4.4.1.css">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Link in some fonts — Not used because we finally installed the fonts
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
    -->

    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    
</head>
 <body id="bodyColor">
    <!-- Logo and navigation bar -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <div class="container-fluid">  
        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="index.html">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, one story at a time</p>
          </a>
        </div>
                 
        <!-- Collapsible Navbar Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Link Menu item button to the links class navbar-collapse selector -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <ul class="navbar-nav ml-auto"> <!-- Use mx-auto to align centre, default to left or use mr-auto -->
              <!-- nothing changed from Lab 5 -->
              <li class="nav-item">
                <a class="nav-link active" href="index.html" id="navHome">Home</a>
              </li>
              <!-- Added navAbout ID, do we use this? -->
              <li class="nav-item">
                  <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
              </li>
          
              <!-- Replace Dropdown from lab 5 with single nav lnk to models -->
              <li class="nav-item">
                <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Start 3D App SPA Contents -->
    <div class="container-fluid main_contents"> <!-- Start SPA Contents -->
        <!-- Home page block element -->
        
  
      <div id="home">
          <video autoplay muted loop class="video-background">
              <source src="assets/videos/coca_cola.mp4" type="video/mp4">
          </video>
          <div class="overlay"></div>
          <div id="main_text">
              <h1>When Coca-Cola is a Part of Your Life</h1>
              <p>You Can’t Beat the Feeling</p>
              <a href="https://www.coca-cola.com/gb/en" class="btn btn-primary">Discover More</a>
          </div>
      </div>
  
     
         <div id="house"> 
          <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-custom bg-light">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/site_images/coca_cola.jpg" class="card-img-left" alt="Coca Cola">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h9 class="card-title">Coca-Cola </h9>
                                    <p class="card-text"><h8>The Coca-Cola Company is an American corporation founded in 1892 and today engaged primarily 
                                      in the manufacture and sale of syrup and concentrate for Coca-Cola, a sweetened carbonated beverage that is a cultural 
                                      institution in the United States and a global symbol of American tastes.</h8></p>
                                </div>
                            </div>
                            <div class="col-md-2 learn-more">
                                <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-custom bg-light">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/site_images/sprite.jpg" class="card-img-left" alt="Sprite">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h9 class="card-title">Sprite</h9>
                                    <p class="card-text"><h8>It was the year 1961 when the Coca-Cola Company, feeling the pressure from the rising popularity of 7UP,
                                       decided to create a direct competitor in the lemon-lime soda category.</h8><br><br><h8>The result was a bolder, more intense flavor that would come to 
                                       be known as Sprite. Unlike its rival, Sprite was marketed more towards adults, positioning itself as a sophisticated, mature beverage that 
                                       could be enjoyed as a mixer or a standalone drink.</h8></p>
                                </div>
                            </div>
                            <div class="col-md-2 learn-more">
                                <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary btn-responsive">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
          
    
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-custom bg-light">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/site_images/dr_pepper.jpg" class="card-img-left" alt="Dr Pepper">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h9 class="card-title">Dr Pepper</h9>
                                    <p class="card-text"><h8>The intriguing tale of Dr Pepper’s invention is a journey through innovation and 
                                      creativity in the beverage world. This iconic drink, known for its distinctive flavor and widespread appeal, 
                                      emerged from a fusion of diverse tastes and cultural influences. The story behind its creation encapsulates a blend 
                                      of mystery and genius, weaving a rich narrative in the fabric of soft drink history.</h8></p>
                                </div>
                            </div>
                            <div class="col-md-2 learn-more">
                                <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary btn-responsive">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
           </div>
        </div>
      </div>
        <!-- About page block element -->
        <div id="about" >
          Insert About Contents
        </div> <!-- End home page -->

        
        <!-- Start X3D models and 3D Image Gallery -->
        <div id="models">
          <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
          <div class="row">
              <!-- X3D Models — Place 4 models in here for the assignment -->
              <div class="col-sm-8">
                  <div class="card text-left">
                      <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a id="navCoke" class="nav-link active" href="#">Coke</a>
                          </li>
                          <li class="nav-item">
                            <a id="navSprite" class="nav-link" href="#">Sprite</a>
                          </li>
                          <li class="nav-item">
                            <a id="navPepper" class="nav-link" href="#">Pepper</a>
                          </li>
                      </ul>
                      </div>
                      <div class="card-body">
                      <!-- Coke X3D model -->
                      <div id="coke">
                          <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d>
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/coke.x3d" > </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                      </div>
                      <!-- Sprite X3D model -->
                      <div id="sprite" style="display:none;">
                          <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d id="model">
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/sprite.x3d"> </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                      </div>
                      <!-- Pepper X3D model -->
                      <div id="pepper" style="display:none;">
                          <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d>
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/dr.pepper.x3d"> </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                          </div>
                      </div>
                  </div>
              </div>

              
              
                  
                
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                      <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                      <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
              
          </div> <!-- End row for X3D Model and Gallery -->
        </div> <!-- End X3D Models and Gallery -->

        <!-- 3D image gallery -->
        <div class="col-sm-12">
          <div class="card text-left">
              <div class="card-header gallery-header">
                  <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                      <a class="nav-link active" href="#">Gallery</a>
                  </li>
              </div>
              <div class="card-body">
                  <div class="card-title title_gallery drinksText"></div>
                  <div class="gallery" id="gallery"></div>
                  <div class="card-text description_gallery drinksText"></div>
              </div>
          </div> <!-- End gallery card -->
        </div>
                     

        <!-- Row to hold one card to hold the coke descriptive text, etc.-->
        <div id="cokeDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End coke description contents -->

        <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
        <div id="spriteDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End sprite description contents -->

        <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
        <div id="pepperDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End pepper description contents -->  

    </div>  <!-- End 3D App SPA Contents --> 

    <!-- Your 3D App footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2024 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            <div class="navbar-text social">
                  <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav> 

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="scripts/js/jquery-3.4.1.js"></script>
    <script src="scripts/js/popper.min.js"></script>
    <!--<script src="js/bootstrap.js"></script>-->
    <script src="scripts/js/bootstrap-4.4.1.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script src='scripts/js/x3dom.js'></script>

    <!-- Font Awesome Version 5 -->
    <!-- <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script> -->
    <!-- <script src="all.js"></script> -->

    <!-- Custom JavaScript code for your 3d App -->
    <!-- Also, intialises popovers-->
    <script src="scripts/js/custom.js" crossorigin="anonymous"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="scripts/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="scripts/js/gallery_generator.js"></script>

    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="scripts/js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="scripts/js/modelInteractions.js"></script>

    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script src="scripts/js/jquery.fancybox.min.js"></script>

</body>    
</html>
