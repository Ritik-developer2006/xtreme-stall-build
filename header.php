<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Xtreme Stall Build – Stall Designing & Display Solutions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

  <!-- TOP BAR -->
  <div class="topbar">
    <span>📞 +91 9555595269 &nbsp;|&nbsp; ✉ xtremestallbuild@gmail.com</span>
    <div class="social-icons">
      <a href="https://www.facebook.com/people/Xtreme-Stall-Build/100064299902406/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/xtremestallbuild/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/in/xtreme-stall-build-9986841b2/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
      <a href="https://www.youtube.com/@xtremestallbuild1151" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
      <a href="https://x.com/StallBuild" target="_blank" rel="noopener noreferrer"><i class="fab fa-x-twitter"></i></a>
    </div>
  </div>

  <!-- HEADER / NAV -->
  <header>
    <nav>
      <div class="logo">
        <img src="images/XSB_Logo.webp" alt="Xtreme Stall Build Logo" style="width: 100%; height: 50px;"/>
      </div>
      <ul class="nav-links" id="navLinks">
        <li><a href="index.php">Home</a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="our-process.php">Our Process</a></li>
        <li class="nav-dropdown">
          <a href="#">Our Services <i class="fas fa-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="3d-stall-design.php">3D Stall Design</a></li>
            <li><a href="kiosk-design.php">Kiosk Design</a></li>
            <li><a href="fabrication.php">Fabrication</a></li>
            <li><a href="workplace-office-interior.php">Workplace/Office Interior</a></li>
          </ul>
        </li>
        <li><a href="our-work.php">Our Work</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
      <button class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="#" class="btn-download">Download Brochure</a>
    </nav>
  </header>

  <script>
    // Mobile hamburger menu toggle
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    hamburger.addEventListener('click', function(e) {
      e.preventDefault();
      hamburger.classList.toggle('active');
      navLinks.classList.toggle('active');
    });

    // Close menu when a link is clicked
    const navItems = navLinks.querySelectorAll('a');
    navItems.forEach(item => {
      item.addEventListener('click', function() {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
      });
    });

    // Dropdown functionality - click to toggle
    const dropdown = document.querySelector('.nav-dropdown');
    const dropdownLink = dropdown.querySelector('a');
    const dropdownMenu = dropdown.querySelector('.dropdown-menu');

    // Toggle on click
    dropdownLink.addEventListener('click', function(e) {
      e.preventDefault();
      dropdownMenu.classList.toggle('active');
    });

    // Close on outside click
    document.addEventListener('click', function(e) {
      if (!dropdown.contains(e.target)) {
        dropdownMenu.classList.remove('active');
      }
    });
  </script>
