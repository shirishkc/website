


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="index.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


        <title>Portfolio</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"><img src="./ok.JPG" width="100" height="100" style="border-radius: 50%"></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">PORTFOLIO</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        <a href="logout.php" style="margin-left:200px;">Logout</a>
                    </ul>
          
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hello,<br>I'am <span class="home__title-color">Shirish</span><br>A SOFTWARE ENGINEERING STUDENT CURRENTLY STUDYING IN GCES.</h1>

                    <a href="#" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/shirish-kc-033ab0211/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.instagram.com/aka_pasa/" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://github.com/shirishpasa" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                    <a href="https://www.facebook.com/seerish.kaysee/"  class="home__social-icon"><i class="bx bxl-facebook"></i></a>
                    <a href="https://twitter.com/AlxiPasa" class="home__social-icon"><i class="bx bxl-twitter"></i></a>
                </div>


                <div class="home__img">    
                    <img src="img/IMG20191108110026.jpg" alt="" style="border-radius: 80%;">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="img/1.JPG" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I am a Software Engineer student , Technician,Drone Pilot and A Trader</h2>
                        <p class="about__text">Being a drone pilot, I have done many aerial photoshoot around the Pokhara valley.In my leisure time,I support my family business. Apart from this,I love to do different adventerous activites like hiking,travelling and paragliding .</p>           
                    </div>                                    
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">55%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-PYTHON skills__icon'></i>
                                <span class="skills__name">PYTHON</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">GRAFTTI</span>
                            </div>
                            <div class="skills__bar skills__gf">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">10%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="img/graffiti.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">PORTFOLIO</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="img/me.JPG" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/2.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/2nd.JPG" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/work4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/drone.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/scene.JPG" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
                 
               <!-- //if(isset($_GET['error']))
			  // {
				//if($_GET['error'] == "emptyfields")
				//{
					//echo '<p class="error" style="margin-left:900px; color:red; position:absolute; top:3080px; font-size:large;"> Fill in all feilds </p>';
			//	}
				
				// elseif($_GET['error'] == "invalidemail")
				// //{
				// 	echo '<p class="error" style="margin-left:900px; color:red; top:3080px; font-size:large;"> Plz Enter A Valid Email Id </p>';
				// }
				// elseif($_GET['success'] == "mailsend")
				// {
				// 	echo '<p class="error" style="margin-left:900px; color:green; top:3080px; font-size:large;">  Mail Send</p>';
				// }
                // elseif($_GET['success'] == "mailnotsend")
				// {
				// 	echo '<p class="error" style="margin-left:900px; color:red; top:3080px; font-size:large;"> Plz Resend Your Email</p>';
				// }
            //} -->
            
            <!-- // if(isset($_GET['error']))
			//    {
				// if($_GET['success'] == "mailsend")
				// {
				// 	echo '<p class="error" style="margin-left:900px; color:green; position:absolute; top:3080px; font-size:large;"> Mail Sent </p>';
				// }
            // } -->
                
            
            

                <div class="contact__container bd-grid">
                    <form action="contactform.php" class="contact__form" method="post">
                        <input type="text" placeholder="Name" class="contact__input" name="name">
                        <input type="mail" placeholder="Email" class="contact__input" name="email">
                        <textarea name="message" id="" cols="0" rows="10" class="contact__input"  placeholder="Query"></textarea>
                        
                        <input type="submit" name="login" class="btn">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">SHIRISH</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p> shirish 2022 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="index.js"></script>
    </body>
</html>
    