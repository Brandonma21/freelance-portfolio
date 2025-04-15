<?php include 'includes/header.php'; ?>

<main class="bg-gray-100 py-20 px-4 text-center">
  <!-- Demo Badge -->
<div class="fixed top-20 left-0 z-50 bg-red-600 text-white text-sm font-semibold px-4 py-2 rounded-r-md shadow-md">
  Demo Website
</div>

  <!-- Contact Hero Section -->
  <section class="contact-hero bg-gradient-to-r from-gray-900 to-gray-600 text-white py-16 px-4">
    <div class="contact-intro max-w-4xl mx-auto text-center">
      <h1 class="text-4xl font-semibold mb-4">Let's Connect</h1>
      <p class="text-xl mx-auto text-gray-300 max-w-2xl">Have questions, ideas, or ready to book a session? We'd love to hear from you! Whether you're planning your big day or just need a fresh new portrait, we’re here to help make it happen.</p>
    </div>
  </section>

  <!-- Contact Content Section -->
  <section class="contact-content flex flex-wrap justify-between gap-12 py-16 px-4">
    <!-- Contact Form Container -->
    <div class="contact-form-container flex-1 bg-white p-8 rounded-xl shadow-lg">
      <h2 class="text-2xl font-semibold text-gray-800 mb-6">Send Us a Message</h2>
      <form class="contact-form space-y-4" action="#" method="post">
        <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Your Full Name" required>
        <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Your Email Address" required>
        <input type="text" name="subject" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Subject" required>
        <textarea name="message" rows="6" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Your Message..." required></textarea>
        <button type="submit" class="w-full bg-yellow-500 text-white py-3 rounded-md hover:bg-yellow-600 font-semibold text-lg">
          Send Message
        </button>
      </form>
    </div>

    <!-- Contact Info -->
    <div class="contact-info flex-1 bg-white p-8 rounded-xl shadow-lg">
      <h2 class="text-2xl font-semibold text-gray-800 mb-6">Studio Info</h2>
      <p class="text-lg text-gray-700 mb-4"><strong>Email:</strong> hello@photosnapstudio.co.za</p>
      <p class="text-lg text-gray-700 mb-4"><strong>Phone:</strong> +27 71 234 5678</p>
      <p class="text-lg text-gray-700 mb-4"><strong>Studio Hours:</strong><br> Mon - Fri: 9am – 5pm<br> Sat: 10am – 2pm</p>
      <p class="text-lg text-gray-700 mb-6"><strong>Location:</strong><br> 123 Snap Street, Cape Town, South Africa</p>

      <!-- Social Links -->
      <div class="social-links">
        <a href="#" class="inline-block text-yellow-500 font-semibold mb-2 mr-4 hover:underline">📸 Instagram</a>
        <a href="#" class="inline-block text-yellow-500 font-semibold mb-2 mr-4 hover:underline">📘 Facebook</a>
        <a href="#" class="inline-block text-yellow-500 font-semibold mb-2 hover:underline">💼 LinkedIn</a>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
