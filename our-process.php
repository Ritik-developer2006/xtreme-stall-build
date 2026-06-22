<?php include 'header.php'; 
$experience_years = date("Y") - 2017;

function numberToWords($number) {
    $words = [
        0 => 'Zero', 1 => 'One', 2 => 'Two', 3 => 'Three',
        4 => 'Four', 5 => 'Five', 6 => 'Six', 7 => 'Seven',
        8 => 'Eight', 9 => 'Nine', 10 => 'Ten', 11 => 'Eleven',
        12 => 'Twelve', 13 => 'Thirteen', 14 => 'Fourteen',
        15 => 'Fifteen', 16 => 'Sixteen', 17 => 'Seventeen',
        18 => 'Eighteen', 19 => 'Nineteen', 20 => 'Twenty'
    ];

    return $words[$number] ?? $number;
}
?>

<!-- PAGE HERO -->
<section id="page-hero" style="background: url('images/OUR PROSSES BANNER.jpg') center/cover !important; min-height: 70vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
  <div class="page-hero-bg-lines" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: 
    repeating-linear-gradient(0deg, transparent, transparent 50px, rgba(255,255,255,0.03) 50px, rgba(255,255,255,0.03) 51px),
    repeating-linear-gradient(90deg, transparent, transparent 50px, rgba(255,255,255,0.03) 50px, rgba(255,255,255,0.03) 51px);
    pointer-events: none;">
  </div> 
   <div class="container" style="position: relative; z-index: 5; text-align: center; color: #fff;">
    <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; font-family: 'Oswald', sans-serif; animation: slideInUp 0.9s cubic-bezier(0.68, -0.55, 0.265, 1.55);">
      OUR <em style="color: #e02020; font-style: italic;">PROCESS</em>
    </h1>
    <p style="font-size: 1.5rem; margin-bottom: 30px; animation: fadeInUp 1.1s ease-out 0.3s both;">
      Building Your Exhibition Dreams Into Reality
    </p>
    <div style="animation: bounce 2s infinite 0.6s; cursor: pointer;">
      <!-- <i class="fas fa-chevron-down" style="font-size: 2rem; color: #e02020;"></i> -->
    </div>
  </div>
</section>



<!-- PROCESS INTRODUCTION -->
<section style="padding: 80px 0; background: #fff;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #1A1A1A; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
        Your One-Stop Customized Exhibition Stalls - Your Path to Outstanding Success.
      </h2>
      <p style="font-size: 1.1rem; color: #e02020; font-weight: 600; margin-bottom: 20px;">Learn Where Stalls Come to Life with In-Depth Process Overview About.</p>
      <p style="font-size: 0.95rem; color: #666; max-width: 900px; margin: 0 auto; line-height: 1.8;">
        Xtreme Stall Build specializes in exhibition stall construction and management. We have an experience of more than <?php echo numberToWords($experience_years); ?> years of crafting stalls. Our comprehensive range of services is unmatched in the industry, making us the one-stop solution for all your stall needs. We understand that every exhibition is unique, so we tailor our services to fit your specific requirements. With the expertise of our design and fabrication teams, we deliver outstanding results every single time.
      </p>
    </div>
  </div>
</section>

<!-- PROCESS FLOW DIAGRAM -->
<!-- <section style="padding: 60px 0; background: #F7F4EF;">
  <div class="container">
    <div class="process-flow fade-up">
      <div class="flow-item">1</div>
      <div class="flow-item">2</div>
      <div class="flow-item">3</div>
      <div class="flow-item">4</div>
      <div class="flow-item">5</div>
      <div class="flow-item">6</div>
    </div>
  </div>
</section> -->

