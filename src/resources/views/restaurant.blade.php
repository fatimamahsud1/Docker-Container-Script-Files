<!doctype html>
<html lang="en">
  <head>
    <title> website</title>
   <!-- tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="main.css">
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
	   #p1, #p2, #p3 ,#p4,#p5,#p6{
	color: #ff0000;
	font-size: 13px;
	font-weight: 600;
}
   </style>
</style>

    <!--   link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>websites</title>
    <link rel="stylesheet" href="main.css">
    <style>
    .error{
    	color: red;
        font-style: italic;
    }
</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navigation-wrap">

    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            <a href="rida.html" class="logo">
                <img src="images/logo.png" align="">
            </a>
          </div>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                    <div class="nav-btn">
                      <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                      </label>
                    </div>
                    
                    <div class="nav-links">
                        <ul>
                      <li><a href="#home" >Home</a></li>
                      <li><a href="#cat" >Category</a></li>
                      <li><a href="#cont" >Contact</a></li>
                      <li><a href="#blog" >Blog</a></li>
                      <li style = "background-color:red;">
                      @auth
                        <a href = "{{url('/showcart',Auth::user()->id)}}">
                      Cart[{{$count}}]

                     @endauth
                     @guest
                      Cart[0]
                     @endguest
                     </a></li>
                    
                      <li> 
        
                      @if (Route::has('login'))
               
                    @auth
                        <li>
                            <x-app-layout>
  
                            </x-app-layout>
                        </li>
                    @else
                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                         <li>   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
              
            @endif
</li>
                     
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
            
        </div>
       
    
       </nav>
       

  
    
   
       <section id="home">
    <div id="wrap">
        <div id="arrow-left" class="arrow"></div>
        <div id="slider">
          <div class="slide slide1">
            <div class="slide-content">
                <div class="hero-container">
            
                    <div class="hero-logo">
                        <h1 class="font-weight-bold">AYLANTO’S FREDDY</h1>
                    </div>
                    <h2 class="font-weight-bold">We live for your taste</h2>
                    <div class="actions">
                        <a href="#reser"class="btn-get-started bg-warning">Reservation Here</a>
                    </div>
                </div>
              </div>
            
          </div>
          <div class="slide slide2">
            <div class="slide-content">
                <div class="hero-container">
            
                    <div class="hero-logo">
                        <h1 class="font-weight-bold">AYLANTO’S FREDDY</h1>
                    </div>
                    <h2 class="font-weight-bold">We live for your taste</h2>
                    <div class="actions">
                        <a href="#reser"class="btn-get-started bg-warning">Reservation Here</a>
                    </div>
                </div>
              </div>
            
          </div>
          <div class="slide slide3">
            <div class="slide-content">
                <div class="hero-container">
            
                    <div class="hero-logo">
                        <h1 class="font-weight-bold">AYLANTO’S FREDDY</h1>
                    </div>
                    <h2 class="font-weight-bold">We live for your taste</h2>
                    <div class="actions">
                        <a href="#reser"class="btn-get-started bg-warning">Reservation Here</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div id="arrow-right" class="arrow"></div>
      </div>
  </section>
    <br>
    <br>
    <br>
    <br>

    <section id="counter">
        <section class="counter-section">
          <div class="container">
            <div class="row text-center">
              <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                <h2>
                  <span id="count1"></span>+
                </h2>
                <p>Coustomers</p>
              </div>
              <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                <h2>
                  <span id="count2"></span>+
                </h2>
                <p>PHOTOS</p>
              </div>
              <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                <h2>
                  <span id="count3"></span>+
                </h2>
                <p>BLOG</p>
              </div>
              <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                <h2>
                  <span id="count4"></span>+
                </h2>
                <p>SUBSCRIBER</p>
              </div>
            </div>
          </div>
        </section>
      </section>
</section>


<section id="cat">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

   
  
    
    <section id="variety" class="variety pt-4">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center font-weight-bold">Categories</h2>
                
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/tab-item-02.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Cofee</a>
                            </h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quidem tempore quia dolorem ratione quod numquam omnis sequi 
                
                            </p>
                            <div class="read-more"><a href="#">
                                <i class="fas fa-arrow-circle-right"></i>
                                Read More
                            </a></div>
                        </div>
                    </div>
                    
                </div>
               
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/tab-item-09.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Curry</a>
                            </h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quidem tempore quia dolorem ratione quod numquam omnis sequi 
               
                            </p>
                            <div class="read-more"><a href="#">
                                <i class="fas fa-arrow-circle-right"></i>
                                Read More
                            </a></div>
                        </div>
                    </div>
                    
                </div>
              
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/tab-item-10.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Pasta Dishes</a>
                            </h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quidem tempore quia dolorem ratione quod numquam omnis sequi 
                
                            </p>
                            <div class="read-more"><a href="#">
                                <i class="fas fa-arrow-circle-right"></i>
                                Read More
                            </a></div>
                        </div>
                    </div>
                    
                </div>
                <!---->
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/tab-item-12.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Chicken Tikka</a>
                            </h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quidem tempore quia dolorem ratione quod numquam omnis sequi 
                
                            </p>
                            <div class="read-more"><a href="#">
                                <i class="fas fa-arrow-circle-right"></i>
                                Read More
                            </a></div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
