<!DOCTYPE html>
<html lang="en">
<head>
  <title>Photography</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .carousel-item img {
    width: 100%;
    height: 80vh;
  }
  .card-body img {
    min-width: 50%;
    max-height: 200px ;

  }
  </style>
</head>
<body>

  
          
<header id="home">

 <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fs-1" href="#">Techno-<span class="text-primary">web</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
        <li class="nav-item">
          <a class="nav-link active text-primary"  aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#services">SEO</a></li>
            <li><a class="dropdown-item" href="#services">Web Design</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#services">Graphics Design</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#team">Our Team</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/vphoto/Untitled design (2)/banner1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/vphoto/Untitled design (2)/banner2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/vphoto/Untitled design (2)/banner3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/vphoto/Untitled design (2)/banner4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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
</header>
 
     <section class="about my-5" id="about">
      <div class="container">
            <div class=" text-center my-5"> 
                 <h1 data-aos="fade-up" data-aos-offset="200">About <span class="text-primary">me</span> </h1>
                 <hr  class="w-25 m-auto">
            </div>
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6 col-12" data-aos="zoom-in" data-aos-offset="200" >
                      <h1> what do you <span class="text-primary">want to know?</span></h1>   
                      <p class="p-2">A simple way to develop long-term narrative memories
                        of the couples you work with is by writing down all 
                        kinds of pop-up thoughts when spending time with them.</p>
                        <button type="button" class="btn btn-info mb-5">More about me </button> 


                        <div class="accordion" id="accordionExample" data-aos="zoom-in-left" data-aos-offset="200">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                My Hobbies 
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> 
                                It is shown by default, until the collapse plugin adds the 
                                appropriate classes that we use to style each element.

                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                My Qualification
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> 
                                It is hidden by default, until the collapse plugin 
                                adds the appropriate classes that we use to style each element.
                                 
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                My Dream
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong>
                                 It is hidden by default, until the collapse plugin
                                 adds the appropriate classes that we use to style each element.

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end" data-aos="fade-right" data-aos-offset="200">
                           <img src="img/vphoto/b5img/team1.jpg" class="img-fluid img-thumbnail ">   
                  </div>
              </div>
      </div>
     </section>

     <section class="services py-5 bg-light" id="services">
         <div class="container">
          <div class=" text-center my-5"> 
            <h1>Our <span class="text-primary">Services</span> </h1>
            <hr  class="w-25 m-auto">
       </div>
         <div class="row"  data-aos="zoom-in-up" data-aos-offset="200">
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded mb-2"></i>
                <h5 class="card-title">Web Development</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <i class="fa fa-code bg-white p-2 text-dark rounded mb-2"></i>
                <h5 class="card-title">App Development</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-light">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded mb-2"></i>
                <h5 class="card-title">Graphics Design</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
         </div>
        
         <div class="row mt-5"  data-aos="zoom-in-down" data-aos-offset="200">
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded mb-2"></i>
                <h5 class="card-title">Web Development</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <i class="fa fa-code bg-white p-2 text-dark rounded mb-2"></i>
                <h5 class="card-title">App Development</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-light">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded mb-2"></i>
                <h5 class="card-title">Graphics Design</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
         </div>
        </div>
     </section>

     <section class="team my-5 text-center" id="team">
      <div class="container">
        <div class=" text-center my-5"> 
          <h1>Our <span class="text-primary">Team</span> </h1>
          <hr  class="w-25 m-auto">
     </div>
     <div class="row">
      <div class="col-sm-12 col-md-4 col-md-4 col-12">
        <div class="card" data-aos="zoom-in-right" data-aos-offset="200">
          <div class="card-body">
            <img src="img/vphoto/b5img/team2.jpg" class="img-fluid rounded-circle border border-primary p-2">
            <h5 class="card-title mt-4">Andrew</h5>
            <p class="card-text">Front-End Developer</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
        </div>
        <div class="col-sm-12 col-md-4 col-md-4 col-12">
          <div class="card" data-aos="zoom-out" data-aos-offset="200">
            <div class="card-body">
              <img src="img/vphoto/b5img/team4.jpg" class="img-fluid rounded-circle border border-primary p-2">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      </div>
      <div class="col-sm-12 col-md-4 col-md-4 col-12">
        <div class="card" data-aos="zoom-out-down" data-aos-offset="200">
          <div class="card-body">
            <img src="img/vphoto/b5img/team6.jpg" class="img-fluid rounded-circle border border-primary p-2">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
    </div>
     </div>

     </section>

     <section class="contact py-5" id="contact">
         <div class="container">
          <div class=" text-center my-5"> 
            <h1>Feel free <span class="text-primary">to Connect</span> </h1>
            <hr  class="w-25 m-auto">
       </div>
       <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-12"  data-aos="fade-up-left" data-aos-offset="200">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
           
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
          
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end p-4"  data-aos="fade-up-right" data-aos-offset="200">
          <img src="img/vphoto/b5img/team3.jpg" class="img-fluid img-thumbnail p-2">
        </div>
      </div>
    </div>
  </section>
            <div class="container-fluid bg-primary text-white p-2 text-center fs-5">Developed by Shree </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
