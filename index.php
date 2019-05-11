<!--created by: ritesh basnet 
    project name: tour company
    date created: 16/03/2019------>


<html>
<head>
<title>Tour Company</title>
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link href="styles/owl.carousel.css" rel="stylesheet">

<link href="styles/owl.theme.default.css" rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<!-----NavigationBar---->
<?php include("includes/header.php"); ?>
<!-------Slider------->  
<?php include("includes/slider.php"); ?>
<!-------About------->
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>About Us</h2>
<div class="about-content">
Our angency is dedicated to provide a once in a life time experience of raw natura beauty. Our theme is to show you a nature exactly how it is. We have a best affordable price out there in market. We have experienced local tour guides who are committed to make your stay unforgetable. 
</div>
<button type="button" class="btn btn-primary">Read more>></button>
</div>

</div>
</div>   
</section>
    <!--------Services------->
    <section id="services">
        <div class="container">
            <h1>Our Services</h1>
            <div class="row services">
                <div class="col-md-4 text-center">
                    <div class="icon">
                    <i class="fa fa-hotel"></i>
                    </div>
                    <h3>Hotels</h3>
                    <p>We have contact with top hotels in the country with wide variety of price options.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon">
                    <i class="fa fa-car"></i>
                    </div>
                    <h3>Rental Cars</h3>
                    <p>We provide top quality cars in affordable price.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon">
                    <i class="fa fa-plane"></i>
                    </div>
                    <h3>Travel Insurance</h3>
                    <p>We cover medical expenses, trip cancellation, lost luggage, flight accident and other losses incurred while traveling.</p>
                </div>
                

            
            </div>      
        </div>     
    </section>

    <!------destinations------->
<section id="destinations">
<div class="container">
    <h1>Popular Destinations</h1>
    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
    <div class="row">
        <div class="col-md-4 destinations-pic text-center">
        <div class="img-box">
        <img src="img/Kathmandu.jpg" class="img-responsive"> 
         <div class="carousel-caption">
                  <h3>Kathmandu</h3>
                </div>
       
            <div class = "book">
                <a href="booking/index.html" class="btn btn-info" role="button">AUD 150</a>
      
            </div>
        
        </div> 
            
        </div>
        <div class="col-md-4 destinations-pic text-center">
        <div class="img-box">
        <img src="img/Pokhara.jpg" class="img-responsive"> 
         <div class="carousel-caption">
                  <h3>Pokhara</h3>
                </div>
        <ul>
        <a href="#" class="btn btn-info" role="button">AUD 250</a>
        </ul>
        </div> 
       
        </div>
        <div class="col-md-4 destinations-pic text-center">
        <div class="img-box">
        <img src="img/chitwan.jpg" class="img-responsive"> 
         <div class="carousel-caption">
                  <h3>Chitwan</h3>
                </div>
        <ul>
        <a href="#" class="btn btn-info" role="button">AUD 225</a>
        </ul>
        </div> 
            
        </div>
        </div>
    </div>           
</div>
</section>

<!------------Price Plans------->
<section id="price">
<div class="container">
    <h1>Price Plan</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="single-price">
                <div class="price-head">
                    <h2>Cheap Packages</h2>
                    
                </div>
            <div class="price-content">
            <table class = "table">
                <thead>
                    <tr>
                        <th>Places</th>
                        <th>Price</th>

                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>places </td>
                    <td>AUD 150</td>
                </tr>
                <tr>
                    <td>places </td>
                    <td>AUD 150</td>
                </tr>
            </tbody>
            </table>
            
            </div>
            <div class="price-button">
            <a class="buy-btn" href="#">Buy Noww</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-price">
                <div class="price-head">
                    <h2>Luxary Package</h2>
                    
                </div>
            <div class="price-content">
            <table class = "table">
                <thead>
                    <tr>
                        <th>Places</th>
                        <th>Price</th>

                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>places </td>
                    <td>AUD 150</td>
                </tr>
                <tr>
                    <td>places </td>
                    <td>AUD 150</td>
                </tr>
            </tbody>
            </table>
            </div>
            <div class="price-button">
            <a class="buy-btn" href="#">Buy Now</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-price">
                <div class="price-head">
                    <h2>Business</h2>
                </div>
            <div class="price-content">
            <table class = "table">
                <thead>
                    <tr>
                        <th>Places</th>
                        <th>Price</th>

                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>places </td>
                    <td>AUD 150</td>
                </tr>
                <tr>
                    <td>places </td>
                    <td>AUD 150</td>
                </tr>
            </tbody>
            </table>
            </div>
            <div class="price-button">
            <a class="buy-btn" href="#">Buy Now</a>
            </div>
            </div>
        </div>
        
    </div>
</div>
</section>

    <!------Footer ends------>


    <?php include("includes/footer.php"); ?>

    <script src="js/smooth-scroll.js"></script>
    <script>
	var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>
</html>






