<?php include 'includes/header.php'; ?>

<main class="bg-gray-50 text-gray-800 py-20 px-4">
  <!-- Hero Section -->
  <section class="text-center mb-20 max-w-3xl mx-auto">
    <h1 class="text-5xl font-extrabold text-gray-900 mb-4 drop-shadow-sm">Our Photography Services</h1>
    <p class="text-lg text-gray-600">Capturing your story, one frame at a time. Explore our professional services tailored to every special moment.</p>
  </section>

  <!-- Services Grid -->
  <section class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 mb-24">
    <!-- Service Cards -->
    <?php
      $services = [
        ['wedding.jpg', 'Wedding Photography', 'Timeless shots of your big day. We focus on the candid, emotional moments that tell your love story.'],
        ['portrait.jpg', 'Portrait Sessions', 'Whether it\'s personal branding or family portraits, we bring out the real you in every image.'],
        ['event.jpg', 'Event Coverage', 'From corporate events to birthdays, we capture the energy, moments, and atmosphere you’ll want to relive.'],
        ['product.jpg', 'Product Shoots', 'High-quality visuals to elevate your brand. Perfect for ecommerce, marketing, and social media.'],
        ['editorial.jpg', 'Editorial & Lifestyle', 'Stylized shoots for magazines, blogs, and brands. Creative direction included!'],
        ['custom.jpg', 'Custom Sessions', 'Have something unique in mind? Let’s plan a personalized shoot that fits your vision.'],
      ];

      foreach ($services as $service) {
        echo '
          <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition hover:-translate-y-1 hover:shadow-2xl">
            <img src="assets/images/services/' . $service[0] . '" alt="' . $service[1] . '" class="w-full h-52 object-cover">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">' . $service[1] . '</h2>
              <p class="text-sm text-gray-600 leading-relaxed">' . $service[2] . '</p>
            </div>
          </div>
        ';
      }
    ?>
  </section>

  <!-- Divider -->
  <div class="w-24 h-1 bg-yellow-500 mx-auto mb-16 rounded-full"></div>

  <!-- Pricing Section -->
  <section class="text-center">
    <h2 class="text-4xl font-bold text-gray-900 mb-12">Photography Packages</h2>

    <div class="flex flex-wrap justify-center gap-10">
      <!-- Pricing Card -->
      <?php
        $packages = [
          ['Mini Session', 'R850', ['30-minute session', '5 high-resolution edits', 'Online gallery']],
          ['Standard Package', 'R1,500', ['1-hour session', '15 edited photos', 'Location of your choice', 'Online gallery + downloads']],
          ['Premium Experience', 'R3,200', ['2-3 hour session', 'All best shots professionally edited', 'Two outfit changes', 'USB delivery + online gallery']],
        ];

        foreach ($packages as $package) {
          echo '
            <div class="bg-white rounded-2xl shadow-2xl p-8 w-80 text-left transform transition hover:-translate-y-1 hover:shadow-yellow-400/50 border border-yellow-100">
              <h3 class="text-2xl font-semibold text-yellow-600 mb-2">' . $package[0] . '</h3>
              <p class="text-3xl font-bold text-gray-800 mb-4">' . $package[1] . '</p>
              <ul class="space-y-2 mb-6 text-gray-600 text-sm">';
                foreach ($package[2] as $feature) {
                  echo '<li class="flex items-start gap-2"><span class="text-yellow-500 text-lg">•</span> ' . $feature . '</li>';
                }
              echo '</ul>
              <a href="booking.php" class="inline-block bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold transition hover:bg-yellow-600">Book Now</a>
            </div>
          ';
        }
      ?>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
