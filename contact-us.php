<?php include 'header.php'; ?>

<!-- PAGE HERO -->
<section id="page-hero" style="background: url('images/GET IN TOUCH.jpg') center/cover; min-height: 70vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
  <div class="page-hero-bg-lines" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: 
    repeating-linear-gradient(0deg, transparent, transparent 50px, rgba(255,255,255,0.03) 50px, rgba(255,255,255,0.03) 51px),
    repeating-linear-gradient(90deg, transparent, transparent 50px, rgba(255,255,255,0.03) 50px, rgba(255,255,255,0.03) 51px);
    pointer-events: none;">
  </div>
  <!-- <div class="container" style="position: relative; z-index: 5; text-align: center; color: #fff;">
    <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; font-family: 'Oswald', sans-serif; animation: slideInUp 0.9s cubic-bezier(0.68, -0.55, 0.265, 1.55);">
      GET IN <em style="color: #e02020; font-style: italic;">TOUCH</em>
    </h1>
    <p style="font-size: 1.2rem; margin-bottom: 30px; animation: fadeInUp 1.1s ease-out 0.3s both;">
      We'd love to hear from you. Let's start a conversation.
    </p>
    <div style="animation: bounce 2s infinite 0.6s; cursor: pointer;">
      <i class="fas fa-chevron-down" style="font-size: 2rem; color: #e02020;"></i>
    </div> -->
  </div>
</section>

<style>
  @keyframes slideInUp {
    from { opacity: 0; transform: translateY(60px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
  }

  .contact-intro {
    background: #F7F4EF;
    padding: 60px 0;
  }

  .contact-intro-text {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
  }

  .contact-intro-text h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #1A1A1A;
    margin-bottom: 20px;
    font-family: 'Oswald', sans-serif;
  }

  .contact-intro-text p {
    font-size: 1rem;
    color: #666;
    line-height: 1.8;
  }

  .contact-persons {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 50px;
  }

  .contact-person {
    background: #fff;
    padding: 35px;
    border-left: 5px solid #e02020;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    animation: fadeInUp 0.8s ease-out 0.2s both;
  }

  .contact-person:nth-child(2) {
    animation-delay: 0.4s;
  }

  .contact-person:hover {
    box-shadow: 0 8px 25px rgba(224,32,32,0.15);
    transform: translateY(-5px);
  }

  .contact-person h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: #1A1A1A;
    margin-bottom: 15px;
    font-family: 'Oswald', sans-serif;
  }

  .contact-person p {
    font-size: 0.95rem;
    color: #555;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .contact-person i {
    color: #e02020;
    font-size: 1.1rem;
    width: 20px;
  }

  .contact-form-section {
    padding: 80px 0;
    background: #fff;
  }

  .contact-form-wrapper {
    max-width: 700px;
    margin: 0 auto;
  }

  .contact-form-title {
    text-align: center;
    margin-bottom: 50px;
  }

  .contact-form-title h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #1A1A1A;
    margin-bottom: 15px;
    font-family: 'Oswald', sans-serif;
  }

  .contact-form-title p {
    font-size: 0.95rem;
    color: #666;
  }

  .form-group {
    margin-bottom: 25px;
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .form-group:nth-child(1) { animation-delay: 0.3s; }
  .form-group:nth-child(2) { animation-delay: 0.4s; }
  .form-group:nth-child(3) { animation-delay: 0.5s; }
  .form-group:nth-child(4) { animation-delay: 0.6s; }
  .form-group:nth-child(5) { animation-delay: 0.7s; }
  .form-group:nth-child(6) { animation-delay: 0.8s; }

  .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .form-group label {
    display: block;
    font-weight: 600;
    color: #1A1A1A;
    margin-bottom: 8px;
    font-size: 0.95rem;
  }

  .form-group label .required {
    color: #e02020;
  }

  .form-group input,
  .form-group textarea {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #ddd;
    border-radius: 4px;
    font-family: 'Nunito', sans-serif;
    font-size: 0.95rem;
    transition: all 0.3s ease;
  }

  .form-group input:focus,
  .form-group textarea:focus {
    outline: none;
    border-color: #e02020;
    box-shadow: 0 0 10px rgba(224,32,32,0.1);
  }

  .form-group textarea {
    resize: vertical;
    min-height: 120px;
  }

  .submit-btn {
    background: linear-gradient(135deg, #e02020 0%, #ff6b6b 100%);
    color: #fff;
    padding: 15px 50px;
    border: none;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Oswald', sans-serif;
    border-radius: 4px;
    width: 100%;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(224,32,32,0.3);
  }

  .offices-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #1A1A1A 0%, #2d2d2d 100%);
  }

  .offices-title {
    text-align: center;
    margin-bottom: 60px;
  }

  .offices-title h2 {
    font-size: 2.8rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 15px;
    font-family: 'Oswald', sans-serif;
  }

  .offices-title p {
    font-size: 1rem;
    color: #ccc;
  }

  .offices-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
    margin-bottom: 60px;
  }

  .office-card {
    background: rgba(255,255,255,0.08);
    padding: 40px;
    border-radius: 8px;
    border-left: 4px solid #e02020;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    animation: fadeInUp 0.8s ease-out;
  }

  .office-card:nth-child(2) {
    animation-delay: 0.2s;
  }

  .office-card:hover {
    background: rgba(255,255,255,0.12);
    transform: translateY(-5px);
  }

  .office-card h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #e02020;
    margin-bottom: 20px;
    font-family: 'Oswald', sans-serif;
  }

  .office-card p {
    font-size: 0.95rem;
    color: #ccc;
    line-height: 1.8;
    margin-bottom: 10px;
  }

  .support-centers {
    background: rgba(255,255,255,0.05);
    padding: 40px;
    border-radius: 8px;
  }

  .support-centers h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #e02020;
    margin-bottom: 25px;
    font-family: 'Oswald', sans-serif;
  }

  .support-centers ul {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .support-centers li {
    color: #ccc;
    font-size: 0.95rem;
    padding-left: 25px;
    position: relative;
  }

  .support-centers li::before {
    content: '→';
    position: absolute;
    left: 0;
    color: #e02020;
    font-weight: bold;
  }

  /* RESPONSIVE */
  @media (max-width: 768px) {
    #page-hero h1 {
      font-size: 2.2rem;
    }

    .contact-persons {
      grid-template-columns: 1fr;
    }

    .offices-grid {
      grid-template-columns: 1fr;
      gap: 30px;
    }

    .contact-intro-text h2 {
      font-size: 1.8rem;
    }

    .offices-title h2 {
      font-size: 2rem;
    }

    .support-centers ul {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 480px) {
    #page-hero h1 {
      font-size: 1.8rem;
    }

    #page-hero p {
      font-size: 0.95rem;
    }

    .contact-intro-text h2 {
      font-size: 1.5rem;
    }

    .contact-intro-text p {
      font-size: 0.9rem;
    }

    .form-row {
      grid-template-columns: 1fr;
    }

    .contact-person {
      padding: 25px;
    }

    .office-card {
      padding: 30px;
    }
  }
