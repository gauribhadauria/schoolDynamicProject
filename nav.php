    <?php $record= displayaccount($conn); ?>
 <!-- Navbar Start -->
 <style>
  .pos-stick{
    position: -webkit-sticky;
    position: sticky;
    top: 0;
  }
 </style>
    <div class="container-fluid bg-light fixed-top  shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href="index.php"
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <img class="img-fluid " src="admin/<?php echo(isset($record))?$record['logo']:"" ?>" alt="school" width="100px" height="50px">
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="class.php" class="nav-item nav-link">Classes</a>
            <a href="team.php" class="nav-item nav-link">Teachers</a>
            <a href="gallery.php" class="nav-item nav-link">Gallery</a>
            <!-- <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Pages</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="blog.php" class="dropdown-item">Blog Grid</a>
                <a href="single.php" class="dropdown-item">Blog Detail</a>
              </div>
            </div> -->
            <a href="contact.php" class="nav-item nav-link">Contact</a>
          </div>

          <a href="#mymodal" data-toggle="modal" class="btn btn-warning px-4">contact now</a>
          <div class="modal fade " id="mymodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info justify-content-center text-white "><h3>Fill the following form</h3></div>
      <div class="modal-body bg-secondary">
       <form id="enquirynav">
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
                class="btn btn-info  border-0 py-3"
                type="submit"
              >
                Submit Now
              </button>
            </div>
          </form>
      </div>
            <div class="modal-footer bg-info">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#" >&times; </button>
             </div>
    </div>
  </div>
</div>

        </div>
      </nav>
    </div>
    <!-- Navbar End -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    <script type="text/javascript">
      $(document).ready(function(){
        $("#enquirynav").submit(function(){
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