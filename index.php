<?php include 'includes/header.php'; ?>

<main>
  <!-- Demo Badge -->
<div class="fixed top-20 left-0 z-50 bg-red-600 text-white text-sm font-semibold px-4 py-2 rounded-r-md shadow-md">
  Demo Website
</div>

  <!-- Hero Section -->
  <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('assets/images/hero.jpg');">
  <div class="absolute inset-0 bg-gradient-to-br from-black via-transparent to-black opacity-70 z-0"></div>

  <!-- Heading Positioned Towards Top -->
  <div class="absolute top-20 left-1/2 transform -translate-x-1/2 z-10 text-center text-white px-4 sm:px-8 max-w-3xl animate-fade-in-down">
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight tracking-tight drop-shadow-lg">
      Capture the <span class="text-yellow-400">Moments</span> That Matter
    </h1>
  </div>

  <!-- Subtext and Buttons Positioned Towards Bottom -->
  <div class="absolute bottom-24 left-1/2 transform -translate-x-1/2 z-10 text-center px-6 md:px-12 max-w-2xl animate-fade-in-up">
    <p class="mb-6 text-lg sm:text-xl md:text-2xl font-light text-gray-200">Timeless, emotional, and authentic photography for your most important days.</p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="booking.php" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-xl transition-all shadow-md">Book a Session</a>
      <a href="portfolio.php" class="bg-white hover:bg-gray-100 text-black font-semibold py-3 px-6 rounded-xl transition-all shadow-md">View Portfolio</a>
    </div>
  </div>
</section>

  <!-- Featured Gallery -->
  <section class="bg-gray-50 py-20 px-6 text-center">
    <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-10">Featured Shots</h2>
    <div class="flex overflow-x-auto space-x-6 px-2 md:px-10 scrollbar-hide snap-x snap-mandatory">
      <?php
        $images = ['featured1.jpg', 'featured2.jpg', 'featured3.jpg', 'featured4.jpg', 'featured5.jpg', 'featured6.jpg'];
        foreach ($images as $img) {
          echo "<div class='flex-shrink-0 w-64 sm:w-72 snap-start transform hover:scale-105 transition duration-300'>
                  <img src='assets/images/{$img}' alt='' class='h-48 sm:h-52 w-full object-cover rounded-xl shadow-md'>
                </div>";
        }
      ?>
    </div>
  </section>

  <!-- About Preview -->
  <section class="flex flex-wrap items-center justify-center gap-12 bg-white py-20 px-6 relative">
    <div class="absolute inset-0 bg-[url('assets/images/about-me.jpg')] opacity-10 pointer-events-none"></div>
    <div class="flex-1 max-w-lg z-10 text-center sm:text-left">
      <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-900">Behind the Lens</h2>
      <p class="text-lg leading-relaxed mb-6 text-gray-700">Hi, I’m Brandon — a freelance photographer who believes every moment has a story. Whether it’s love, adventure, or subtle beauty, I’m here to capture it with authenticity.</p>
      <a href="about.php" class="inline-block bg-black text-white font-bold py-3 px-6 rounded-full hover:bg-yellow-500 transition">Learn More</a>
    </div>
    <div class="flex-1 max-w-md z-10">
      <img src="assets/images/about-me.jpg" alt="Brandon taking a photo" class="rounded-2xl object-cover w-full shadow-xl">
    </div>
  </section>

  <!-- Categories -->
  <section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-12">Explore My Work</h2>
    <div class="flex flex-wrap justify-center gap-8">
      <?php
        $categories = [
          ['title' => 'Portraits', 'slug' => 'portraits', 'thumb' => 'portrait-thumb.jpg'],
          ['title' => 'Weddings', 'slug' => 'weddings', 'thumb' => 'wedding-thumb.jpg'],
          ['title' => 'Travel', 'slug' => 'travel', 'thumb' => 'travel-thumb.jpg']
        ];
        foreach ($categories as $cat) {
          echo "<a href='portfolio.php#{$cat['slug']}' class='relative group w-64 sm:w-72 h-48 rounded-xl overflow-hidden shadow-xl transform hover:scale-105 transition-all duration-300'>
                  <img src='assets/images/{$cat['thumb']}' alt='{$cat['title']}' class='w-full h-full object-cover'>
                  <div class='absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-60 transition-all'></div>
                  <div class='absolute bottom-0 w-full text-white text-lg font-bold py-3 bg-gradient-to-t from-black/70 to-transparent text-center'>{$cat['title']}</div>
                </a>";
        }
      ?>
    </div>
  </section>

  <?php include 'includes/testimonials.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
