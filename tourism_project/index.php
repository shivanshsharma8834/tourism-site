<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Never Stop Exploring!</title>
        <!--font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="style.css" rel="stylesheet">

        <script type="text/javascript" src="script.js" defer></script>
    </head>
    <body>
        <header class="header">

            <div id="menu-bar" class="fas fa-bars active"></div>

            <a href="#" class="logo"><span>T</span>ravel</a>
            <nav class="navbar active">
                <a href="#home">Home</a> 
                <a href="#category">Adventures</a>
                <a href="#packages">Packages</a>
                <a href="#gallery">Gallery</a>
                <a href="#contact">Contact Us</a>
            </nav>

            <div class="logo">
                <i class="fas fa-search" id="search-btn"></i>
                <i class="fas fa-user" id="login-btn"></i>
            </div>

            <form   action="" class="search-bar-container hidden ">
                <input type="search" id="search-bar" placeholder="search here...">
                <label for="search-bar" class="fas fa-search"></label>
            </form>
            

           
        </header>

        <div class="login-form-container">

            <i class="fas fa-close" id="form-close"></i>
            <form action="login.php" method="post">
                <h3>Login</h3>
                <input type="email" class="box" id="email" name="email" placeholder="enter your email" autocomplete="off"  required>
                <input type="password" class="box" id="password" name="password" placeholder="enter your password" autocomplete="off" required>
                <input type="submit" value="login now" class="btn">
                <input type="checkbox" id="remember">
                <label for="remember">Remember me</label>
                <p>forget password?<a href="#">click here</a></p>
                <p>don't have an account?<a href="register.php" target="_blank">Register now</a></p>
            </form>
            
        </div>

        <!--home section start-->

        <section class="home" id="home">

            <div class="content">
                <h3>adventure is worthwile</h3>
                <p>Discover New Places With Us, Adventure Awaits</p>
                <a href="#packages" class="btn">Discover More</a>
            </div>

            <div class="controls">
                <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
                <span class="vid-btn" data-src="images/vid-2.mp4"></span>
                <span class="vid-btn" data-src="images/vid-3.mp4"></span>
                <span class="vid-btn" data-src="images/vid-4.mp4"></span>
                <span class="vid-btn" data-src="images/vid-5.mp4"></span>
            </div>

            <div class="video-container">
                <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>           
            </div>

        </section>

        <!--home section ends-->

        <!--Adventure section starts-->
        <section class="category" id="category">

            <h1 class="heading" ><u>Adventure Ideas</u></h1>
        
            <div class="box-container">
        
                <div class="box">
                    <img src="images/category-1.jpg" alt="">
                    <h3>Bungee Jump</h3>
                    <p>Bungee jumping is an activity that involves a person jumping from a great height while connected to a large elastic cord.</p>
                    <a href="https://en.wikipedia.org/wiki/Bungee_jumping" class="btn">Read More</a>
                </div>
        
                <div class="box">
                    <img src="images/category-2.jpg" alt="">
                    <h3>Zip Lines</h3>
                    <p>A zip-line, zip line, zip-wire, or flying fox is a pulley suspended on a cable, usually made of stainless steel, mounted on a slope.</p>
                    <a href="https://en.wikipedia.org/wiki/Zip_line" class="btn">Read More</a>
                </div>
        
                <div class="box">
                    <img src="images/category-4.jpg" alt="">
                    <h3>Canoeing</h3>
                    <p>Canoeing is an activity which involves paddling a canoe with a single-bladed paddle.</p>
                    <a href="https://en.wikipedia.org/wiki/Canoeing" class="btn">Read More</a>
                </div>
        
            </div>

        </section>

        <!--Adventure section ends-->

        <!--Package Section starts-->

        <section class="packages" id="packages">
            <h1 class="heading"><u>Popular Packages</u></h1>
            <div class="card-container">
            <div class="card">
                <div class="card-img" id="jaipur"> </div>
                <div class="card-description">
                    <h2 id="visit-header">Visit Jaipur</h2>
                    <p>We organise Jaipur & Rajasthan tours that offer incredible attractions like Forts and Palaces, Deserts, Traditional Villages, colorful cattle fairs, sacred places, camel safaris, beautiful lakes, hill stations and the people.The city of Jaipur was founded by the King of Amber.</p>   
                </div>
                <button id="booknowbtn">
                    <a href="https://www.tripadvisor.in/Attractions-g304555-Activities-Jaipur_Jaipur_District_Rajasthan.html">View more information</a>
                </button>
            </div>
            
            <div class="card">
                <div class="card-img" id="paris"> </div>
                <div class="card-description">
                    <h2 id="visit-header">Visit Paris</h2>
                    <p>Paris is the capital and most populous city of France. Situated on the Seine River, in the north of the country, it is in the centre of the Île-de-France region, also known as the région parisienne, "Paris Region". The City of Paris has an area of 150 km².</p>
                </div>
                <button id="booknowbtn"><a href="https://www.tripadvisor.in/Attractions-g187147-Activities-c42-t224-Paris_Ile_de_France.html">View More Information</a></button>
            </div>

            <div class="card">
                <div class="card-img" id="sb"> </div>
                <div class="card-description"> 
                    <h2 id="visit-header"> Visit Santa Barbara </h2>  
                    <p> Santa Barbara is a city on the central California coast, with the Santa Ynez Mountains as dramatic backdrop. Downtown, Mediterranean-style white stucco buildings with red-tile roofs reflect the city’s Spanish colonial heritage. Upscale boutiques and restaurants. </p>
                </div>
                <button id="booknowbtn"> <a href="https://www.tripadvisor.com/Tourism-g33045-Santa_Barbara_California-Vacations.html"> View more information </a> </button>
            </div>
           
           <div class="card">
                <div class="card-img" id="hawaii"> </div>
                <div class="card-description"> 
                    <h2 id="visit-header">Visit Hawaii</h2>
                    <p>Hawaii, constituent state of the United States of America. Hawaii (Hawaiian: Hawai‘i) became the 50th U.S. state on August 21, 1959. Hawaii is a group of volcanic islands in the central Pacific Ocean. The islands lie 2,397 miles (3,857 km) from San Francisco. </p>
                </div>
                <button id="booknowbtn"><a href="https://www.tripadvisor.in/Attractions-g28932-Activities-c42-Hawaii.html">View more information</a></button>
           </div>

           <div class="card">
            <div class="card-img"> </div>
            <div class="card-description"> 
                <h2 id="visit-header"> Visit Austin </h2> 
                <p> Austin is the state capital of Texas, an inland city bordering the Hill Country region. Home to the famous 6th Street bar scene, Austin is known for its eclectic live-music scene centered around country, blues, and rock. Its many parks and lakes are popular for hiking.</p>
            </div>
            <button id="booknowbtn"> <a href="https://www.tripadvisor.com/Tourism-g30196-Austin_Texas-Vacations.html"> View more information </a> </button>
        </div>
        </div>
        </section>
        <!--Package Section Ends-->

        <!--Gallery Section Starts-->
        <section class="gallery" id="gallery">
            <h1 class="heading"><u>Gallery</u></h1>
            <div class="container">
                <div class="item tm1">
                    <img src="images/gallery-1.jpg">
                    <p>India</p>
                </div>

                <div class="item tm2">
                    <img src="images/gallery_bangkok.jpg">
                    <p>Bangkok</p>
                </div>

                <div class="item tm3">
                    <img src="images/galleey_malasiya.jpg">
                    <p>Malasiya</p>
                </div>

                <div class="item tm4">
                    <img src="images/gallery_paris.jpg">
                    <p>Paris</p>
                </div>

                <br>
                <span>

                    <div class="item tm5>">
                        <img src="images/gallery_china.jpg">
                        <p>China</p>
                    </div>

                    <div class="item tm6">
                        <img src="images/gallery_iceland.jpg">
                        <p>Iceland</p>
                    </div>

                    <div class="item tm7">
                        <img src="images/gallery_poland.jpg">
                        <p>Poland</p>
                    </div>
                </span>
                <br>

                <div class="item tm8">
                    <img src="images/gallery_italy.jpg">
                    <p>Italy</p>
                </div>

                <div class="item tm2">
                    <img src="images/gallery_switzerland.jpg">
                    <p>Switzerland</p>
                </div>

                <div class="item tm3">
                    <img src="images/gallery_mumbai.jpg">
                    <p>Mumbai</p>
                </div>

                <div class="item tm4">
                    <img src="images/gallery_sydney.jpg">
                    <p>Sydney</p>
                </div>
            </div>
        </section>
        <!--Gallery Section ends-->
        <!--Contact section starts-->
        <h1 class="contact_heading"><u>Contact Us</u></h1>
        <section class="contact" id="contact">
            <div class="image">
                <img src="images/contact.jpg">
            </div>
            <div class="row">

                <form action="contact_us.php" method="post">
                    <div class="inputbox">
                        <input type ="text" placeholder="name" name="name" autocomplete="off">
                        <input type="email" placeholder ="email" name="email" autocomplete="off" >
                    </div>
                    <div class="inputbox">
                        <input type="number" placeholder="number" name="number" autocomplete="off">
                        <input type="text" placeholder="subject" name="subject" autocomplete="off">
                    </div>
                    <textarea placeholder="message" name="message" id="" cols="30" rows="10" autocomplete="off"></textarea>
                    <input type="submit" class="btn" value="send message">
                </form>
            </div>

 
    
        </section>
        <!--Contact Section ends-->


        <!--Footer section starts-->
        <section class="footer">

            <div class="box-container">
        
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="#home">Home</a>  
                    <a href="#category">Adventures</a>  
                    <a href="#packages">Packages</a>
                    <a href="#query">Query</a>
                </div>
        
                <div class="box">
                    <h3>Extra Links</h3>
                    <a href="#contact">Ask Questions</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Privacy Policy</a>
                </div>
        
                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +91-XXXXXXXXX </a>
                    <a href="#"> <i class="fas fa-envelope"></i> xyz@gmail.com </a>
                    <a href="#"> <i class="fas fa-map"></i> Jaipur, India - 30000</a>
                </div>
        
                <div class="box">
                    <h3>Follow Us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
                    <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
                    <a href="#"> <i class="fab fa-github"></i> Github </a>
                </div>
            </div>
        <!--Footer section ends-->


    </body>
</html>
