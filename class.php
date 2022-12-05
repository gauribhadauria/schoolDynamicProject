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
        <h3 class="display-3 font-weight-bold text-white"style="margin-top: 150px;">Our Classes</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Our Classes</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

     <!-- Class Start -->
    <div class="container-fluid pt-5">
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
              <img class="card-img-top mb-2" src="admin/<?php echo $value['image'] ;?>" alt="" />
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
              <!-- <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a> -->
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
   <div class="container-fluid py-5">
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