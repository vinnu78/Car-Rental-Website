
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D P Car Rentals</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" sizes="144x144" href="../images/favicon.png">

    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
        <?php  include('..\partials\menubar.php')  ?>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.948338141692!2d75.03907531482137!3d12.911041990895624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4a619d91ee0b5%3A0xfdb962cb4b511ad7!2sShri%20Venkatramana%20Swami%20College!5e0!3m2!1sen!2sin!4v1625978096005!5m2!1sen!2sin" width="300" height="250" style="border:1px solid black;" allowfullscreen="" loading="lazy"></iframe>
<?php include('..\partials\footer.php')?>

</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/homepage.css">

</head>
<body>
<!--
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>CarS</span></a>

    <div class="navbar">
	    <nav>
	      <ul>
	        <li><a href="#home">home</a></li>
			
		    <li><a href="#about us">about us</a> 
			    <ul>
				    <li><a href="#">Mission</a></li>
					<li><a href="#">Vision</a></li>
					<li><a href="#">Our Team</a></li>
				</ul>
			</li>
            <li><a href="#vehicle fleet">vehicle Fleet</a>
			    <ul>
                    <li><a href="#">Luxury Cars</a></li>
					<li><a href="#">Premium Cars</a></li>
					<li><a href="#">General Cars</a></li>
				</ul>
            </li>
            <li><a href="#services">services</a>
			    <ul>
				    <li><a href="#">Self Drive</a></li>
					<li><a href="#">Tours / Chauffeur Driven</a></li>
					<li><a href="#">Weddings & Events</a></li>
					<li><a href="#">Airport / City Transfers</a></li>
					<li><a href="#">Oil Change</a></li>
					<li><a href="#">24/7 Support</a></li>
				</ul>
			</li>
            <li><a href="#rates">rates</a>
			    <ul>
				    <li><a href="#">Self Drive Rates</a></li>
					<li><a href="#">With Driver Rates</a></li>
				</ul>
			</li>
		    <li><a href="review.php">reviews</a>
			    <ul>
				    <li><a href="#">Customer</a></li>
					<li><a href="#">Driver</a></li>
					<li><a href="#">Other</a></li>
				</ul>
			</li>
            <li><a href="#contact us">contact Us</a></li>
	    </ul>
	 </nav>
    </div>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>
	
	<div id="login-btn">
        <button class="btn">Sign Up</button>
        <i class="far fa-user"></i>
    </div>
	
</header> -->

<?php include("nav.php");?>
 
 
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

 

</div>

<section class="home" id="home">

    <h3 data-speed="0" class="home-parallax">welcome to <lowercase>CarS</lowercase></h3>
	
	<h4 data-speed="0" class="home-parallax">Car rental service in Rajkot </h4>
	
	<h5 data-speed="0" class="home-parallax">spells out beyond the travelling </h5>

    <img data-speed="0" class="home-parallax" src="image/Car-png.png" alt="">

<a data-speed=".3" href="loging.php" class="btn home-parallax">rent Car</a>


