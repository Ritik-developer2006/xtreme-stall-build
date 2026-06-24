<?php include 'header.php'; ?>

<!-- PAGE HERO -->
<section id="page-hero" style="background:url('images/our_work.jpeg') center/cover; min-height: 70vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
  <div class="page-hero-bg-lines" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: 
    repeating-linear-gradient(0deg, transparent, transparent 50px, rgba(255,255,255,0.03) 50px, rgba(255,255,255,0.03) 51px),
    repeating-linear-gradient(90deg, transparent, transparent 50px, rgba(255,255,255,0.03) 50px, rgba(255,255,255,0.03) 51px);
    pointer-events: none;">
  </div>
  <!-- <div class="container" style="position: relative; z-index: 5; text-align: center; color: #fff;">
    <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; font-family: 'Oswald', sans-serif; animation: slideInUp 0.9s cubic-bezier(0.68, -0.55, 0.265, 1.55);">
      OUR <em style="color: #e02020; font-style: italic;">WORK</em>
    </h1>
    <p style="font-size: 1.5rem; margin-bottom: 30px; animation: fadeInUp 1.1s ease-out 0.3s both;">
      Building Your Exhibition Dreams Into Reality
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

  @keyframes zoomIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  .work-intro {
    padding: 80px 0;
    background: #F7F4EF;
  }

  .work-intro-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
  }

  .work-intro-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1A1A1A;
    margin-bottom: 15px;
    font-family: 'Oswald', sans-serif;
  }

  .work-intro-subheading {
    font-size: 1.3rem;
    color: #e02020;
    font-weight: 600;
    margin-bottom: 25px;
  }

  .work-intro-content p {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.9;
    margin: 0;
  }

  .work-gallery-section {
    padding: 100px 0;
    background: #fff;
  }

  .gallery-header {
    text-align: center;
    margin-bottom: 70px;
  }

  .gallery-header h2 {
    font-size: 2.8rem;
    font-weight: 700;
    color: #1A1A1A;
    margin-bottom: 15px;
    font-family: 'Oswald', sans-serif;
  }

  .gallery-header p {
    font-size: 1.1rem;
    color: #e02020;
    font-weight: 600;
  }

  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
  }

  .gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    cursor: pointer;
    aspect-ratio: 1 / 1;
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .gallery-item:nth-child(1) { animation-delay: 0.1s; }
  .gallery-item:nth-child(2) { animation-delay: 0.2s; }
  .gallery-item:nth-child(3) { animation-delay: 0.3s; }
  .gallery-item:nth-child(4) { animation-delay: 0.4s; }
  .gallery-item:nth-child(5) { animation-delay: 0.5s; }
  .gallery-item:nth-child(6) { animation-delay: 0.6s; }
  .gallery-item:nth-child(7) { animation-delay: 0.7s; }
  .gallery-item:nth-child(8) { animation-delay: 0.8s; }
  .gallery-item:nth-child(9) { animation-delay: 0.9s; }

  .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
    display: block;
  }

  .gallery-item:hover img {
    transform: scale(1.12);
  }



  /* LIGHTBOX MODAL */
  .lightbox-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.95);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    padding: 20px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
  }

  .lightbox-modal.active {
    opacity: 1;
    visibility: visible;
  }

  .lightbox-content {
    position: relative;
    background: #000;
    border-radius: 8px;
    max-width: 90vw;
    max-height: 85vh;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: zoomIn 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }

  .lightbox-content img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    border-radius: 8px;
  }

  .lightbox-close {
    position: absolute;
    top: -40px;
    right: 0;
    background: none;
    border: none;
    color: #fff;
    font-size: 2.5rem;
    cursor: pointer;
    transition: color 0.3s ease;
    z-index: 10000;
  }

  .lightbox-close:hover {
    color: #e02020;
  }

  .lightbox-nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(224,32,32,0.9);
    border: none;
    color: #fff;
    width: 50px;
    height: 50px;
    border-radius: 4px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    z-index: 10000;
  }

  .lightbox-nav-btn:hover {
    background: #e02020;
    transform: translateY(-50%) scale(1.1);
  }

  .lightbox-nav-btn.prev {
    left: 20px;
  }

  .lightbox-nav-btn.next {
    right: 20px;
  }

  .lightbox-info {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    text-align: center;
    background: rgba(0,0,0,0.7);
    padding: 10px 20px;
    border-radius: 4px;
    z-index: 10000;
  }

  .lightbox-info p {
    margin: 0;
    font-size: 0.95rem;
  }

  /* RESPONSIVE */
  @media (max-width: 768px) {
    #page-hero h1 {
      font-size: 2.2rem;
    }

    .gallery-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .work-intro-content h2 {
      font-size: 1.8rem;
    }

    .gallery-header h2 {
      font-size: 2rem;
    }

    .gallery-overlay-icon {
      font-size: 2rem;
    }

    .lightbox-nav-btn {
      width: 45px;
      height: 45px;
      font-size: 1.3rem;
    }

    .lightbox-close {
      top: -35px;
      font-size: 2rem;
    }
  }

  @media (max-width: 480px) {
    #page-hero h1 {
      font-size: 1.8rem;
    }

    #page-hero p {
      font-size: 0.95rem;
    }

    .gallery-grid {
      grid-template-columns: 1fr;
      gap: 16px;
    }

    .work-intro-content h2 {
      font-size: 1.5rem;
    }

    .work-intro-content p {
      font-size: 0.9rem;
    }

    .gallery-header h2 {
      font-size: 1.6rem;
    }


    .gallery-overlay-icon {
      font-size: 1.5rem;
    }

    .gallery-overlay-title {
      font-size: 1rem;
    }

    .lightbox-nav-btn {
      width: 40px;
      height: 40px;
      font-size: 1.1rem;
    }

    .lightbox-close {
      font-size: 1.5rem;
      top: -30px;
    }

    .lightbox-nav-btn.prev {
      left: 10px;
    }

    .lightbox-nav-btn.next {
      right: 10px;
    }
  }

  .fade-up {
    opacity: 0;
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .fade-up.delay-1 { animation-delay: 0.2s; }
  .fade-up.delay-2 { animation-delay: 0.4s; }
</style>

<!-- WORK INTRODUCTION -->
<section class="work-intro fade-up">
  <div class="container">
    <div class="work-intro-content">
      <h2>Exhibition Stall Designers in Delhi, India</h2>
      <p class="work-intro-subheading">India's Leading Stall Design Agency – Trusted by 100+ Brands</p>
      <p>
        Xtreme Stall Build evolved a vivid stall design and stall build services strategy that would meet all exhibiting goals across the world. We are an exhibition stall design organization from Delhi, India and we have a range of services that confirm the level of the exhibit stall design industry. We boast of a team of experts in exhibition stall designs who help us with practical and commercial ideas. Our designers not only make sure to make the stall customer-friendly but also take into account all the client specifications.
      </p>
    </div>
  </div>
</section>

<!-- OUR WORK GALLERY -->
<section class="work-gallery-section">
  <div class="container">
    <div class="gallery-header fade-up">
      <h2>Our Work in <em style="color: #e02020;">Action</em></h2>
      <p>Explore our recent exhibition stall designs</p>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-grid">
      <!-- Item 1 -->
      <div class="gallery-item fade-up delay-1" onclick="openLightbox(0)">
        <img src="images/gallery/01.png" alt="Gallery Image 01" loading="lazy">
      </div>

      <!-- Item 2 -->
      <div class="gallery-item fade-up delay-2" onclick="openLightbox(1)">
        <img src="images/gallery/02.png" alt="Gallery Image 02" loading="lazy">
      </div>

      <!-- Item 3 -->
      <div class="gallery-item fade-up delay-3" onclick="openLightbox(2)">
        <img src="images/gallery/03.jpg" alt="Gallery Image 03" loading="lazy">
      </div>

      <!-- Item 4 -->
      <div class="gallery-item fade-up delay-4" onclick="openLightbox(3)">
        <img src="images/gallery/04.jpeg" alt="Gallery Image 04" loading="lazy">
      </div>

      <!-- Item 5 -->
      <div class="gallery-item fade-up" style="animation-delay: 0.5s;" onclick="openLightbox(4)">
        <img src="images/gallery/05.png" alt="Gallery Image 05" loading="lazy">
      </div>

      <!-- Item 6 -->
      <div class="gallery-item fade-up" style="animation-delay: 0.6s;" onclick="openLightbox(5)">
        <img src="images/gallery/06.jpeg" alt="Gallery Image 06" loading="lazy">
      </div>

      <!-- Item 7 -->
      <div class="gallery-item fade-up" style="animation-delay: 0.7s;" onclick="openLightbox(6)">
        <img src="images/gallery/07.png" alt="Gallery Image 07" loading="lazy">
      </div>

      <!-- Item 8 -->
      <div class="gallery-item fade-up" style="animation-delay: 0.8s;" onclick="openLightbox(7)">
        <img src="images/gallery/08.jpeg" alt="Gallery Image 08" loading="lazy">
      </div>

      <!-- Item 9 -->
      <div class="gallery-item fade-up" style="animation-delay: 0.9s;" onclick="openLightbox(8)">
        <img src="images/gallery/09.png" alt="Gallery Image 09" loading="lazy">
      </div>

      <!-- Item 10 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.0s;" onclick="openLightbox(9)">
        <img src="images/gallery/10.jpg" alt="Gallery Image 10" loading="lazy">
      </div>

      <!-- Item 11 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.1s;" onclick="openLightbox(10)">
        <img src="images/gallery/11.jpg" alt="Gallery Image 11" loading="lazy">
      </div>

      <!-- Item 12 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.2s;" onclick="openLightbox(11)">
        <img src="images/gallery/12.jpg" alt="Gallery Image 12" loading="lazy">
      </div>

      <!-- Item 13 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.3s;" onclick="openLightbox(12)">
        <img src="images/gallery/13.png" alt="Gallery Image 13" loading="lazy">
      </div>

      <!-- Item 14 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.4s;" onclick="openLightbox(13)">
        <img src="images/gallery/14.jpeg" alt="Gallery Image 14" loading="lazy">
      </div>

      <!-- Item 15 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.5s;" onclick="openLightbox(14)">
        <img src="images/gallery/15.jpeg" alt="Gallery Image 15" loading="lazy">
      </div>

      <!-- Item 16 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.6s;" onclick="openLightbox(15)">
        <img src="images/gallery/16.jpg" alt="Gallery Image 16" loading="lazy">
      </div>

      <!-- Item 17 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.7s;" onclick="openLightbox(16)">
        <img src="images/gallery/17.jpg" alt="Gallery Image 17" loading="lazy">
      </div>

      <!-- Item 18 -->
      <div class="gallery-item fade-up" style="animation-delay: 1.8s;" onclick="openLightbox(17)">
        <img src="images/gallery/18.png" alt="Gallery Image 18" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- LIGHTBOX MODAL -->
<div id="lightbox" class="lightbox-modal">
  <div class="lightbox-content">
    <img id="lightbox-img" src="" alt="" />
    <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
    <button class="lightbox-nav-btn prev" onclick="prevImage()">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="lightbox-nav-btn next" onclick="nextImage()">
      <i class="fas fa-chevron-right"></i>
    </button>
    <div class="lightbox-info">
      <p id="lightbox-title"></p>
      <p id="lightbox-counter"></p>
    </div>
  </div>
</div>

<!-- CTA SECTION -->
<section style="padding: 60px 0; background: linear-gradient(135deg, #e02020 0%, #ff6b6b 100%); text-align: center;">
  <div class="container">
    <h2 style="font-size: 2.5rem; font-weight: 700; color: #fff; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">
      Ready to Showcase Your Brand?
    </h2>
    <p style="font-size: 1.1rem; color: rgba(255,255,255,0.9); margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
      Let's create an unforgettable exhibition experience for your brand.
    </p>
    <a href="contact-us.php" style="background: #1A1A1A; color: #fff; padding: 15px 45px; font-size: 1rem; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease; font-family: 'Oswald', sans-serif; border-radius: 4px;">
      GET IN TOUCH
    </a>
  </div>
</section>

<script>
  const galleryImages = [
    { src: 'images/gallery/01.png', title: 'Gallery 01' },
    { src: 'images/gallery/02.png', title: 'Gallery 02' },
    { src: 'images/gallery/03.png', title: 'Gallery 03' },
    { src: 'images/gallery/04.png', title: 'Gallery 04' },
    { src: 'images/gallery/05.png', title: 'Gallery 05' },
    { src: 'images/gallery/06.png', title: 'Gallery 06' },
    { src: 'images/gallery/07.png', title: 'Gallery 07' },
    { src: 'images/gallery/08.png', title: 'Gallery 08' },
    { src: 'images/gallery/09.png', title: 'Gallery 09' },
    { src: 'images/gallery/10.png', title: 'Gallery 10' },
    { src: 'images/gallery/11.png', title: 'Gallery 11' },
    { src: 'images/gallery/12.png', title: 'Gallery 12' },
    { src: 'images/gallery/13.png', title: 'Gallery 13' },
    { src: 'images/gallery/14.png', title: 'Gallery 14' },
    { src: 'images/gallery/15.png', title: 'Gallery 15' },
    { src: 'images/gallery/16.png', title: 'Gallery 16' },
    { src: 'images/gallery/17.png', title: 'Gallery 17' },
    { src: 'images/gallery/18.png', title: 'Gallery 18' }
  ];

  let currentImageIndex = 0;

  function openLightbox(index) {
    currentImageIndex = index;
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxCounter = document.getElementById('lightbox-counter');
    
    lightboxImg.src = galleryImages[index].src;
    lightboxTitle.textContent = galleryImages[index].title;
    lightboxCounter.textContent = (index + 1) + ' / ' + galleryImages.length;
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.remove('active');
    document.body.style.overflow = 'auto';
  }

  function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
    openLightbox(currentImageIndex);
  }

  function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
    openLightbox(currentImageIndex);
  }

  // Close on background click
  const lightboxEl = document.getElementById('lightbox');
  if (lightboxEl) {
    lightboxEl.addEventListener('click', function(e) {
      if (e.target === this) {
        closeLightbox();
      }
    });
  }

  // Keyboard navigation
  document.addEventListener('keydown', function(e) {
    const lightbox = document.getElementById('lightbox');
    if (lightbox && lightbox.classList.contains('active')) {
      if (e.key === 'ArrowRight') nextImage();
      if (e.key === 'ArrowLeft') prevImage();
      if (e.key === 'Escape') closeLightbox();
    }
  });

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
