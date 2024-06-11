
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unlock Dreams</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <img src="images/DreamsUnlock1.jpg" alt="">
        <div class="navigation">
            <ul style="margin-top: 12px;">
                <i id="menu-close" class="fa-solid fa-xmark"></i>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="course.html">Courses</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <button class="book-now form-open">Book Your Free Trial, Now <i class="fa-solid fa-angle-right"></i></button>
            <!-- <ul>
                <li class="book-now form-open"><a href="#">Book Your Free Trial, Now <i class="fa-solid fa-angle-right"></i></a></li>
            </ul> -->
            <img id="menu" src="images/menu1.png">
        </div>
    </nav>

    <!-- Home -->
    <section id="home">
        <h2>Fulfill Your Goals with Unlock Dreams</h2>
        <p>The best way to learn a skill is by applying what you learn in real scenarios. At Unlocked Dreams, we take it a notch higher by giving you actual work experience-based learning. So, instead of just watching tutorials, you actually experience building real products like professional engineers.
        </p>
        <div class="btn">
            <a href="#registration" class="form-open1">
                Start Learning 
            </a>
        </div>


        
       
            <!-- First Page -->
        <section class="home1">
            <div class="form-container">
                <i class="fa-solid fa-xmark form_close"></i>
                <div class="form login-form">
                    <form method="POST">
                        <h1>Book Your Free Trail</h1>
                        <div class="input_box">
                            <input type="email" placeholder="Enter your Email" id="email" name="email" required>
                            <i class="fa-regular fa-envelope" id="email2"></i>
                        </div>
                        <div class="input_box">
                            <input type="tel" placeholder="Enter your phone number" id="phone_no" name="phone_no" required>
                            <i class="fa-solid fa-phone " id="phone"></i>
                        </div>
                        <div class="option_field" style="margin-bottom: 20px;">
                            <span class="checkbox">
                                <input type="checkbox" id="check">
                                <label for="check">I agree to receive Whatsapp messages on this number</label>
                            </span>
                        </div>
                        <a class="next-btn1" >Next <i class="fa-solid fa-angle-right"></i></a>
                    </form>
                </div>

                <!-- Second Page -->
                <div class="form signup-form">
                    <form action="index.php" method="POST">
                        <h1>Book Your Free Trail</h1>
                        <div class="input_box">
                            <input type="text" placeholder=" Enter your Name" id="name" name="name" required>
                            <i class="fa-solid fa-id-card" id="name1"></i>
                        </div>
                        <div class="input_box">
                            <input type="text" placeholder=" Education Qualification (Eg.B.Tech)" id="education" name="education" required>
                            <i class="fa-solid fa-book" id="edu"></i>
                        </div>
                        <div class="input_box">
                            <input type="text" placeholder=" Graduation Year" id="year" name="year" required>
                            <i class="fa-solid fa-graduation-cap" id="graduation"></i>
                        </div>
                        <div class="input_box">
                            <input type="text" placeholder=" Are you working?" id="working" name="working" required>
                            <i class="fa-solid fa-briefcase" id="working1"></i>
                        </div>
                        <div class="input_box" style="margin-bottom: 20px;">
                            <input type="date" placeholder=" Trial workshop slot" id="slot" name="slot" required>
                            <i class="fa-solid fa-calendar-days" id="slot1"></i>
                        </div>
                        <a class="next-btn2" href="#" name="book_trial">Book Your Free Trail <i class="fa-solid fa-angle-right"></i></a>
                    </form>
                </div>
            </div>
        </section>

       

        
    </section>

    <!-- Features -->
    <section id="Features">
        <h1>Awesome Features</h1>
        <p>Replanish man have thing gathering lights yeilding shall you</p>
        <div class="fea-base">
            <div class="fea-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Scholarship Facility</h3>
                <p>One make creepeth, man bearing theira firmament won't great heaven</p>
            </div>
            <div class="fea-box">
                <i class="fa-solid fa-file"></i>
                <h3>Dell Online Course</h3>
                <p>One make creepeth, man bearing theira firmament won't great heaven</p>
            </div>
            <div class="fea-box">
                <i class="fas fa-award"></i>
                <h3>Global certification</h3>
                <p>One make creepeth, man bearing theira firmament won't great heaven</p>
            </div>
        </div>
    </section>

    <!-- Courses -->
    <section id="course">
        <h1>Our Popular Courses</h1>
        <p>Replanish man have thing gathering lights yeilding shall you</p>
        <div class="course-box">

            <div class="courses">
                <img src="images/c1.jpg">
                <div class="details">
                    <span>Updated 21/8/21</span>
                    <h6>JavaScript Beginners Courses</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>
            <div class="courses">
                <img src="images/c2.jpg">
                <div class="details">
                    <span>Updated 21/8/21</span>
                    <h6>HTML & CSS Beginners Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>
            <div class="courses">
                <img src="images/c3.jpg">
                <div class="details">
                    <span>Updated 21/8/21</span>
                    <h6>Python Beginners Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>
            <div class="courses">
                <img src="images/c4.jpg">
                <div class="details">
                    <span>Updated 21/8/21</span>
                    <h6>Web Design Crash Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>
            <div class="courses">
                <img src="images/c5.jpg">
                <div class="details">
                    <span>Updated 21/8/21</span>
                    <h6>Web Development Crash Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>
            <div class="courses">
                <img src="images/c6.jpg">
                <div class="details">
                    <span>Updated 21/8/21</span>
                    <h6>Angular Beginners Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>

        </div>
    </section>

    <!-- Registration -->

    <section id="registration">
        <div class="reminder">
            <p>Get 100 Online Courses for Free</p>
            <h1>Register To Get It</h1>
            <div class="time">
                <div class="date">
                    18 <br> Days
                </div>
                <div class="date">
                    23 <br> Hours
                </div>
                <div class="date">
                    06 <br> Minutes
                </div>
                <div class="date">
                    58 <br> Seconds
                </div>
            </div>
        </div>

            <!-- Sign-In Page -->
         <div class="container2" id="sign-in">
            <div class="form2">
                
                <h1>Sign-In</h1>
            <div>
                <label for="email">Email</label>
                <i class="far fa-envelope"></i>
                <input type="email" name="email2" id="email2" placeholder="abc@gmail.com" />
                <!-- <i class="fas fa-exclamation-circle "></i>
                <i class="far fa-check-circle "></i> -->
                <!-- <div class="error"></div> -->
            </div>      
            <div>
                <label for="password">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" name="password2" id="password2" placeholder="Password here" />
                <!-- <i class="fas fa-exclamation-circle "></i>
                <i class="far fa-check-circle "></i> -->
                <!-- <div class="error"></div> -->
            </div>
            <div class="remember">
                <label><input type="checkbox">Remember me</label>
                <a href="#" id="forgot">Forgot Password?</a>
            </div>
            <button type="submit" id="submit">Sign-In</button>
            <div class="register-link">
                Don't have an account? <a href="#registration" id="sign-up">Sign-Up</a>
            </div>
            </div>
        </div>  

            <!-- Sign-Up Page -->
            <div class="container1" id="con1">
                
                <form id="form1" method="POST" action="connect.php">
                    <div class="social">
                    
                    <div class="title">Get Started</div>
                    <div class="question">
                      Already Have an Account? <br />
                      <a href="#sign-in">Sign In</a>
                    </div>
              
                    <div class="newbtn">
                      <div class="btn-1">
                        <img src="https://img.icons8.com/color/25/000000/google-logo.png" />
                        Sign Up
                      </div>
                      <div class="btn-2">
                        <img src="https://img.icons8.com/ios-filled/25/ffffff/facebook-new.png" />
                        Sign Up
                      </div>
                    </div>
              
                    <div class="or">Or</div>
                  </div>
              
                  <div>
                    <label for="username">User Name</label>
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" id="username" placeholder="Vrushali Chaube" />
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                    <div class="error"></div>
                  </div>
              
                  <div>
                    <label for="email1">Email</label>
                    <i class="far fa-envelope"></i>
                    <input type="email" name="email1" id="email1" placeholder="abc@gmail.com" />
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                    <div class="error"></div>
                  </div>       
                
                  <div>
                    <label for="password1">Password</label>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password1" id="password1" placeholder="Password here" />
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                    <div class="error"></div>
                  </div>
              
                  <button type="submit" id="submit" name="submit">Sign-Up</button>
                </form>
            
            </div>
        
    </section>

    <!-- Profile -->
    <section id="experts">
        <h1>Community Experts</h1>
        <p>Replanish man have thing gathering lights yeilding shall you</p>
        <div class="expert-box">

            <div class="profile">
                <img src="images/pro1.webp">
                <h6>Ema Irnik</h6>
                <p>Python & Algorithm Expert</p>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/pro2.webp">
                <h6>Jason</h6>
                <p>Data Analysis Expert</p>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/pro3.webp">
                <h6>Maalik</h6>
                <p>Full Stack Developer</p>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/pro4.webp">
                <h6>Jennifer</h6>
                <p>Design Expert</p>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Managed Websites</li>
            <li>Marketing Services</li>
        </div>
        <div class="footer-col">
            <h3>Quick Links</h3>
            <li>Jobs</li>
            <li>Brand Assets</li>
            <li>Investor Relations</li>
            <li>Terms of Service</li>
        </div>
        <div class="footer-col">
            <h3>Features</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Managed Websites</li>
            <li>Marketing Services</li>
        </div>
        <div class="footer-col">
            <h3>Resources</h3>
            <li>Guides</li>
            <li>Research</li>
            <li>Experts</li>
            <li>Marketing Services</li>
        </div>
        
        <div class="footer-col">
            <h3>Newsletter</h3>
            <p>You can trust us, we only send promo offers.</p>
            <div class="subscribe">
                <input type="text" placeholder="Your Email Address">
                <a href="#" class="orange">SUBSCRIBE</a>
            </div>
        </div>

        <div class="copyright">
            <p>copyright @2024 All rights reserverd | This template is made by Unlocked Dreams ❤️ </p>
            <div class="pro-links">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
        </div>
    </footer>

    <script>
        $('menu').click(function(){
            $('nav .navigation ul').addClass('active')
        });
        $('menu-close').click(function(){
            $('nav .navigation ul').removeClass('active')
        });

        // Form
        const formOpenBtn = document.querySelector(".form-open"),
        home = document.querySelector(".home1"),
        formContainer = document.querySelector(".form-container"),
        formCloseBtn = document.querySelector(".form_close"),
        nextBtn1= document.querySelector(".next-btn1"),
        nextBtn2= document.querySelector(".next-btn2");

        formOpenBtn.addEventListener("click", () =>home.classList.add("show"));
        formCloseBtn.addEventListener("click", () =>home.classList.remove("show"));

        nextBtn1.addEventListener("click",(e) => {
            e.preventDefault();
            formContainer.classList.add("active");
        });


        //Start learning
        let id = (id) => document.getElementById(id);
        let classes = (classes) => document.getElementsByClassName(classes)

        let username = id("username"),
        email = id("email1"),
        password = id("password1"),
        form = id("form1"),
        errorMsg = classes("error"),
        successIcon = classes("success-icon"),
        failureIcon = classes("failure-icon");

        form.addEventListener("submit", (e)=>{
            e.preventDefault();
            
            engine(username, 0, "Username cannat be blank");
            engine(email, 1, "Email cannat be blank");
            engine(password, 2, "Password cannat be blank");
        })

        let engine = (id,serial,message) => {
            if(id.value.trim() === ''){
                errorMsg[serial].innerHTML = message;
                failureIcon[serial].style.opacity = "1";
                successIcon[serial].style.opacity = "0"
            }
            else{
                errorMsg[serial].innerHTML = "";
                failureIcon[serial].style.opacity = "0";
                successIcon[serial].style.opacity = "1"
            }
        }


    </script>
</body>
</html>

 <?php
    include 'connect.php';

    if(isset($_POST['book_trial'])){
        $email = $_POST["email"];
        $phone_no = $_POST["phone_no"];
        $name = $_POST["name"];
        $education = $_POST["education"];
        $year = $_POST["year"];
        $working= $_POST["working"];
        $slot = $_POST["slot"];
        
    
        //prepare and execute the database insertion
        $sql = "INSERT INTO `free_trial` ( `email`, `phone_no`, `name`, `education`, `year`, `working`, `slot`) VALUES ( ' $email', '$phone_no', '$name', '$education', '$year', '$working', '$slot')";

        if($conn->query($sql) == TRUE){
?>
            <script>
            swal({
                title: "Success",
                text: "Thanks for booking free trail!",
                icon: "success",
            });
            </script>
<?php            
        }
        }
    

?>  
