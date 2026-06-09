<?php include 'header.php'; ?>

<!-- PAGE HERO -->
<section id="page-hero" style="background: linear-gradient(135deg, rgba(26,26,26,0.85) 0%, rgba(224,32,32,0.75) 100%), url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&auto=format&fit=crop&q=80') center/cover; min-height: 70vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
  <div class="page-hero-bg-lines" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: 
    repeating-linear-gradient(0deg, transparent, transparent 50px, rgba(255,255,255,0.03) 50px, rgba(255,255,255,0.03) 51px),
    repeating-linear-gradient(90deg, transparent, transparent 50px, rgba(255,255,255,0.03) 50px, rgba(255,255,255,0.03) 51px);
    pointer-events: none;">
  </div>
  <div class="container" style="position: relative; z-index: 5; text-align: center; color: #fff;">
    <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; font-family: 'Oswald', sans-serif; animation: slideInUp 0.9s cubic-bezier(0.68, -0.55, 0.265, 1.55);">
      Our <em style="color: #FFD700; font-style: italic;">Process</em>
    </h1>
    <p style="font-size: 1.1rem; margin-bottom: 30px; animation: fadeInUp 1.1s ease-out 0.3s both;">
      A meticulous approach to transforming your vision into reality
    </p>
    <div style="animation: bounce 2s infinite 0.6s; cursor: pointer;">
      <i class="fas fa-chevron-down" style="font-size: 2rem; color: #FFD700;"></i>
    </div>
  </div>
</section>

<style>
  @keyframes slideInUp {
    from {
      opacity: 0;
      transform: translateY(60px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  .process-step {
    background: #fff;
    padding: 40px 30px;
    border-radius: 12px;
    border-left: 5px solid #e02020;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    position: relative;
  }

  .process-step:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(224,32,32,0.15);
  }

  .process-step-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #e02020 0%, #ff6b6b 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: #fff;
    margin-bottom: 20px;
  }

  .process-step h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1A1A1A;
    margin-bottom: 15px;
    font-family: 'Oswald', sans-serif;
  }

  .process-step p {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.6;
  }

  .timeline {
    position: relative;
    padding: 60px 0;
  }

  .timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #e02020 0%, transparent 100%);
  }

  .timeline-item {
    margin-bottom: 50px;
    position: relative;
  }

  .timeline-item:nth-child(odd) .timeline-content {
    margin-left: 0;
    margin-right: auto;
    width: 45%;
  }

  .timeline-item:nth-child(even) .timeline-content {
    margin-right: 0;
    margin-left: auto;
    width: 45%;
  }

  .timeline-item::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 20px;
    background: #e02020;
    border: 4px solid #F7F4EF;
    border-radius: 50%;
    top: 0;
  }

  .timeline-content {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  }

  .timeline-content h3 {
    color: #1A1A1A;
    font-weight: 700;
    margin-bottom: 10px;
  }

  .timeline-content p {
    color: #666;
    font-size: 0.95rem;
  }

  .fade-up {
    opacity: 0;
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .fade-up.delay-1 { animation-delay: 0.2s; }
  .fade-up.delay-2 { animation-delay: 0.4s; }
  .fade-up.delay-3 { animation-delay: 0.6s; }
  .fade-up.delay-4 { animation-delay: 0.8s; }

  /* RESPONSIVE */
  @media (max-width: 768px) {
    #page-hero h1 {
      font-size: 2.2rem;
    }

    .timeline::before {
      left: 0;
    }

    .timeline-item:nth-child(odd) .timeline-content,
    .timeline-item:nth-child(even) .timeline-content {
      width: 100%;
      margin-left: 50px !important;
      margin-right: 0 !important;
    }

    .timeline-item::before {
      left: 0;
      transform: translateX(-10px);
    }
  }

  @media (max-width: 480px) {
    #page-hero h1 {
      font-size: 1.8rem;
    }

    #page-hero p {
      font-size: 0.95rem;
    }

    .process-step {
      padding: 30px 20px;
    }
  }
</style>

<!-- PROCESS OVERVIEW -->
<section style="padding: 80px 0; background: #F7F4EF;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;">
      <div style="display: inline-block; background: #e02020; color: #fff; padding: 8px 20px; border-radius: 50px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px; text-transform: uppercase;">Our Methodology</div>
      <h2 style="font-size: 2.8rem; font-weight: 700; color: #1A1A1A; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
        How We Work
      </h2>
      <p style="font-size: 1rem; color: #666; max-width: 700px; margin: 0 auto; line-height: 1.6;">
        We follow a structured, transparent, and collaborative approach to deliver exceptional results that exceed expectations.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
      <!-- Step 1 -->
      <div class="process-step fade-up delay-1">
        <div class="process-step-icon">
          <i class="fas fa-lightbulb"></i>
        </div>
        <h3>Consultation & Discovery</h3>
        <p>We begin by understanding your vision, requirements, budget, and timelines. Our team conducts detailed consultations to gather all essential information for your project's success.</p>
      </div>

      <!-- Step 2 -->
      <div class="process-step fade-up delay-2">
        <div class="process-step-icon">
          <i class="fas fa-pencil-ruler"></i>
        </div>
        <h3>Design & Conceptualization</h3>
        <p>Our creative designers develop initial concepts and 3D renderings. We present multiple design options and refine them based on your feedback until you're completely satisfied.</p>
      </div>

      <!-- Step 3 -->
      <div class="process-step fade-up delay-3">
        <div class="process-step-icon">
          <i class="fas fa-cogs"></i>
        </div>
        <h3>Planning & Preparation</h3>
        <p>Once design is approved, we create detailed technical drawings, material specifications, and project timelines. We source quality materials and prepare our fabrication workshop.</p>
      </div>

      <!-- Step 4 -->
      <div class="process-step fade-up delay-4">
        <div class="process-step-icon">
          <i class="fas fa-hammer"></i>
        </div>
        <h3>Fabrication & Execution</h3>
        <p>Our skilled technicians fabricate and assemble all components with precision. Quality checks are performed at each stage to ensure excellence and durability.</p>
      </div>

      <!-- Step 5 -->
      <div class="process-step fade-up" style="animation-delay: 1s;">
        <div class="process-step-icon">
          <i class="fas fa-check-circle"></i>
        </div>
        <h3>Quality Assurance</h3>
        <p>We conduct comprehensive testing and quality inspections. Every element is verified for structural integrity, functionality, and aesthetic perfection before delivery.</p>
      </div>

      <!-- Step 6 -->
      <div class="process-step fade-up" style="animation-delay: 1.2s;">
        <div class="process-step-icon">
          <i class="fas fa-truck"></i>
        </div>
        <h3>Delivery & Installation</h3>
        <p>We handle safe transportation and professional installation at your venue. Our team remains on-site for setup, testing, and final adjustments to ensure everything is perfect.</p>
      </div>
    </div>
  </div>
