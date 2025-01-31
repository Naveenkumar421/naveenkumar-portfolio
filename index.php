<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--FONT-AWeSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--MAIN CSS-->
    <link rel="stylesheet" href="style.css">
    <title>Naveen's Portfolio</title>
</head>
<body>
    <!--HEADER DESIGN-->
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class="fa-solid fa-bars" id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!--HOME SECTION DESIGN-->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hi, Myself</h3>
            <h1>Naveen Junior</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Hard Work is worthless for those who didn't believe in themeselves</p>
            <div class="social-media">
                <a href="https://www.facebook.com/profile.php?id=100066237694073&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
                <a href="http://github.com/Naveenkumar421"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.instagram.com/last._.believer?igsh=MXRsN2ljM2ozcmJrdA=="><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/naveenkumar-m-8682362a2?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <a href="cv.webp" download="cv" class="btn">Download CV</a>
        </div>

        <div class="home-img">
            <img src="naveen.jpg" alt="">
        </div>
    </section>

    <!--ABOUT SECTION DESIGN-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="naveen.jpg" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Web Developer</h3>
            <p>Hard Work is worthless for those who didn't believe in themeselves</p>
            <a href="#" class="btn">Read more</a>
        </div>
    </section>

    <!--SERVICES SECTION DESIGN-->
    <section class="services" id="services">
        <h2 class="headinng">My <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class="fa-solid fa-code"></i>
                <h3>Web Development</h3>
                <p>Hard Work is worthless for those who didn't believe in themselves</p>
                <a href="" class="btn">Read more</a>
            </div>

            <div class="services-box">
                <i class="fa-solid fa-palette"></i>
                <h3>UI/UX Designing</h3>
                <p>Hard Work is worthless for those who didn't believe in themselves</p>
                <a href="" class="btn">Read more</a>
            </div>

            <div class="services-box">
                <i class="fa-brands fa-android"></i>
                <h3>App Development</h3>
                <p>Hard Work is worthless for those who didn't believe in themselves</p>
                <a href="" class="btn">Read more</a>
            </div>
        </div>
    </section>

    <!--PORTFOLIO SECTION DESIGN-->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Projects</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="img1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Hard Work is worthless for those who didn't believe in themselves</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img2.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Hard Work is worthless for those who didn't believe in themselves</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img3.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Hard Work is worthless for those who didn't believe in themselves</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img4.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Hard Work is worthless for those who didn't believe in themselves</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img5.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Hard Work is worthless for those who didn't believe in themselves</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img6.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Hard Work is worthless for those who didn't believe in themselves</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>
        </div>
    </section>

    <!--CONTACT SECTION DESIGN-->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="message.php" method="post">
            <div class="input-box">
                <input type="text" name="fName" id="fName" placeholder="Full Name">
                <input type="email" name="email" id="email" placeholder="Email Address">
            </div>

            <div class="input-box">
                <input type="number" name="mobNumber" id="mobNumber" placeholder="Mobile Number">
                <input type="text" name="emailSub" id="emailSub" placeholder="Email Subject">
            </div>
            <textarea name="textContent" id="textContent" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" name="sendMessage" class="btn">
        </form>
    </section>


    <!--FOOTER SECTION DESIGN-->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by @naveenkumarit005 | All Rights Reserved.</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class="fa-solid fa-angle-up"></i></a>
        </div>
    </footer>

    <!--SCROLL REVEAL JS-->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!--TYPED JS-->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!--MAIN JS DESIGN-->
    <script src="main.js"></script>
</body>
</html>