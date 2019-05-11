<html>
<head>
<title>Tour Company</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  
  
<!-----NavigationBar---->
<section id="nav-bar">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand">
  <h4 class = "bg-info bg-dark">Tour Company</h4></a> 

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="packages.html">PACKAGES</a>
      </li>
      <!-----NavigationBar
      <li class="nav-item">
        <a class="nav-link" href="#about">HOTELS</a>
      </li>
      ---->
      <li class="nav-item">
        <a class="nav-link" href="contact.html">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login/index.html">LOGIN</a>
      </li>
    </ul>
    
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>

  </div>
</nav>   
</section> 

<br>
<br>
<?php

    $connect = mysqli_connect('localhost','rbasne10','nayabasti123');
    $query = 'SELECT * FROM packages ORDER by id ASC';
    $result = mysqli_query($connect, $query);

    if ($result) :
      if(mysqli_num_rows($result)>0):
        while ($packages = mysqli_fetch_assoc($result)): 
  ?>
<section class="features">
<h1>All the pacakages</h1> 
<div class="container">
<div class="row">
<div class="col-md-4">
    <div class="feature-box">
    <div class="feature-img">
    <img src="img/1.jpg">
    <div class="price">
        <p>78$</p>    
    </div>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    </div>
    <div class="feature-details">
        <h4></h4>
        <p>.</p>
        <div>
        <span><i class="fa fa-map-marker"></i>Los Angeles</span>
        <span><i class="fa fa-sun-o"></i>4 Days</span>
        <span><i class="fa fa-moon-o"></i>3 Nights</span>
        </div>
    </div>
    </div>
</div>    
<div class="col-md-4">
<div class="feature-box">
    <div class="feature-img">
    <img src="img/2.jpg">
    <div class="price">
        <p>78$</p>    
    </div>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    </div>
    <div class="feature-details">
        <h4></h4>
        <p></p>
        <div>
        <span><i class="fa fa-map-marker"></i>Los Angeles</span>
        <span><i class="fa fa-sun-o"></i>4 Days</span>
        <span><i class="fa fa-moon-o"></i>3 Nights</span>
        </div>
    </div>
    </div>    
</div>    
<div class="col-md-4">
<div class="feature-box">
    <div class="feature-img">
    <img src="img/3.jpg">
    <div class="price">
        <p>78$</p>    
    </div>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    </div>
    <div class="feature-details">
        <h4></p>
        <div>
        <span><i class="fa fa-map-marker"></i>Los Angeles</span>
        <span><i class="fa fa-sun-o"></i>4 Days</span>
        <span><i class="fa fa-moon-o"></i>3 Nights</span>
        </div>
    </div>
    </div>    
</div>    
</div>    
</div>
</section>


<!-----------Footer------->
    <section id="footer">
        <div class="container text-center">
            ritesh basnet
        </div>
    </section>
    <!------Footer End------>
    <script src="js/smooth-scroll.js"></script>
    <script>
	var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>
</html>