</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>100+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>5430+</h3>
            <p> rented out</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>720+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-taxi"></i>
        <div class="content">
            <h3>250+</h3>
            <p>new arrivals</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular renting CarS<span></span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/vehicle-1.png" alt="">
                <div class="content">
                    <h3> Rosso Corsa Red Ferrari</h3>
                    <div class="price"> <span>Type : </span> luxury car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 211mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-2.png" alt="">
                <div class="content">
                    <h3>Grigio Silverstone Ferrari</h3>
                    <div class="price"> <span>Type : </span> luxury car  </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2022
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 211mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>
			
			<div class="swiper-slide box">
                <img src="image/rolls_royce.PNG" alt="">
                <div class="content">
                    <h3>rolls_royce</h3>
                    <div class="price"> <span>Type : </span>Laxuary Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> Automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 563bhp
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>
			
			<div class="swiper-slide box">
                <img src="image/range rover.png" alt="">
                <div class="content">
                    <h3></h3>
                    <div class="price"> <span>Type : </span>Laxuary Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2017
                        <span class="fas fa-circle"></span> Automatic
                        <span class="fas fa-circle"></span> Petrol, Diesel & Hybrid
                        <span class="fas fa-circle"></span>250 KMPH
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

			<div class="swiper-slide box">
                <img src="image/mahindra-thar.png" alt="">
                <div class="content">
                    <h3>Mahindra Thar</h3>
                    <div class="price"> <span>Type : </span>Laxuary Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2020
                        <span class="fas fa-circle"></span> Automatic & manual
                        <span class="fas fa-circle"></span>Petrol & diesel
                        <span class="fas fa-circle"></span> 150 kmph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div> 
			
			<div class="swiper-slide box">
                <img src="image/lamb.png" alt="">
                <div class="content">
                    <h3>Maruti Suzuki</h3>
                    <div class="price"><span>Type : </span>Laxuary Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2018
                        <span class="fas fa-circle"></span> Automatic
                        <span class="fas fa-circle"></span> Petrol
                        <span class="fas fa-circle"></span> 360kmp
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>
			<div class="swiper-slide box">
                <img src="image/brza.png" alt="">
                <div class="content">
                    <h3>Brezza</h3>
                    <div class="price"> <span>Type : </span>General Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2018
                        <span class="fas fa-circle"></span> Automatic
                        <span class="fas fa-circle"></span> Petrol
                        <span class="fas fa-circle"></span> 17.38 kmpl
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div> 
			
			<div class="swiper-slide box">
                <img src="image/mercedes-Amg-Gt.png" alt="">
                <div class="content">
                    <h3>mercedes-amg-gt</h3>
                    <div class="price"> <span>Type : </span> Laxuary Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2019
                        <span class="fas fa-circle"></span> automatic 
                        <span class="fas fa-circle"></span>Petrol
                        <span class="fas fa-circle"></span> 318 kmph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>
			
            <div class="swiper-slide box">
                <img src="image/vehicle-3.png" alt="">
                <div class="content">
                    <h3>PERODUA (DAIHATSU) AXIA</h3>
                    <div class="price"> <span>Type : </span> General Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-4.png" alt="">
                <div class="content">
                    <h3>Nissan Skyline GT-R R33</h3>
                    <div class="price"> <span>Type: </span> Luxury Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2022
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 203mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-5.png" alt="">
                <div class="content">
                    <h3>Perodua Bezza Prime Sedan</h3>
                    <div class="price"> <span>type: </span> Premium Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-6.png" alt="">
                <div class="content">
                    <h3>TOYOTA NZE 141</h3>
                    <div class="price"> <span>type : </span> Premium Car </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2019
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 180mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our services <span></span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>self drive</h3>
            <p>We offer a wide range of self drive cars in Sri Lanka from economical to luxury on daily, weekly and monthly terms. </p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-taxi"></i>
            <h3>tours/chauffeur driven</h3>
            <p>At Cars RENTAL SERVICE , providing you with the best experience of Rajkot is our highest priority.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-calendar"></i>
            <h3>weddings & events</h3>
            <p>We are well geared for weddings and special occasions ensuring that the day’s transport runs smoothly and in a punctual manner.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>airport/city transfers</h3>
            <p>We offer city and airport transfers in Rajkot from Airport any location in Rajkot .</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>oil change</h3>
            <p>Once you experience our oil change, you’ll see firsthand why millions of motorists turn to us for “asset protection.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Our 24/7 service guarantee is backed by an in-house staff on call on-site, additional AA cover as well as an extensive network of garages offering roadside assistance if required.</p>
            <a href="#" class="btn"> read more</a>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span></span> Car Vehicle Conditions </h1>
	<h1 class="swiper featured-slider"> <span></span>our sudden references :</h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/car-1.png" alt="">
                <div class="content">
                    <h3>MERCEDES BENZ C350E NEW C-CLASS</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="condition">Leather Int. A/C, Ambient/ Mood lighting, Power Steering, Blue Tooth, With Driver Only</div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-2.png" alt="">
                <div class="content">
                    <h3>CHRYSLER 300C (ROLLS ROYCE FACELIFT)</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="condition">Leather Int. A/C, Power Steering, CD Player, With Driver Only</div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-3.png" alt="">
                <div class="content">
                    <h3>JAGUAR XF 3.0 V6</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="condition">Leather Int. A/C, Power Steering, CD Player, With Driver Only</div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-4.png" alt="">
                <div class="content">
                    <h3>PERODUA BEZZA PRIME SEDAN</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="condition">Perodua Bezza Prime Sedan A/C, Power Steering, CD Player, Auto</div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="image/car-5.png" alt="">
                 <div class="content">
                     <h3>TOYOTA COROLLA NKR 165 AXIO HYBRID</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="condition">A/C, Power Steering, CD Player, Auto</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-6.png" alt="">
                 <div class="content">
                     <h3>TOYOTA YARIS SEDAN/ BELTA</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="condition">A/C, Power Steering, CD Player, Auto</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-7.png" alt="">
                 <div class="content">
                     <h3>BMW 320 - White</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="condition">Leather Int. A/C, Power Steering, CD Player, With Driver Only</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-8.png" alt="">
                 <div class="content">
                     <h3>MERCEDES BENZ C-CLASS</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="condition">A/C, Power Steering, CD Player, With Driver Only</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>You are able to recieve new updates about us</p>

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>

</section>

<section class="reviews" id="reviews">

    <h1 class="heading"> client's reviews<span></span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <div class="content">
                    <p>Ohh wow it was really nice😍. I recieved a good service from them without delay.</p>
                    <h3>Jehan Fernando</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <div class="content">
                    <p>Really happy for being a customer with CarS.</p>
                    <h3>Hashini Herath</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <div class="content">
                    <p>I am adimred their punctuality and attendance. Keep it up👍 </p>
                    <h3>Dilmith Wathsala</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <div class="content">
                    <p>Last year I needed to be at the airport at puncual. Once CarS came to my mind and called them and they were arrived two hours earlier🤗. </p>
                    <h3>Rovinya Wijerama</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <div class="content">
                    <p>Much satisfied!!👌</p>
                    <h3>Theekshana Thenuwara</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <div class="content">
                    <p>Best and indeed attractive vehicle collection they have. As well as they are provided new brands;necessary matchings (vehicles) accrording to customer requirements.</p>
                    <h3>Rehana Pathiraja</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span></span>contact us</h1>

    <div class="row">

        <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14772.603846222933!2d70.89522204999999!3d22.23435035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1712284536737!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        
        <form action="">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="tel" placeholder="subject" class="box">
            <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </div>

</section>

<?php include("footer.php");?>




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/homepage.js"></script>

</body>
</html>