</section>
    
   
    @include("food")
   
    <section class="chef my-5" id="chef">
        <div class="container">
            <h2 class="text-center">
                <h2>OUR CHEFS</h2>
                        <h6>We make food that always remain in our heart</h6>
            </h2>
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="card card-block">
                        <a href="#">
                            <img src="images/chefs-01.jpg"class="chef-img" alt="">
                            <div class="card-title-wrap">
                                <span class="card-title">
                                    Qaim Mali
                                </span>
                                <span class="card-text">Desert Chef</span>
                            </div>
                            <div class="chef-over">
                                <h4 class="hidden-md-down">
                                    Connect with Me
                                </h4>
                                <nav class="social-nav">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>

                                </nav>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!---->
                <div class="col-sm-3 col-xs-6">
                    <div class="card card-block">
                        <a href="#">
                            <img src="images/chefs-03.jpg"class="chef-img" alt="">
                            <div class="card-title-wrap">
                                <span class="card-title">
                                   Mehreen Atta
                                </span>
                                <span class="card-text">Chinese Chef</span>
                            </div>
                            <div class="chef-over">
                                <h4 class="hidden-md-down">
                                    Connect with Me
                                </h4>
                                <nav class="social-nav">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>

                                </nav>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!---->
                <div class="col-sm-3 col-xs-6">
                    <div class="card card-block">
                        <a href="#">
                            <img src="images/chefs-02.jpg"class="chef-img" alt="">
                            <div class="card-title-wrap">
                                <span class="card-title">
                                    John Doe
                                </span>
                                <span class="card-text">Pakistani Chef</span>
                            </div>
                            <div class="chef-over">
                                <h4 class="hidden-md-down">
                                    Connect with Me
                                </h4>
                                <nav class="social-nav">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>

                                </nav>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!---->
                <div class="col-sm-3 col-xs-6">
                    <div class="card card-block">
                        <a href="#">
                            <img src="images/NEWCHEF.jpg"class="chef-img" alt="">
                            <div class="card-title-wrap">
                                <span class="card-title">
                                    Sohaib Akram
                                </span>
                                <span class="card-text">Cookies Chef</span>
                            </div>
                            <div class="chef-over">
                                <h4 class="hidden-md-down">
                                    Connect with Me
                                </h4>
                                <nav class="social-nav">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>

                                </nav>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!---->
            </div>
        </div>
    </section>
 
<section id="subscribe" class="py-5">
    <div class="container">
        <div class="row align-items-center my-5">
            <div class="col-sm-10 mx-auto-text-center mb-5">
                <h4 class="display-3 mb-5 text-uppercase text-white text-center">
                    Subscribe For More Offers
                </h4>
                <form class="form-inline d-flex justify-content-center">
                    <input type="text" class="form-control w-35" placeholder="Email">
                    <button class="btn form-btn m-1">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="blog">

<section class="blog-section">
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 blog-heading text-center">
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="blog-start d-flex">
                    <a href="#"class="block-20 img"
                    style="background-image: url('images/1111.jpg');">
                    </a>
                    <div class="text p-4 bg-light">
                        <div class="des">
                            <p><i class="fa fa-calendar"></i>
                            24 July 2020
                            </p>
                        </div>
                        <h3 class="heading mb-3">
                            <a href="#">
                                Lorem Ipsum
                            </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ullam illo magnam, nihil nam odit exercitationem voluptatem 
                        laudantium suscipit deserunt eum.</p>
                        <a href="#" class="btn-custom">Continue
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!----->
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="blog-start d-flex">
                    <a href="#"class="block-20 img"
                    style="background-image: url('images/1111.jpg')">
                    </a>
                    <div class="text p-4 bg-light">
                        <div class="des">
                            <p><i class="fa fa-calendar"></i>
                            24 July 2020
                            </p>
                        </div>
                        <h3 class="heading mb-3">
                            <a href="#">
                                Lorem Ipsum
                            </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ullam illo magnam, nihil nam odit exercitationem voluptatem 
                        laudantium suscipit deserunt eum.</p>
                        <a href="#" class="btn-custom">Continue
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!----->
            <div class="col-lg-6 d-flex align-items-stretch">
                
            </div>
            <!----->
            
            </div>
            <!----->
        </div>
    </div>
    