</style>

<!-- HOW TO FIND US -->
<section class="contact-intro">
  <div class="container">
    <div class="contact-intro-text fade-up">
      <h2>How to Find Us</h2>
      <p>Let's meet for a casual coffee to discuss your brand and come up with solutions. Let's connect whenever you're available and explore your brand insights together!</p>
    </div>

    <div class="contact-persons">
      <!-- Domestic Exhibition -->
      <div class="contact-person">
        <h3>For Domestic Exhibition</h3>
        <p><i class="fas fa-user"></i> Mr. Yusuf Khan</p>
        <p><i class="fas fa-phone"></i> +91 9555595269</p>
        <p><i class="fas fa-envelope"></i> xtremestallbuild@gmail.com</p>
      </div>

      <!-- International Exhibition -->
      <div class="contact-person">
        <h3>For International Exhibition</h3>
        <p><i class="fas fa-user"></i> Mr. Manoj Kumar</p>
        <p><i class="fas fa-phone"></i> +91 9716354237</p>
        <p><i class="fas fa-envelope"></i> xtremestallbuild@gmail.com</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT FORM -->
<section class="contact-form-section">
  <div class="container">
    <div class="contact-form-wrapper">
      <div class="contact-form-title">
        <h2>Send Us a Message</h2>
        <p>Fill out the form below and we'll get back to you as soon as possible.</p>
      </div>

      <form id="contactForm" method="POST" action="send-inquiry.php" style="opacity: 0; animation: fadeInUp 0.8s ease-out 0.2s both;">
        <div class="form-row">
          <div class="form-group">
            <label for="fname">First Name <span class="required">*</span></label>
            <input type="text" id="fname" name="fname" required>
          </div>
          <div class="form-group">
            <label for="lname">Last Name <span class="required">*</span></label>
            <input type="text" id="lname" name="lname" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">E-Mail <span class="required">*</span></label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone">
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Tell us about your project..."></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit Inquiry</button>
      </form>
    </div>
  </div>
