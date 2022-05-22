<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Main page</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ===== Link Swiper's CSS ===== -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- ===== Fontawesome CDN Link ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />




  <link href="style.css" rel="stylesheet">
</head>

<body>
  <?php include_once 'header.php'; ?>
  <div class="container firstWrapper">
    <div class="row align-items-start">
      <div class="col-md-6 col-12" style="margin: auto;">
        <h1 class>Putting Patients First</h1>
        <div class="blueColor">Our cancer center team, led by Dr. Matthew Kulke, works every day in the fight against cancer. They go above and beyond because people need more and because it matters.

          Learn more</div>
      </div>
      <div class="col-md-6 col-12">
        <img src="images/patientpIC.jpg" width="100%" style="border-radius: 10px; box-shadow: 5px 5px 5px 5px #888888;
">
      </div>
    </div>
  </div>
  <div class="secondWrapper roundedCorners1">

    <button href="Regsitration.php" class="btn btn-primary" role="button" data-bs-toggle="button">Request an Appointment</button>


    <button style="margin-left:20px" onClick="window.location.href='Registration.php'" type="submit" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Register Now</button>

  </div>
  <div>
    <h1 class="newsText">Latest News</h1>
    <div class="thirdWrapper roundedCorners2">

      <section>
        <div class="product">
          <picture>
            <img src="images/patientpIC.jpg" alt="">
          </picture>
          <div class="detail">
            <p class="textSize">
              New Research from the Grayken Center for Addiction Suggests

            </p>

          </div>
        </div>
        <div class="product">
          <picture>
            <img src="images/patientpIC.jpg" alt="">
          </picture>
          <div class="detail">
            <p class="textSize">
              New Research from the Grayken Center for Addiction Suggests

            </p>

          </div>
        </div>
        <div class="product">
          <picture>
            <img src="images/patientpIC.jpg" alt="">
          </picture>
          <div class="detail">
            <p class="textSize">
              New Research from the Grayken Center for Addiction Suggests

            </p>

          </div>
        </div>
        <div class="product">
          <picture>
            <img src="images/patientpIC.jpg" alt="">
          </picture>
          <div class="detail">
            <p class="textSize">
              New Research from the Grayken Center for Addiction Suggests

            </p>

          </div>
        </div>

      </section>
    </div>
  </div>
  <div class="section">
    <div class="container-xl">
      <div class="row">
        <div class="col-md-4">
          <a href="#">Covid Vaccin update</a>
        </div>
        <div class="col-md-4">
          <a href="#">Covid Vaccin update</a>
        </div>
        <div class="col-md-4">
          <a href="#">Covid Vaccin update</a>
        </div>
      </div>
      <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">
          <a href="#">Covid Vaccin update</a>
        </div>
        <div class="col-md-4">
          <a href="#">Covid Vaccin update</a>
        </div>
        <div class="col-md-4">
          <a href="#">Covid Vaccin update</a>
        </div>
      </div>
    </div>
  </div>
 <div class="slider">
   <div class="container-xl">
     <div class="col-12" style="text-align:center ;color:#08526b;"><h1>Recent News</h1></div>
     <div class="col-12">
     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active image">
      <img src="./images/patientpIC.jpg" class="d-block w-100" alt="...">
      <div class="text">Cops and partners — a kidney donation made them something else: bonded for life</div>
      <div class="date">May 22 2022</div>
    </div>
    <div class="carousel-item image">
      <img src="./images/patientpIC.jpg"  class="d-block w-100" alt="...">
      <div class="text">Cops and partners — a kidney donation made them something else: bonded for life</div>
      <div class="date">May 22 2022</div>
    </div>
    <div class="carousel-item image">
      <img src="./images/patientpIC.jpg"  class="d-block w-100" alt="...">
      <div class="text">Cops and partners — a kidney donation made them something else: bonded for life</div>
      <div class="date">May 22 2022</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
     </div>
   </div>
 </div>
 <div class="donate">
   <div class="container-xl">
     <div class="row">
       <div class="col-12" style="text-align:center ;padding-top:60px;">
         <h1>Donate Now</h1>
         <p style="font-size:20px;">Philanthropic support is essential to helping Boston Medical Center provide exceptional care, 
           without exception to the people of Greater Boston. Whether you are an individual, 
           a corporation or a community organization, there are many ways you can support BMC.</p>
           <button class="donate">Donate Now</button>
       </div>
     </div>
   </div>
 </div>
  <?php include_once 'footer.php';  ?>
  <script src="Js/main.js"></script>




</body>

</html>