</section>

<!-- PROJECT TIMELINE -->
<section style="padding: 80px 0; background: #fff;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;">
      <div style="display: inline-block; background: #e02020; color: #fff; padding: 8px 20px; border-radius: 50px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px; text-transform: uppercase;">Project Timeline</div>
      <h2 style="font-size: 2.8rem; font-weight: 700; color: #1A1A1A; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
        Typical <em style="color: #e02020;">Project Duration</em>
      </h2>
      <p style="font-size: 1rem; color: #666; max-width: 700px; margin: 0 auto; line-height: 1.6;">
        Most projects follow this timeline, though duration varies based on complexity and scope.
      </p>
    </div>

    <div class="timeline">
      <div class="timeline-item fade-up delay-1">
        <div class="timeline-content">
          <h3>Week 1-2: Initial Consultation</h3>
          <p>Understand project requirements, finalize dimensions, discuss budget, and sign agreements.</p>
        </div>
      </div>

      <div class="timeline-item fade-up delay-2">
        <div class="timeline-content">
          <h3>Week 2-3: Design & Approval</h3>
          <p>Present initial 3D designs, collect feedback, make revisions, and obtain final design approval.</p>
        </div>
      </div>

      <div class="timeline-item fade-up delay-3">
        <div class="timeline-content">
          <h3>Week 4-6: Fabrication</h3>
          <p>Material procurement, component fabrication, assembly, and quality checks throughout production.</p>
        </div>
      </div>

      <div class="timeline-item fade-up delay-4">
        <div class="timeline-content">
          <h3>Week 7: Final Testing</h3>
          <p>Conduct comprehensive quality assurance, rectify any issues, and prepare for delivery.</p>
        </div>
      </div>

      <div class="timeline-item fade-up" style="animation-delay: 1s;">
        <div class="timeline-content">
          <h3>Week 8: Delivery & Installation</h3>
          <p>Safe transportation, on-site installation, final setup, and handover to the client.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE OUR PROCESS -->
<section style="padding: 80px 0; background: linear-gradient(135deg, #1A1A1A 0%, #2d2d2d 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;">
      <div style="display: inline-block; background: #e02020; color: #fff; padding: 8px 20px; border-radius: 50px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px; text-transform: uppercase;">Why Choose Us</div>
      <h2 style="font-size: 2.8rem; font-weight: 700; color: #fff; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
        Process <em style="color: #FFD700;">Excellence</em>
      </h2>
      <p style="font-size: 1rem; color: #ccc; max-width: 700px; margin: 0 auto; line-height: 1.6;">
        Our proven methodology ensures consistency, quality, and client satisfaction.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #FFD700; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 0.2s both;">
        <h4 style="color: #FFD700; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Transparent Communication</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Regular updates and open dialogue throughout every stage of your project.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #FFD700; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 0.4s both;">
        <h4 style="color: #FFD700; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Quality Assurance</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Multiple checkpoints and rigorous testing at every stage of production.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #FFD700; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 0.6s both;">
        <h4 style="color: #FFD700; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Timely Delivery</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">We respect your timelines and deliver projects on schedule, every time.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #FFD700; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 0.8s both;">
        <h4 style="color: #FFD700; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Expert Team</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Experienced designers, technicians, and project managers dedicated to excellence.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #FFD700; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 1s both;">
        <h4 style="color: #FFD700; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">After-Sales Support</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Comprehensive warranty and ongoing support for your complete peace of mind.</p>
      </div>

      <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid #FFD700; backdrop-filter: blur(10px); animation: fadeInUp 0.8s ease-out 1.2s both;">
        <h4 style="color: #FFD700; font-weight: 700; margin-bottom: 15px; font-size: 1.2rem;">Innovation Focus</h4>
        <p style="color: #ccc; font-size: 0.95rem; line-height: 1.6;">Utilizing latest technology and design trends for creative, modern solutions.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section style="padding: 60px 0; background: linear-gradient(135deg, #e02020 0%, #ff6b6b 100%); text-align: center;">
  <div class="container">
    <h2 style="font-size: 2.5rem; font-weight: 700; color: #fff; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
      Ready to Start Your Project?
    </h2>
    <p style="font-size: 1.1rem; color: rgba(255,255,255,0.9); margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
      Let's discuss your vision and create something extraordinary together.
    </p>
    <button style="background: #1A1A1A; color: #fff; border: none; padding: 15px 45px; font-size: 1rem; font-weight: 600; border-radius: 50px; cursor: pointer; transition: all 0.3s ease; font-family: 'Oswald', sans-serif;">
      Get Started Today
    </button>
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