</section>

<!-- OFFICES & BRANCHES -->
<section class="offices-section">
  <div class="container">
    <div class="offices-title">
      <h2>Office & <em style="color: #e02020;">Branches</em></h2>
      <p>Visit us at any of our locations across India</p>
    </div>

    <div class="offices-grid">
      <!-- Head Office Delhi -->
      <div class="office-card">
        <h3><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>Head Office - Delhi</h3>
        <p>H.No.339 Village Majri</p>
        <p>Post office Karala Near Old Chopal</p>
        <p>New Delhi – 110081</p>
        <p style="margin-top: 15px; color: #e02020; font-weight: 600;">+91 9555595269</p>
      </div>

      <!-- Mumbai Branch -->
      <div class="office-card">
        <h3><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>Mumbai</h3>
        <p>Survey No – 96 Hissa No- 3</p>
        <p>Ms Market Goteghar</p>
        <p>Kalyan Phata – 400612</p>
        <p style="margin-top: 15px; color: #e02020; font-weight: 600;">+91 9555595269</p>
      </div>
    </div>

    <!-- Support Centers -->
    <div class="support-centers">
      <h3>Warehouse & Support Center</h3>
      <ul>
        <li>Delhi - Head Office</li>
        <li>Mumbai - Domestic Support Center</li>
        <li>Ahmedabad</li>
        <li>Bengaluru</li>
        <li>Hyderabad</li>
        <li>Kolkata</li>
        <li>Patna</li>
        <li>Guwahati</li>
        <li>Chandigarh</li>
        <li>Ludhiana</li>
        <li>Jammu</li>
        <li>Uttrakhand</li>
        <li>Lucknow</li>
        <li>Chennai</li>
        <li>Jaipur</li>
        <li>Kochi</li>
      </ul>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section style="padding: 60px 0; background: linear-gradient(135deg, #e02020 0%, #ff6b6b 100%); text-align: center;">
  <div class="container">
    <h2 style="font-size: 2.5rem; font-weight: 700; color: #fff; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
      Let's Create Something Amazing Together
    </h2>
    <p style="font-size: 1.1rem; color: rgba(255,255,255,0.9); margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
      We're here to help you bring your exhibition vision to life.
    </p>
    <a href="#" style="background: #1A1A1A; color: #fff; padding: 15px 45px; font-size: 1rem; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease; font-family: 'Oswald', sans-serif; border-radius: 4px;">
      SCHEDULE A CALL
    </a>
  </div>
</section>

<script>
  // Fade-up animation on scroll
  const fadeElements = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  fadeElements.forEach(el => observer.observe(el));

  // Parallax effect
  window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    const heroBgLines = document.querySelector('.page-hero-bg-lines');
    if (heroBgLines) {
      heroBgLines.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
  });

  // Form submission via AJAX
  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const fname = document.getElementById('fname').value.trim();
      const lname = document.getElementById('lname').value.trim();
      const email = document.getElementById('email').value.trim();
      const phone = document.getElementById('phone').value.trim();
      const message = document.getElementById('message').value.trim();

      // Simple client-side validation
      if (!fname || !lname || !email) {
        alert('Please fill in all required fields.');
        return;
      }

      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return;
      }

      // Prepare form data
      const formData = new FormData();
      formData.append('fname', fname);
      formData.append('lname', lname);
      formData.append('email', email);
      formData.append('phone', phone);
      formData.append('message', message);

      // Show loading state on button
      const submitBtn = form.querySelector('.submit-btn');
      const originalText = submitBtn.textContent;
      submitBtn.textContent = 'Sending...';
      submitBtn.disabled = true;

      // Send form data via AJAX
      fetch('send-inquiry.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;

        if (data.success) {
          alert(data.message);
          form.reset();
        } else {
          alert(data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
        alert('An error occurred. Please try again later.');
      });
    });
  }
</script>

<?php include 'footer.php'; ?>
