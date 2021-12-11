<?php
  require "header.php";
 require "includes/dbh.inc.php";
  $sql = "SELECT * FROM contacts";
  $featured = $conn->query($sql);

?>

<!--Begining of Carousel-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://drive.google.com/uc?export=view&id=1AwcmjSmlpy7C4eC62iGRfS_D4JXkQdia" class="d-block w-100" alt="Banana Yacht">
      <div class="carousel-caption d-none d-md-block">
        <h5>Banana Yacht</h5>
        <p>Pride of the fleet</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1VpgLpc-BakvT2vcbEy70eZknHSPHl6lZ" class="d-block w-100" alt="Cool Banana">
      <div class="carousel-caption d-none d-md-block">
        <h5>Cool Banana</h5>
        <p>Cool as ice</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1UU8uFp4n8ShcvA1L_wsHDxMf55f0_StG" class="d-block w-100" alt="banana dude">
      <div class="carousel-caption d-none d-md-block">
        <h5>Gator Banana</h5>
        <p>Swimmin in da bayou</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!--End of Carousel-->
   <!--service Section-->
<section class="services py-5 text-center">
  <div class="container">
    <div class="row">
      <!--Single service-->
      <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
        <span class="service-icon">
        <i class="fas fa-globe-americas fa-2x">

          </i>
        </span>
        <h5 class="font-weight-bold text-uppercase">
          Worldwide Shipping
        </h5>
        <p class="text-capitalize">We Import fresh bananas to anyone around the globe 
          from any Banana Republic you choose.</p>
      </div>
      <!--end of Single Service-->
       <!--Single service-->
       <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
        <span class="service-icon">
        <i class="fas fa-truck fa-2x"></i>

          </i>
        </span>
        <h5 class="font-weight-bold text-uppercase">
          Certified by Gurus
        </h5>
        <p class="text-capitalize">Each Banana we deliver is checked for freshness and healthiness. Always certified by the FDA, DEA, FBI, and CIA.</p>
      </div>
      <!--end of Single Service-->
       <!--Single service-->
       <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
        <span class="service-icon">
        <i class="fas fa-money-bill-wave fa-2x">

          </i>
        </span>
        <h5 class="font-weight-bold text-uppercase">
         30 Days Money Back
        </h5>
        <p class="text-capitalize">if your banana is lacking in the expected quality of the product, 
          you can always refund it 30 days after delivery.</p>
      </div>
      <!--end of Single Service-->
    </div>
  </div>
</section>    
<!--End of Service Section-->
<!---About Section=====-->
 <section id="about-sec">
     <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 text-center">
          <img src="https://drive.google.com/uc?export=view&id=1-AhUz4U0y7A8Mta0OkFsQUfsDU_f-PfU" width="450" height="150" 
          class="img-fluid watch-img">
        </div>
        <div class="col-lg-7 text-lg-right  text-center text-color about-text">
          <h1 >About Us!</h1>
          <p class="text">We are a company called The Banana Tree and we are a company who grows and exports our own bananas out
            into the world. We offer full refunds but you won't ever have to use them we have the best possible banana farmers availiable. 
          </p>
        </div>
      </div>
      </div>
      </section>
  <!---End of About Section---->
  <!--Contact us Section-->
       <!--Contact US-->
       <section class="contact py-5">
      <div class="container">
       <h1><a class="text-center" href="contact.php">Contact Us</a></h1>
      </div>
  </section>
  <!--End of Contact Section-->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <?php
 require "footer.php"; 
  ?>