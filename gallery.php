<?php include "header.php";?> 


  <body>
   <?php include "nav.php"; ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px;
        background-image: url(img/schoolbanner.jpg);
        background-size: cover"
      >
        <h3 class="display-3 font-weight-bold text-white"style="margin-top: 150px;">Gallery</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Gallery</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
      <div class="container">
        
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Gallery</span>
          </p>
          <h1 class="mb-4">Our Kids School Gallery</h1>
        </div>
        <div>
          
        <div class="row">
         
          <!-- <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
             <li class="btn btn-outline-primary m-1 active" data-filter="*">
                All
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".first">
                Playing
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".second">
                Drawing
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".third">
                Reading
              </li>
              
            </ul>
          </div> -->  
        
        </div>
        <div class="row portfolio-container">
           <?php $galary=displayGalary($conn);
            foreach ($galary as $key => $value) {
              ?>
           <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
              <div class="position-relative overflow-hidden mb-2">
                <img class="img-fluid w-100" src="admin/<?php echo $value['photo'];?>" alt=""/>
              
                <div
                  class="portfolio-btn bg-primary d-flex align-items-center justify-content-center" 
                >
                  <a href="admin/<?php echo $value['photo'];?>" data-lightbox="portfolio">
                    <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                  </a>
                </div>
              </div>  
            </div>

          <!-- -- -->
        
         <?php 
        }
        ?>
      </div>
     
      </div>
    </div>
    <!-- Gallery End -->

    <?php include "footer.php" ?>