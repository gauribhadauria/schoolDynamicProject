<?php include "header.php";?> 
 <?php $record= displayaccount($conn); ?>



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
        <h3 class="display-3 font-weight-bold text-white"style="margin-top: 150px;">Contact Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Contact Us</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Get In Touch</span>
          </p>
          <h1 class="mb-4">Contact Us For Any Query</h1>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-5">
            <div class="contact-form">
              <!-- <div id="success"></div> -->
              <form name="sentMessage" id="enquiry" novalidate="novalidate">
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    required="required"
                    data-validation-required-message="Please enter your name"
                    name="name"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Your Email"
                    required="required"
                    data-validation-required-message="Please enter your email"
                    name="email"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="number"
                    class="form-control"
                    id="contact"
                    placeholder="contact"
                    required="required"
                    data-validation-required-message="Please enter contact number"
                    name="contact"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    id="message"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Please enter your message"
                    name="message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
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
          
          <div class="col-lg-5 mb-5">
            <p>
              <?php echo (isset($record))?$record['footercontent']:"" ?>
            </p>
            <div class="d-flex">
              <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                <p><?php echo(isset($record))?$record['address']:"" ?></p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                <p><?php echo (isset($record))?$record['email']:"" ?></p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Phone</h5>
                <p><?php echo (isset($record))?$record['contact']:"" ?></p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Opening Hours</h5>
                <strong>Monday - Saturday:</strong>
                <p class="m-0">08:00 AM - 04:00 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

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