</section>
</section>

@include("reservation")


<div class="chat-bar-collapsible">
    <button id="chat-button" type="button" class="collapsible">Chat with us!
        <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
    </button>

    <div class="content">
        <div class="full-chat-block">
            <!-- Message Container -->
            <div class="outer-container">
                <div class="chat-container">
                    <!-- Messages -->
                    <div id="chatbox">
                        <h5 id="chat-timestamp"></h5>
                        <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                    </div>

                    <!-- User input box -->
                    <div class="chat-bar-input-block">
                        <div id="userInput">
                            <input id="textInput" class="input-box" type="text" name="msg"
                                placeholder="Tap 'Enter' to send a message">
                            <p></p>
                        </div>

                        <div class="chat-bar-icons">
                            <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                onclick="heartButton()"></i>
                            <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                onclick="sendButton()"></i>
                        </div>
                    </div>

                    <div id="chat-bar-bottom">
                        <p></p>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>


</section>

   

</section>


<section id="cont">
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <h4>Contact  Numbers</h4>
                        <h5><a href="#">051-5567899</a><br><a href="#">0333-8975467</a></h5> 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/klassy-logo.png" alt=""></a>
                </div>
            </div>
          
            </div>
        </div>
    </div>
</footer>

</section>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
  	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="register.js"></script> 

 
  

<script>
    let nav = document.querySelector(".navigation-wrap");
window.onscroll = function () {
    if(document.documentElement.scrollTop  > 20){
        nav.classList.add("scroll-on");
    }else{
        nav.classList.remove("scroll-on");
    }
}


document.addEventListener("DOMContentLoaded", () => {
    function counter(id, start, end, duration){
        let obj = document.getElementById(id),
        current = start,
        range = end - start,
        increment = end > start ? 1 : -1,
        step = Math.abs(Math.floor(duration /  range)),
        timer = setInterval(() => {
            current += increment;
            obj.textContent = current;
            if(current == end){
                clearInterval(timer);
            }
        }, step);
    }
    counter("count1", 0, 1287, 3000);
    counter("count2", 100, 5786, 2500);
    counter("count3", 0, 1440, 3000);
    counter("count4", 0, 7110, 3000);
 }
 );
 
    let sliderImages = document.querySelectorAll(".slide"),
arrowLeft = document.querySelector("#arrow-left"),
arrowRight = document.querySelector("#arrow-right"),
current = 0;

// Clear all images
function reset() {
for (let i = 0; i < sliderImages.length; i++) {
sliderImages[i].style.display = "none";
}
}

// Init slider
function startSlide() {
reset();
sliderImages[0].style.display = "block";
}

// Show prev
function slideLeft() {
reset();
sliderImages[current - 1].style.display = "block";
current--;
}

// Show next
function slideRight() {
reset();
sliderImages[current + 1].style.display = "block";
current++;
}

// Left arrow click
arrowLeft.addEventListener("click", function() {
if (current === 0) {
current = sliderImages.length;
}
slideLeft();
});

// Right arrow click
arrowRight.addEventListener("click", function() {
if (current === sliderImages.length - 1) {
current = -1;
}
slideRight();
});

startSlide();

jQuery.validator.addMethod("noSpace", function(value, element) { 
    return value == '' || value.trim().length != 0;  
}, "No space please and don't leave it empty");
jQuery.validator.addMethod("customEmail", function(value, element) { 
  return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value ); 
}, "Please enter valid email address!");
$.validator.addMethod( "alphanumeric", function( value, element ) {
return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );
var $registrationForm = $('#registration');
if($registrationForm.length){
  $registrationForm.validate({
      rules:{
          username: {
              required: true,
              alphanumeric: true
          },
          email: {
              required: true,
              customEmail: true
          },
         
         
         
          
          coun: {
            required: true
        },
          country: {
              required: true
          },
          address: {
              required: true
          }
      },
      messages:{
          username: {
              required: 'Please enter username!'
          },
          email: {
              required: 'Please enter email!',
              email: 'Please enter valid email!'
          },
         
          coun: {
            required: 'Please select time!'
        },
         
          country: {
              required: 'Please select Person!'
          },
          address: {
              required: 'Please enter Date!'
          }
      },
      errorPlacement: function(error, element) 
      {
        
       
           error.insertAfter( element );
        
        
       }
  });
}


  
</script>































 











   
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>
</html>