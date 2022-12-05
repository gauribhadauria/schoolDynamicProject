<?php include "header.php";?> 
<?php $home= displayhomepage($conn); 
      ?>

  <body>
   <?php include "nav.php"; ?>
  <style>
    .background{
      background-image: url(img/schoolbackground.jpg);
      background-repeat: no-repeat;
    }
    .fadein{
      -webkit-animation: fadein 2s;
    }
    
    @keyframes fadein{
      from{opacity: 0;}
      to{opacity: 1;}
    }
  </style>
    <!-- Header Start -->
  <div class="container-fluid bg-light px-0 px-md-5 mb-5 background fadein">
    <!-- <div id="carouselExampleIndicators" class="carousel slide position-absolute" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/schback.jpg" style="width: 100%; height:600px"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/schoolbackground.jpg" style="width: 100%;height:600px"alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/sliderimg3.jpg" style="width: 100%;height:600px"alt="Third slide">
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
</div> -->
<div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
          <h4 class="text-dark mb-4 pt-5 mt-5 mt-lg-0"><?php echo (isset($home))? $home['heading']:"" ?></h4>
          <h1 class="display-3 font-weight-bold text-dark">
            <?php echo (isset($home))?$home['title']:"" ?>
          </h1>
          <p class=" text-dark mb-4">
            <?php echo (isset($home))?$home['paragraph']:"" ?>
          </p>
          <a href="" class="btn btn-warning mt-1 py-3 px-5">Learn More</a>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <img class="img-fluid mt-5" src="admin/<?php echo (isset($home))?$home['photo']:"" ?>" alt="" />
        </div>
      </div>  
        
  </div>
    <!-- Header End -->

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
      <div class="container pb-3">
        <div class="row">
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex  shadow-sm border-top rounded mb-4 fadein"
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
              class="d-flex shadow-sm border-top rounded mb-4 fadein"
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
              class="d-flex  shadow-sm border-top rounded mb-4 fadein"
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
              class="d-flex  shadow-sm border-top rounded mb-4 fadein"
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
              class="d-flex  shadow-sm border-top rounded mb-4 fadein"
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
              class="d-flex shadow-sm border-top rounded mb-4 fadein"
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

    <!-- About Start -->
    <div class="container-fluid py-5 " style="background-color: #ebcde9;">
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
                <img class="img-fluid rounded fadein" src="admin/<?php echo (isset($home))? $home['photo2']:"" ?>" alt="" />
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
            <a href="" class="btn btn-warning mt-2 py-2 px-4">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Class Start -->
    <div class="container-fluid pt-5" style="background-color:#a4d7c8 ;">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Popular Classes</span>
          </p>
          <h1 class="mb-4">Classes for Your Kids</h1>
        </div>
        <div class="row">
          <?php $classes= displayClasses($conn); 
            foreach ($classes as $key => $value) {
                ?>
                <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2 fadein" src="admin/<?php echo $value['image'] ;?>" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title"><?php echo $value['class'];?></h4>
                <p class="card-text">
                  <?php echo $value['content']; ?>
                </p>
              </div>  
             <!--  <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Age of Kids</strong>
                  </div>
                  <div class="col-6 py-1">3 - 6 Years</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Total Seats</strong>
                  </div>
                  <div class="col-6 py-1">40 Seats</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Class Time</strong>
                  </div>
                  <div class="col-6 py-1">08:00 - 10:00</div>
                </div>
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Tution Fee</strong>
                  </div>
                  <div class="col-6 py-1">$290 / Month</div>
                </div>
              </div> -->
              <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
            </div>
          </div>
                <?php
              }  
           ?>
          
          <!-- <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="img/class-2.jpg" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title">Language Learning</h4>
                <p class="card-text">
                  Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                  ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Age of Kids</strong>
                  </div>
                  <div class="col-6 py-1">3 - 6 Years</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Total Seats</strong>
                  </div>
                  <div class="col-6 py-1">40 Seats</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Class Time</strong>
                  </div>
                  <div class="col-6 py-1">08:00 - 10:00</div>
                </div>
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Tution Fee</strong>
                  </div>
                  <div class="col-6 py-1">$290 / Month</div>
                </div>
              </div>
              <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="img/class-3.jpg" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title">Basic Science</h4>
                <p class="card-text">
                  Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                  ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Age of Kids</strong>
                  </div>
                  <div class="col-6 py-1">3 - 6 Years</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Total Seats</strong>
                  </div>
                  <div class="col-6 py-1">40 Seats</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Class Time</strong>
                  </div>
                  <div class="col-6 py-1">08:00 - 10:00</div>
                </div>
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Tution Fee</strong>
                  </div>
                  <div class="col-6 py-1">$290 / Month</div>
                </div>
              </div>
              <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- Class End -->

    <!-- Registration Start -->
    <div class="container-fluid py-5" style="background-color: #e1c77a">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <p class="section-title pr-5">
              <span class="pr-2">Enquire Now</span>
            </p>
            <h1 class="mb-4">Enquire For Your Kid Now</h1>
            <p>
              Best Destination for complete development of your kid . Do enquire once about all the facilities we provide and also visit our school for having a view of healthy and kid friendly enviornment of our school.
            </p>
            <ul class="list-inline m-0">
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Healthy And kid friendly enviornment.
              </li>
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Development of child in all the expected area for complete development.
              </li>
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Learning in a fun way and focused over natural way of learning.
              </li>
            </ul>
            <a href="" class="btn btn-primary mt-4 py-2 px-4">Enquire Now</a>
          </div>
          <div class="col-lg-5">
            <div class="card border-0">
              <div class="card-header bg-secondary text-center p-4">
                <h1 class="text-white m-0">Enquire Now</h1>
              </div>
              <div class="card-body rounded-bottom bg-primary p-5">
                <form id="enquiry" >
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Your Name"
                      required="required"
                      name="name"
                      id="name"
                      
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="number"
                      class="form-control border-0 p-4"
                      placeholder="Contact number"
                      required="required"
                      name="contact"
                      id="contact"
                      maxlength="10"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control border-0 p-4"
                      placeholder="Your Email"
                      required="required"
                      name="email"
                      id="email"
                    />
                  </div>
                  
                  <div class="control-group">
                  <textarea
                    class="form-control border-0 p-4"
                    rows="2"
                    id="message"
                    placeholder="Message"
                    required="required"
                    name="message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                  <!-- <div class="form-group">
                    <select
                      class="custom-select border-0 px-4"
                      style="height: 47px"
                    >
                      <option selected>Select A Class</option>
                      <option value="1">Class 1</option>
                      <option value="2">Class 1</option>
                      <option value="3">Class 1</option>
                    </select>
                  </div> -->
                  <div>
                    <input type="hidden" name="enquiryform" id="enquiryform">
                    <button
                      class="btn btn-secondary btn-block border-0 py-3"
                      type="submit"
                      
                    >
                      Enquire Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration End -->

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
          <?php //$teacher=displayTeacher($conn);
            //foreach ($teacher as $key => $value) {
              ?>
              <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="admin/<?php //echo $value['photo'] ?>" alt="" />
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
            <h4><?php //echo $value['name']; ?></h4>
            <i>Music Teacher</i>
          </div>
 
         
        
        </div>
      </div>
    </div> -->
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5 "style="background-color: #bcd8f5">
      <div class="container p-0">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Testimonial</span>
          </p>
          <h1 class="mb-4">What Parents Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
          <?php $record=displaytestimonial($conn);
          foreach($record as $key => $value){
           ?>
             <div class="testimonial-item px-3">
            <div class="bg-light shadow-sm rounded mb-4 p-4">
              <h3 class="fas fa-quote-left text-primary mr-3"></h3>
              <?php echo $value['review']; ?>
            </div>
            <div class="d-flex align-items-center">
              <img
                class="rounded-circle"
                src="admin/<?php echo $value['photo']; ?>"
                style="width: 70px; height: 70px"
                alt="Image"
              />
              <div class="pl-3">
                <h5><?php echo $value['name'] ?></h5>
                <i><?php echo $value['profession'] ?></i>
              </div>
            </div>
          </div>
           <?php 
         }
           ?>
          

         
          <!-- <div class="testimonial-item px-3">
            <div class="bg-light shadow-sm rounded mb-4 p-4">
              <h3 class="fas fa-quote-left text-primary mr-3"></h3>
              Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
              eirmod clita lorem. Dolor tempor ipsum clita
            </div>
            <div class="d-flex align-items-center">
              <img
                class="rounded-circle"
                src="img/testimonial-2.jpg"
                style="width: 70px; height: 70px"
                alt="Image"
              />
              <div class="pl-3">
                <h5>Parent Name</h5>
                <i>Profession</i>
              </div>
            </div>
          </div>
          <div class="testimonial-item px-3">
            <div class="bg-light shadow-sm rounded mb-4 p-4">
              <h3 class="fas fa-quote-left text-primary mr-3"></h3>
              Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
              eirmod clita lorem. Dolor tempor ipsum clita
            </div>
            <div class="d-flex align-items-center">
              <img
                class="rounded-circle"
                src="img/testimonial-3.jpg"
                style="width: 70px; height: 70px"
                alt="Image"
              />
              <div class="pl-3">
                <h5>Parent Name</h5>
                <i>Profession</i>
              </div>
            </div>
          </div>
          <div class="testimonial-item px-3">
            <div class="bg-light shadow-sm rounded mb-4 p-4">
              <h3 class="fas fa-quote-left text-primary mr-3"></h3>
              Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
              eirmod clita lorem. Dolor tempor ipsum clita
            </div>
            <div class="d-flex align-items-center">
              <img
                class="rounded-circle"
                src="img/testimonial-4.jpg"
                style="width: 70px; height: 70px"
                alt="Image"
              />
              <div class="pl-3">
                <h5>Parent Name</h5>
                <i>Profession</i>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <!-- <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Latest Blog</span>
          </p>
          <h1 class="mb-4">Latest Articles From Blog</h1>
        </div>
        <div class="row pb-3">
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Diam amet eos at no eos</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="img/blog-2.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Diam amet eos at no eos</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="img/blog-3.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Diam amet eos at no eos</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Blog End -->

   <?php include "footer.php" ?>
<script type="text/javascript">
  $(document).ready(function(){ 
    $("#enquiry").submit(function(){

      $.ajax({
        url:"function.php",
        method:"POST",
        data: new FormData(this),
        success: function(res){
        alert(res)
         window.location.reload(); 
        },
        cache:false,
        contentType:false,
        processData:false
      })
    })
  })
</script>