<?php include "header.php";?> 
<?php $home= displayhomepage($conn); 
      ?>

  <body>
   <?php include "nav.php"; ?>

    <!-- Header Start -->
    <div class="container-fluid mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px;
        background-image: url(img/schoolbanner.jpg);
        background-size: cover"
      >
        <h3 class="display-3 font-weight-bold text-white" style="margin-top: 150px;">About Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">About Us</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
   <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="img/about-1.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2"><?php echo (isset($home))? $home['heading2']:"" ?></span>
            </p>
            <h1 class="mb-4"><?php echo (isset($home))? $home['title2']:"" ?></h1>
            <p>
              <?php echo (isset($home))? $home['paragraph2']:"" ?>
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="admin/<?php echo (isset($home))? $home['photo2']:"" ?>" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i><?php echo (isset($home))? $home['aboutli1']:"" ?>
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i><?php echo (isset($home))? $home['aboutli2']:"" ?>
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i><?php echo (isset($home))? $home['aboutli3']:"" ?>
                  </li>
                </ul>
              </div>
            </div>
            <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
      <div class="container pb-3">
        <div class="row">
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex  shadow-sm border-top rounded mb-4"
              style="padding: 30px;
                  background-color: #ebcde9;"
            >
              <i
                class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4 ">
                <h4>Play Ground</h4>
                <p class="m-0">
                  open and large playground is provided for the kids . Full of green trees and fresh flowers . 
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex shadow-sm border-top rounded mb-4"
              style="padding: 30px;
              background-color: #a4d7c8;"
            >
              <i
                class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>Music and Dance</h4>
                <p class="m-0">
                  Music and Dance trainin is also available for kids by experts.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex  shadow-sm border-top rounded mb-4"
              style="padding: 30px;
              background-color: #e1c77a;
               "
            >
              <i
                class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>Arts and Crafts</h4>
                <p class="m-0">
                  Very special art and craft session is provided for all kids to make their studies more interesting and interactive.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex  shadow-sm border-top rounded mb-4"
              style="padding: 30px;
              background-color: #a4d7c8"
            >
              <i
                class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>Safe Transportation</h4>
                <p class="m-0">
                  School bus survice is provided at your door step . Following all the safety procedure.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex  shadow-sm border-top rounded mb-4"
              style="padding: 30px;
              background-color: #e1c77a"
            >
              <i
                class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>Healthy food</h4>
                <p class="m-0">
                  We also provide lunch in the school itself . It becomes fun for kids and they also learn feeding manner gradually.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex shadow-sm border-top rounded mb-4"
              style="padding: 30px;
                  background-color: #ebcde9;"
            >
              <i
                class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>Educational Tour</h4>
                <p class="m-0">
                  We focused on learning by doing . By Educational tour we try to increase practical knowledge of our kid .
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facilities Start -->

    <!-- Team Start -->
    <!-- <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Teachers</span>
          </p>
          <h1 class="mb-4">Meet Our Teachers</h1>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="img/team-1.jpg" alt="" />
              <div
                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
              >
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <h4>Julia Smith</h4>
            <i>Music Teacher</i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="img/team-2.jpg" alt="" />
              <div
                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
              >
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <h4>Jhon Doe</h4>
            <i>Language Teacher</i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
              <div
                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
              >
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <h4>Mollie Ross</h4>
            <i>Dance Teacher</i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="img/team-4.jpg" alt="" />
              <div
                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
              >
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center px-0"
                  style="width: 38px; height: 38px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <h4>Donald John</h4>
            <i>Art Teacher</i>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Team End -->

     <?php include "footer.php" ?>
