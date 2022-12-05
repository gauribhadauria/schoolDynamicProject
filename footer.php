 <!-- Footer Start -->
 <?php $record= displayaccount($conn); ?>
    <div
      class="container-fluid  text-white mt-5 py-5 px-sm-3 px-md-5"
      style="min-height: 350px;
        background-image: url(img/schoolbanner.jpg);
        background-size: cover"
     >
      <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
          <a
            href=""
            class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
            style="font-size: 40px; line-height: 40px"
          >
             <img class="img-fluid " src="admin/<?php echo(isset($record))?$record['logo']:"" ?>" alt="school" width="100px" height="50px">
          </a>
          <p>
           <?php echo (isset($record))?$record['footercontent']:"" ?>
          </p>
          <div class="d-flex justify-content-start mt-4">
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="<?php echo (isset($record))?$record['twitter']:"" ?>"
              ><i class="fab fa-twitter"></i
            ></a>
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="<?php echo (isset($record))?$record['youtube']:"" ?>"
              ><i class="fab fa-youtube"></i
            ></a>
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="<?php echo (isset($record))?$record['facebook']:"" ?>"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="<?php echo (isset($record))?$record['linkedin']:"" ?>"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="<?php echo (isset($record))?$record['instagram']:"" ?>"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          
          <h3 class="text-primary mb-4">Get In Touch</h3>
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Address</h5>
              <p><?php echo(isset($record))?$record['address']:"" ?></p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              <p><?php echo (isset($record))?$record['email']:"" ?></p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Phone</h5>
              <p><?php echo (isset($record))?$record['contact']:"" ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Quick Links</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="index.php"
              ><i class="fa fa-angle-right mr-2"></i>Home</a
            >
            <a class="text-white mb-2" href="about.php"
              ><i class="fa fa-angle-right mr-2"></i>About Us</a
            >
            <a class="text-white mb-2" href="class.php"
              ><i class="fa fa-angle-right mr-2"></i>Our Classes</a
            >
            <a class="text-white mb-2" href="team.php"
              ><i class="fa fa-angle-right mr-2"></i>Our Teachers</a
            >
            <a class="text-white mb-2" href="gallery.php"
              ><i class="fa fa-angle-right mr-2"></i>Galary</a
            >
            <a class="text-white" href="contact.php"
              ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
            >
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Enquire Now</h3>
          <form id="enquiryfooter">
            <div class="form-group">
              <input
                type="text"
                class="form-control border-0 py-4"
                placeholder="Your Name"
                required="required"
                name="name"
                id="name"  
                 
              />
            </div>
            <div class="form-group">
              <input
                type="email"
                class="form-control border-0 py-4"
                placeholder="Your Email"
                required="required"
                name="email"
                id="email"
              />
            </div>
            <div class="form-group">
              <input
                type="number"
                class="form-control border-0 py-4"
                placeholder="Your contact"
                required="required"
                name="contact"
                id="contact"
                maxlength="10"
              />
            </div>
            <div class="form-group">
               <textarea
                    class="form-control border-0 p-4"
                    rows="2"
                    id="message"
                    placeholder="Message"
                    required="required"
                    name="message"
                  ></textarea>
                
              </textarea>
            </div>
            <div>
              <input type="hidden" name="enquiryform" id="enquiryform" value="enquiryform">
              <button
                class="btn btn-primary btn-block border-0 py-3"
                type="submit"
              >
                Submit Now
              </button>
            </div>
          </form>
        </div>
      </div>
      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
      >
        <p class="m-0 text-center text-white">
          &copy;
          <a class="text-primary font-weight-bold" href="#"></a>.
          All Rights Reserved.

          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Designed and
          <a class="text-primary font-weight-bold" href="https://htmlcodex.com"
            ></a
          >
          <br />Distributed By:
          <a href="#" target="_blank">Gauri Bhadauria</a>
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#enquiryfooter").submit(function(){
          $.ajax({
            url:"function.php",
            method:"POST",
            data: new FormData(this),
            success:function(res){
              alert(res);
              window.location.reload(); 
            },
            cache:false,
            contentType:false,
            processData:false
          })
        })
      })
      
    </script>
  </body>
</html>