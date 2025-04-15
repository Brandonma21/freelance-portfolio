<?php include 'includes/header.php'; ?>

<main class="bg-gradient-to-br from-yellow-50 via-white to-yellow-100 min-h-screen py-16 px-4">
  <!-- Booking Hero Section -->
  <section class="text-center mb-12">
    <h1 class="text-5xl font-extrabold text-gray-800 mb-4">Book Your Session</h1>
    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Let us capture your story. Fill in the form below and we’ll get in touch to plan your perfect shoot.</p>
  </section>

  <!-- Booking Form Section -->
  <section class="max-w-3xl mx-auto bg-white shadow-2xl rounded-2xl overflow-hidden">
    <div class="p-10">
      <form class="space-y-6" action="booking.php" method="post">
        <!-- Full Name -->
        <div>
          <label for="name" class="block text-gray-700 font-semibold mb-1">Full Name</label>
          <input type="text" id="name" name="name" placeholder="John Doe"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
        </div>

        <!-- Email Address -->
        <div>
          <label for="email" class="block text-gray-700 font-semibold mb-1">Email Address</label>
          <input type="email" id="email" name="email" placeholder="john@example.com"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
        </div>

        <!-- Phone Number -->
        <div>
          <label for="phone" class="block text-gray-700 font-semibold mb-1">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="+27 123 456 789"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
        </div>

        <!-- Date & Time -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="date" class="block text-gray-700 font-semibold mb-1">Preferred Date</label>
            <input type="date" id="date" name="date"
              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
          </div>
          <div>
            <label for="time" class="block text-gray-700 font-semibold mb-1">Preferred Time</label>
            <input type="time" id="time" name="time"
              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
          </div>
        </div>

        <!-- Session Type -->
        <div>
          <label for="session-type" class="block text-gray-700 font-semibold mb-1">Session Type</label>
          <select id="session-type" name="session-type"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
            <option value="">-- Select a Session --</option>
            <option value="wedding">Wedding</option>
            <option value="event">Event</option>
            <option value="portrait">Portrait</option>
            <option value="family">Family Shoot</option>
            <option value="product">Product Photography</option>
          </select>
        </div>

        <!-- Additional Notes -->
        <div>
          <label for="message" class="block text-gray-700 font-semibold mb-1">Additional Notes</label>
          <textarea id="message" name="message" rows="4" placeholder="Any specific details or questions?"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:outline-none"></textarea>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit"
            class="w-full py-3 px-6 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition duration-200">
            Send Booking Request
          </button>
        </div>
      </form>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
