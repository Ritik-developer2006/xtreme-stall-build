  <!-- FOOTER -->
  <footer>
    <div class="footer-top">
      <div class="footer-col">
        <h4>About XtremeStallBuild</h4>
        <p>Welcome to Xtreme Stall Build, a premier stall designing and fabrication company based in Delhi, India. We are the art of designing and building spectacular exhibition stalls, kiosk displays, and office interiors. Our portfolio speaks for our excellence.</p>
        <a href="about-us.php" class="btn-outline" style="margin-top:14px; font-size:12px;">Read More</a>
      </div>
      <div class="footer-col">
        <h4>Our Services</h4>
        <ul>
          <li><a href="3d-stall-design.php">3D Stall Design</a></li>
          <li><a href="kiosk-design.php">Kiosk Design</a></li>
          <li><a href="fabrication.php">Fabrication</a></li>
          <li><a href="workplace-office-interior.php">Workplace/Office Interior</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="our-process.php">Our Process</a></li>
          <li><a href="our-work.php">Our Work</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Get In Touch</h4>
        <address>
          <p>📍 <strong>Delhi NCR Head Office:</strong><br>
          HOUSE NO.339-A, Village Mohammad Pur Majri, Near Shiv Mandir Delhi - 110081</p>
          <p>📞 +91 9555595269</p>
          <p>✉ xtremestallbuild@gmail.com</p>
        </address>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© XtremeStalBuild 2024. All Rights Reserved. | Global web to help you – Stall Designing &amp; Display Solutions, Delhi</span>
      <span>Designed with ❤ in Delhi</span>
    </div>
  </footer>

  <!-- Bootstrap 5 JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Scroll reveal
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); }
      });
    }, { threshold: 0.12 });
    reveals.forEach(el => observer.observe(el));
  </script>
</body>
</html>