<!-- PROCESS STEPS GRID -->
<section style="padding: 100px 0; background: #F7F4EF;">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 40px;">
      <!-- Step 1: Designing -->
      <div class="process-step fade-up delay-1">
        <div class="process-step-header">
          <div class="process-step-number">1</div>
          <div class="process-step-icon">
            <i class="fas fa-pencil-ruler"></i>
          </div>
        </div>
        <h3>Designing</h3>
        <div class="process-step-subtitle">Custom Concepts</div>
        <p>Our expert designers craft innovative and customized stall designs. We translate your brand's vision into stunning visual concepts that capture attention and engage visitors at every exhibition.</p>
      </div>

      <!-- Step 2: Manufacturing -->
      <div class="process-step fade-up delay-2">
        <div class="process-step-header">
          <div class="process-step-number">2</div>
          <div class="process-step-icon">
            <i class="fas fa-hammer"></i>
          </div>
        </div>
        <h3>Manufacturing</h3>
        <div class="process-step-subtitle">Quality Fabrication</div>
        <p>We employ cutting-edge technology and skilled craftsmen to manufacture high-quality components. Our process ensures precision, durability, and excellence in every product we create.</p>
      </div>

      <!-- Step 3: Logistics -->
      <div class="process-step fade-up delay-3">
        <div class="process-step-header">
          <div class="process-step-number">3</div>
          <div class="process-step-icon">
            <i class="fas fa-truck"></i>
          </div>
        </div>
        <h3>Logistics</h3>
        <div class="process-step-subtitle">Safe Delivery</div>
        <p>We handle complete transportation and logistics management for your stalls. Our reliable partners ensure safe delivery to your venue with careful handling and on-time arrival.</p>
      </div>

      <!-- Step 4: Installation -->
      <div class="process-step fade-up delay-4">
        <div class="process-step-header">
          <div class="process-step-number">4</div>
          <div class="process-step-icon">
            <i class="fas fa-tools"></i>
          </div>
        </div>
        <h3>Installation</h3>
        <div class="process-step-subtitle">Professional Setup</div>
        <p>Our professional team sets up your stall with precision and efficiency. We manage all technical aspects, electrical connections, and final touches for exhibition readiness.</p>
      </div>

      <!-- Step 5: Show Services -->
      <div class="process-step fade-up" style="animation-delay: 1s;">
        <div class="process-step-header">
          <div class="process-step-number">5</div>
          <div class="process-step-icon">
            <i class="fas fa-headset"></i>
          </div>
        </div>
        <h3>Show Services</h3>
        <div class="process-step-subtitle">Live Support</div>
        <p>During your exhibition, our dedicated support team is on-site to provide technical assistance and maintenance. We ensure your stall operates smoothly throughout the event.</p>
      </div>

      <!-- Step 6: Dismantling -->
      <div class="process-step fade-up" style="animation-delay: 1.2s;">
        <div class="process-step-header">
          <div class="process-step-number">6</div>
          <div class="process-step-icon">
            <i class="fas fa-recycle"></i>
          </div>
        </div>
        <h3>Dismantling</h3>
        <div class="process-step-subtitle">Post-Event Care</div>
        <p>After the exhibition, we professionally dismantle your stall with care. We handle storage, component care, and preparation for future use or proper disposal of materials.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section style="padding: 80px 0; background: linear-gradient(135deg, #1A1A1A 0%, #2d2d2d 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;">
      <h2 style="font-size: 2.8rem; font-weight: 700; color: #fff; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
        Why Choose <em style="color: #e02020;">Xtreme Stall Build</em>
      </h2>
      <p style="font-size: 1rem; color: #ccc; max-width: 700px; margin: 0 auto; line-height: 1.6;">
        <?php echo date("Y") - 2017; ?>+ years of excellence in exhibition stall design and fabrication.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #e02020; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 0.2s both;">
        <h4 style="color: #e02020; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Expert Team</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Experienced designers, engineers, and technicians dedicated to perfection.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #e02020; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 0.4s both;">
        <h4 style="color: #e02020; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Quality Assurance</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Rigorous quality checks at every stage of production and installation.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #e02020; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 0.6s both;">
        <h4 style="color: #e02020; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Timely Delivery</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">We respect your deadlines and deliver on schedule, every time.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #e02020; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 0.8s both;">
        <h4 style="color: #e02020; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Innovation</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Latest design trends and fabrication technologies for modern solutions.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #e02020; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 1s both;">
        <h4 style="color: #e02020; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Full Support</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">End-to-end support from concept to post-exhibition dismantling.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #e02020; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 1.2s both;">
        <h4 style="color: #e02020; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Cost-Effective</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Competitive pricing without compromising on quality or creativity.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section style="padding: 60px 0; background: linear-gradient(135deg, #e02020 0%, #ff6b6b 100%); text-align: center;">
  <div class="container">
    <h2 style="font-size: 2.5rem; font-weight: 700; color: #fff; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
      Get Free Quote For Your Next Exhibition
    </h2>
    <p style="font-size: 1.1rem; color: rgba(255,255,255,0.9); margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
      Let's discuss your vision and create something extraordinary together.
    </p>
    <a href="contact-us.php" style="background: #1A1A1A; color: #fff; border: none; padding: 15px 45px; font-size: 1rem; font-weight: 600; border-radius: 0px; cursor: pointer; transition: all 0.3s ease; font-family: 'Oswald', sans-serif; display: inline-block; text-decoration: none;">
      GET QUOTE NOW
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
</script>

<?php include 'footer.php'; ?>
