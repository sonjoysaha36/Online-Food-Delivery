<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
        <title>Our Menus</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
            .alert {
  padding: 20px;
  background-color: #63b558;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
        </style>
    </head>

<body>
  @include('home.header')
  @if(session('message'))
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('message') }}
    </div>
    @endif


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Menus</h1>
                    <p>Curabitur at dolor sed felis lacinia ultricies sit amet vel sem. Vestibulum diam leo, sodales tempor lectus sed, varius gravida mi.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="breakfast-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="breakfast-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/breakfast_menu.jpg" alt="Breakfast">
                                </div>
                            </div>
                            <div class="col-md-7">
                              @if ($breakfast)
                                  
                              
                                <h2>Breakfast Menu</h2>
                                <div id="owl-breakfast" class="owl-carousel owl-theme">
                                    @foreach ($breakfast as $breakfast)
                                    <div class="item col-md-12">
                                      <div class="food-item">
                                          <img src="/product_picture/{{$breakfast->image}}" alt="">
                                          <div class="price">{{$breakfast->discount_price}}</div>
                                          <div class="text-content">
                                              <h4>{{$breakfast->title}}</h4>
                                              <p>{!! substr($breakfast->description, 0, 80) !!}...</p>
                                              <a style="    display: inline-block;
                                                background-color: #878c91;
                                                padding:5px;
                                                color: #fff;
                                                border: none;
                                                border-radius: 5px 10px;
                                                text-decoration: none;
                                                text-align: center;
                                                font-size: 16px;" href="{{url('add_cart',$breakfast->id)}}">Add To Cart</a>
                                                <a style="    display: inline-block;
                                                background-color: #878c91;
                                                padding:5px;
                                                color: #fff;
                                                border: none;
                                                border-radius: 5px 10px;
                                                text-decoration: none;
                                                text-align: center;
                                                font-size: 16px;" href="{{url('details',$breakfast->id)}}">Details</a>
                                          </div>
                                      </div>
                                    </div>
                                        
                                    @endforeach
                                    
                                </div>
                                @else
                                <h2>Breakfast Menu</h2>
                                    Please wait sometime
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="lunch-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="lunch-menu-content">
                        <div class="row">
                            <div class="col-md-7">
                              @if ($lunch)
                                <h2>Lunch Menu</h2>
                                <div id="owl-lunch" class="owl-carousel owl-theme">
                                  @foreach ($lunch as $lunch)
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="/product_picture/{{$lunch->image}}" alt="">
                                            <div class="price">{{$lunch->discount_price}}</div>
                                            <div class="text-content">
                                                <h4>{{$lunch->title}}</h4>
                                                <p>{!! substr($breakfast->description, 0, 80) !!}...</p>
                                                <a style="    display: inline-block;
                                                background-color: #878c91;
                                                padding:5px;
                                                color: #fff;
                                                border: none;
                                                border-radius: 5px 10px;
                                                text-decoration: none;
                                                text-align: center;
                                                font-size: 16px;" href="{{url('add_cart',$lunch->id)}}">Add To Cart</a>
                                                <a style="    display: inline-block;
                                                background-color: #878c91;
                                                padding:5px;
                                                color: #fff;
                                                border: none;
                                                border-radius: 5px 10px;
                                                text-decoration: none;
                                                text-align: center;
                                                font-size: 16px;" href="{{url('details',$lunch->id)}}">Details</a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                  @endforeach
                                    
                                </div>
                                @else
                                <h2>Lunch Menu</h2>
                                    Please wait sometime
                                @endif
                            </div>
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/lunch_menu.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dinner-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="dinner-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/dinner_menu.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                              @if ($dinner)
                                <h2>Dinner Menu</h2>
                                <div id="owl-dinner" class="owl-carousel owl-theme">
                                  @foreach ($dinner as $dinner)
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="/product_picture/{{$dinner->image}}" alt="">
                                            <div class="price">{{$dinner->discount_price}}</div>
                                            <div class="text-content">
                                                <h4>{{$dinner->title}}</h4>
                                                <p>{!! substr($dinner->description, 0, 80) !!}...</p>
                                                <a style="    display: inline-block;
                                                background-color: #878c91;
                                                padding:5px;
                                                color: #fff;
                                                border: none;
                                                border-radius: 5px 10px;
                                                text-decoration: none;
                                                text-align: center;
                                                font-size: 16px;" href="{{url('add_cart',$dinner->id)}}">Add To Cart</a>
                                                <a style="    display: inline-block;
                                                background-color: #878c91;
                                                padding:5px;
                                                color: #fff;
                                                border: none;
                                                border-radius: 5px 10px;
                                                text-decoration: none;
                                                text-align: center;
                                                font-size: 16px;" href="{{url('details',$dinner->id)}}">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                  @endforeach
                                  @else
                                  <h2>Dinner Menu</h2>
                                      Please wait sometime
                                  @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Book Your Table Now</h2>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <div class="left-image">
                        <img src="img/book_left_image.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-info">
                        <h4>Reservation</h4>
                        <form id="form-submit" action="{{url('reservation')}}" method="POST">
                          @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='day' onchange='this.form.()'>
                                            <option value="">Select day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='hour' onchange='this.form.()'>
                                            <option value="">Select hour</option>
                                            <option value="10-00">10:00</option>
                                            <option value="12-00">12:00</option>
                                            <option value="14-00">14:00</option>
                                            <option value="16-00">16:00</option>
                                            <option value="18-00">18:00</option>
                                            <option value="20-00">20:00</option>
                                            <option value="22-00">22:00</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="name" class="form-control" id="name" placeholder="Full name" required>
                                    </fieldset> 
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="phone" type="phone" class="form-control" id="phone" placeholder="Phone number" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required class="person" name='persons' onchange='this.form.()'>
                                            <option value="">How many persons?</option>
                                            <option value="1-Person">1 Person</option>
                                            <option value="2-Persons">2 Persons</option>
                                            <option value="3-Persons">3 Persons</option>
                                            <option value="4-Persons">4 Persons</option>
                                            <option value="5-Persons">5 Persons</option>
                                            <option value="6-Persons">6 Persons</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Book Table</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright All </p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Designed by <em>Sonjoy</em></p>
                </div>
            </div>
        </div>
    </footer>


    


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>