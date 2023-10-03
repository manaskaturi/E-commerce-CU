<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduConnect - Your Education Marketplace</title>
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href=".\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }
        * {
            overflow-x: hidden;
            overflow-y: visible;
        }
        @media (max-width: 768px) {
            /* Mobile styles */
            .menu-toggle {
                display: flex;
                flex-direction: column;
                cursor: pointer;
            }
            .menu-toggle span {
                width: 30px;
                height: 3px;
                margin: 3px 0;
                background-color: #333;
                transition: 0.4s;
            }
            .nav-links {
                display: none;
                flex-direction: column;
                text-align: center;
                background-color: #093023; 
                position: absolute;
                top: 60px;
                right: 0;
                width: 100%;
                z-index: 1;
            }
            .nav-links.active {
                display: flex;
            }
            .nav-links li {
                padding: 10px;
            }
            .cta-button {
                display: inline-block;
                padding: 10px 20px;
                font-size: 1.2rem;
                background-color: #003549;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s;
            }
            .cta-button:hover {
                background-color: #0056b3;
            }

            .anime {
                display:none;
            }
        }
    </style>
</head>
<body>
    <header style="background-color: #02050e; height: 150px; border: 2px solid white;">
        <nav>
            <div class="logo">
                <h1 style="text-align: center; color: #00171f; font-weight: bolder; background-color: black; display: inline-block; text-align: center; position: relative; left: 44%; padding:10px; color: white; border-radius: 4px; border: 1px solid white;" class="animate__animated animate__fadeInDown animate__delay-0.2s">EDUCONNECT</h1>
            </div>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links">
                <li class="animate__animated animate__bounce" style="text-transform: uppercase;" class="animate_animated animate__backInUp"><a class="animate__animated animate__bounce" href="index.html"><h4 class="animate__animated animate__bounce" style="display: inline;" >Home</h6></a></li>
                <li style="text-transform: uppercase;" class="animate_animated animate__backInUp"><a href="#">Products</a></li>
                <li style="text-transform: uppercase;" class="animate_animated animate__backInUp"><a href="#">Tutors</a></li>
                <li style="text-transform: uppercase;" class="animate_animated animate__backInUp"><a href="#">Community</a></li>
                <li style="text-transform: uppercase;" class="animate_animated animate__backInUp"><a href="login1.html">Login</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero" style="background-color: transparent; color: #fff; height: 100vh; background-image: url(images/earth.jpg);">
        <div class="hellotxt" style=" overflow-y:hidden; background-color:  transparent; position: relative; left: 400px; top:-40px; width: 1000px; height: 630px; display: inline-block; ">
            <h1  class="animate__animated animate__fadeInLeft" style="font-size:50px; text-transform: uppercase; position: relative; left:-120px; top:200px;  color: #1C3D52; " class="animate_animated animate__fadeInLeft" >Welcome to EduConnect</h1>
            <p   class="animate__animated animate__fadeInLeft"  style="position:relative; top:180px; left: -255px; color:white">Your one-stop destination for all your educational needs.</p> 
            <a  class="animate__animated animate__bounce" href="#" class="cta-button" style="background-color: #00171f; padding: 10px; position: relative; top:210px;  left:-420px;text-decoration: none; text-transform: uppercase; color: white; border-radius: 5px; border: 1px solid white; color: white; ">Get Started</a>
        </div>
        <div class="anime" style="position:relative; top:-750px; left: 200px;">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://lottie.host/610a02de-72d6-4ed5-9d6b-9b3917db05f7/dxDaaIadU0.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></lottie-player>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 EDUCONNECT BY CHANDIGARH UNIVERSITY STUDENTS. ALL RIGHTS RESERVED.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
</body>
</html>
