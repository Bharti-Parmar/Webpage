<?php
    include('../../header.php');
 ?>
<!-- registration page -------------------------------------->

<div class="container-fluid" style="background-image: url('image/hd-wallpapers-010.jpg');background-attachment:cover;background-repeat:no-repeat;">

<!-- navigation bar -->

<nav class="navbar navbar-expand-md navbar-light">

  <a href="#" class="navbar-brand"><i class="fa fa-cube text-light mr-2">CoCubes</i></a>

  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon bg-light"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
      <div class="navbar-nav ">
        <a class="nav-item nav-link text-light active mr-5" href="#">Home</a>
        <a class="nav-item nav-link text-light mr-5" href="#">About</a>
        <a class="nav-item nav-link text-light mr-5" href="#">Services</a>
        <a class="nav-item nav-link text-light mr-5" href="#">Company</a>
        <a class="nav-item nav-link text-light mr-5" href="#">Contact</a>
      </div>
  </div>
</nav>


<!-- body or form page -->
  <div class="row row-sm">

    <div class="col-md-2 col-sm-12 col-lg-2 "></div>

    <div class="col-md-3 col-sm-12 col-lg-3 d-none d-md-block"  style="margin-top:60px;margin-bottom:60px;">
      <div class="card">
        <img src="image/ceedaa89351187c1c6f524e467abd8e3.jpg" class="hidden-sm text-center" height="800px" width="auto">
        <div class="carousel-caption">
          <h1><i>Bootstrap 4 Exercise's</i></h1>
        </div>
      </div>
    </div>

    <div class="col-md-2 col-sm-12 col-lg-2 "></div>

    <div class="col-md-4 col-sm-12 col-lg-4 ">
      <div class="card" style="margin-top:120px;background-image: url('image/22964-alpha-coders-wallpaper_65058.jpg');background-attachment:cover;background-repeat:no-repeat;">
          <form class="container " method="POST" action="register.php" style="margin-top:20px;padding:30px;">
  <!-- Name and Email -->
                  <div class="row">
                      <div class="col-sm-4 col-12 col-lg-4 col-md-4 ">
                          <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name" required><br>
                      </div>
                      <div class="col-sm-4 col-12 col-lg-4 col-md-4">
                          <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name" required><br>
                      </div>
                      <div class="col-sm-4 col-12 col-lg-4 col-md-4">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required><br>
                      </div>
                  </div>
  <!-- contact and area code -->
                  <div class="row">
                    <div class="col-sm-6 col-12 col-lg-6 col-md-6">
                        <input type="text" class="form-control" id="s_address" name="s_address" placeholder="street address" required><br>
                    </div>
                      <div class="col-sm-6 col-12 col-lg-6 col-md-6">
                          <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required><br>
                      </div>
                  </div>
                <!-- DOB and gender -->
                <div class="row">
                  <div class="col-sm-12 col-12 col-lg-12 col-md-12">
                       <label class="form-control-label text-light">Birth Date:</label>
                       <input type="date" class="form-control" id="DOB" name="DOB">
                        <br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-12 col-lg-12 col-md-12">
                    <label class="form-control-label text-light">Gender:</label>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6">
                            <div class="form-check">
                              <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="male" name="gender" value="male" checked><label class="form-control-label  text-light">Male</label>
                              </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6">
                            <div class="form-check">
                              <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" id="female" name="gender" value="female"><label class="form-control-label  text-light">Female</label>
                              </label>
                            </div>
                        </div>
                    </div><br>
                  </div>
                </div>
      <!-- where you hear about this program -->
          <div class="row">

            <div class="col-sm-2 col-lg-6 col-md-6">
              <div class="form-check">
                  <label class="text-light">Field of Interest:</label>
              </div>
            </div>
              <div class="col-sm-2 col-lg-6 col-md-6">
                <div class="form-check">
                  <label class="form-check-label" for="check1">
                    <input type="checkbox" class="form-check-input" id="check1" value="Full Stack Developer" name="select" checked><p class="text-light">Full Stack Developer</p>
                  </label>
                </div>
              </div>
            <div class="col-sm-2 col-lg-6 col-md-6">
              <div class="form-check">
                <label class="form-check-label" for="check2">
                  <input type="checkbox" class="form-check-input" id="check2" value="Data Science" name="select"><p class="text-light">Data Science</p>
                </label>
              </div>
            </div>
            <div class="col-sm-2 col-lg-6 col-md-6">
              <div class="form-check">
                <label class="form-check-label" for="check1">
                  <input type="checkbox" class="form-check-input" id="check1" value="Database Administration"  name="select"><p class="text-light">Data Administration</p>
                </label>
              </div>
            </div>
            <div class="col-sm-2 col-lg-6 col-md-6">
              <div class="form-check">
                <label class="form-check-label" for="check2">
                  <input type="checkbox" class="form-check-input" id="check2" value="Programming" name="select"><p class="text-light">Programming</p>
                </label>
             </div>
            </div>
            <div class="col-sm-2 col-lg-6 col-md-6">
              <div class="form-check">
                <label class="form-check-label" for="check2">
                  <input type="checkbox" class="form-check-input" id="check2" value="Other" name="select"><p class="text-light">Other</p>
                </label>
             </div>
            </div>
          </div>
  <!-- comment section -->
                  <div class="row">
                      <div class="col-sm-12 col-12 col-lg-12 col-md-12">
                          <textarea class="form-control" rows="3" id="comment" placeholder="Your Comment / Feedback" name="comment"></textarea>
                      </div>
                  </div>
  <!-- submit form -->
                  <center>
                   <button type="submit" class="btn btn-primary" style="margin-top:20px;" name="submit" value="submit" style="margin-bottom:40px;">Submit</button>
                   </center>
              </form>
     </div>
    </div>
    <!-- <div class="col-md-2 col-sm-12 col-lg-2 "></div> -->
  </div>


  <!-- carousel -------------------------------->

  <div class="carousel slide bg-dark" data-ride="carousel" id="feature">
    <ol class="carousel-indicators">
      <li data-target="#feature" data-slide-to="0" class="active"></li>
      <li data-target="#feature" data-slide-to="1"></li>
      <li data-target="#feature" data-slide-to="2"></li>
      <li data-target="#feature" data-slide-to="3"></li>
      <li data-target="#feature" data-slide-to="4"></li>
      <li data-target="#feature" data-slide-to="5"></li>
      <li data-target="#feature" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active"><img src="image/photo-1534972195531-d756b9bfa9f2.jpeg" style="width:100%; height:800px;"></div>
      <div class="carousel-item"><img src="image/24104812.jpg" style="width:100%; height:800px;"></div>
      <div class="carousel-item"><img src="image/coders-wallpapers-14.png" style="width:100%; height:800px;"></div>
      <div class="carousel-item"><img src="image/gettyimages-1144413378-640x640.jpg" style="width:100%; height:800px;"></div>
      <div class="carousel-item"><img src="image/funny-wallpaper-full-hd-Is-Cool-Wallpapers.png" style="width:100%; height:800px;"></div>
      <div class="carousel-item"><img src="image/19916.jpg" style="width:100%; height:800px;"></div>
      <div class="carousel-item"><img src="image/thumb-1920-499786.png" style="width:100%; height:800px;"></div>
    </div>
    <!-- carousel indicator -->

      <a class="carousel-control-prev" href="#feature" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#feature" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
  </div>


</div>


<!-- js code for card hover -->
<script>

$( ".card" ).hover(
function() {
  $(this).addClass('shadow-lg').css('cursor', 'pointer');
}, function() {
  $(this).removeClass('shadow-lg');
}
);

</script>

<?php
  include('../../footer.php');
  ?>
