
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ZenithBank | Banking Management System</title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<header class="public-navbar">

    <div class="public-logo">
        <span>Zenith</span>Bank
    </div>


    <nav>

        <a href="#home">Home</a>

        <a href="#about">About</a>

        <a href="#services">Services</a>

        <a href="#contact">Contact</a>

        <a href="indexnew.php" class="dashboard-btn">
            Dashboard
        </a>

    </nav>

</header>



<!-- =========================================
     HERO SECTION
========================================= -->

<section id="home" class="hero">

    <div class="hero-content">

        <div class="hero-text">

            <span class="welcome-text">
                WELCOME TO ZENITHBANK
            </span>

            <h1>
                Banking Made
                <span>Simple & Secure</span>
            </h1>

            <p>
                Your trusted banking partner providing reliable,
                secure and convenient financial services for
                individuals and businesses.
            </p>


            <div class="hero-buttons">

                <a href="#services" class="primary-btn">
                    Explore Our Services
                </a>

                <a href="#contact" class="secondary-btn">
                    Contact Us
                </a>

            </div>

        </div>


        <!-- =================================
             IMAGE SLIDER
        ================================== -->

        <div class="bank-slider">

            <div class="slide active">

                <img
                    src=	<link rel="icon"href="pit.jfif"type="image/icon type">
                    alt="Modern Bank Building"
                >

            </div>


            <div class="slide">

                <img
                    src="ran.jfif"
                    alt="Modern Banking Building"
                >

            </div>


            <div class="slide">

                <img
                    src="https://images.pexels.com/photos/17366012/pexels-photo-17366012.jpeg"
                    alt="Bank Building"
                >

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     ABOUT SECTION
========================================= -->

<section id="about" class="about-section">

    <div class="section-container">

        <div class="section-title">

            <span>ABOUT US</span>

            <h2>Banking You Can Trust</h2>

            <p>
                At ZenithBank, we are committed to providing
                dependable banking services designed around
                the needs of our customers.
            </p>

        </div>


        <div class="about-content">

            <div class="about-card">

                <h3>Our Mission</h3>

                <p>
                    To provide secure, convenient and reliable
                    banking services while building long-lasting
                    relationships with our customers.
                </p>

            </div>


            <div class="about-card">

                <h3>Our Vision</h3>

                <p>
                    To become a trusted financial institution
                    recognized for excellent customer service,
                    innovation and professionalism.
                </p>

            </div>


            <div class="about-card">

                <h3>Our Values</h3>

                <p>
                    Integrity, professionalism, customer
                    satisfaction, security and innovation
                    guide everything we do.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     SERVICES SECTION
========================================= -->

<section id="services" class="services-section">

    <div class="section-container">

        <div class="section-title">

            <span>OUR SERVICES</span>

            <h2>What We Offer</h2>

            <p>
                Simple and reliable banking services designed
                to make managing your finances easier.
            </p>

        </div>


        <div class="services-grid">


            <div class="service-card">

                <div class="service-icon">
                    💳
                </div>

                <h3>Customer Accounts</h3>

                <p>
                    Manage your banking accounts with
                    convenient and reliable services.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💰
                </div>

                <h3>Loans & Financing</h3>

                <p>
                    Access financial solutions designed
                    to support your personal and business needs.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💸
                </div>

                <h3>Money Transfer</h3>

                <p>
                    Enjoy convenient and secure money
                    transfer services.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    🔐
                </div>

                <h3>Secure Banking</h3>

                <p>
                    We prioritize the security and privacy
                    of our customers' banking information.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     CONTACT SECTION
========================================= -->

<section id="contact" class="contact-section">

    <div class="section-container">

        <div class="section-title">

            <span>CONTACT US</span>

            <h2>We Are Here To Help</h2>

            <p>
                Have a question? Our team is ready to assist you.
            </p>

        </div>


        <div class="contact-grid">


            <div class="contact-card">

                <div class="contact-icon">
                    📍
                </div>

                <h3>Our Address</h3>

                <p>
                    ZenithBank Banking Centre
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    📞
                </div>

                <h3>Phone</h3>

                <p>
                    +234 800 000 0000
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    ✉️
                </div>

                <h3>Email</h3>

                <p>
                    info@zenithbank.com
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     FOOTER
========================================= -->

<footer class="public-footer">

    <div class="footer-logo">

        <span>Zenith</span>Bank

    </div>


    <p>
        Banking Management System
    </p>


    <div class="footer-links">

        <a href="#home">Home</a>

        <a href="#about">About</a>

        <a href="#services">Services</a>

        <a href="#contact">Contact</a>

    </div>


    <p class="copyright">

        &copy; 2026 ZenithBank. All Rights Reserved.

    </p>

</footer>



<!-- =========================================
     IMAGE SLIDER JAVASCRIPT
========================================= -->

<script>

    let currentSlide = 0;

    const slides = document.querySelectorAll(".slide");


    function showSlide(index) {

        slides.forEach(function(slide) {

            slide.classList.remove("active");

        });


        slides[index].classList.add("active");

    }


    function nextSlide() {

        currentSlide++;

        if (currentSlide >= slides.length) {

            currentSlide = 0;

        }

        showSlide(currentSlide);

    }


    setInterval(nextSlide, 5000);

</script>
<a
    href="https://wa.me/2348164770129?text=Hello%20FISolutions%2C%20I%20am%20interested%20in%20your%20projects."
    class="whatsapp-float"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Contact FISolutions on WhatsApp"
    title="Chat with us on WhatsApp"
>
    <svg viewBox="0 0 32 32" aria-hidden="true">
        <path d="M16 .5C7.45.5.5 7.45.5 16c0 2.73.72 5.41 2.08 7.76L.4 31.6l8.03-2.1A15.4 15.4 0 0 0 16 31.5c8.55 0 15.5-6.95 15.5-15.5S24.55.5 16 .5zm0 28.2c-2.38 0-4.71-.64-6.73-1.85l-.48-.28-4.77 1.25 1.27-4.65-.31-.5A12.68 12.68 0 0 1 3.1 16C3.1 8.9 8.9 3.1 16 3.1S28.9 8.9 28.9 16 23.1 28.7 16 28.7zm6.96-9.5c-.38-.19-2.25-1.11-2.6-1.24-.35-.13-.6-.19-.85.19-.25.38-.98 1.24-1.2 1.5-.22.25-.44.28-.82.09-.38-.19-1.6-.59-3.05-1.88-1.13-1.01-1.89-2.25-2.11-2.63-.22-.38-.02-.58.17-.77.17-.17.38-.44.57-.66.19-.22.25-.38.38-.63.13-.25.06-.47-.03-.66-.1-.19-.85-2.05-1.16-2.81-.3-.74-.61-.64-.85-.65h-.72c-.25 0-.66.1-1.01.47-.35.38-1.33 1.3-1.33 3.16s1.36 3.66 1.55 3.91c.19.25 2.67 4.08 6.47 5.72.9.39 1.6.62 2.15.8.9.29 1.72.25 2.37.15.72-.11 2.25-.92 2.57-1.8.32-.89.32-1.65.22-1.8-.09-.16-.34-.25-.72-.44z"/>
    </svg>
</a>

</body>

</html>

