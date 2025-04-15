<?php include 'includes/header.php'; ?>

<style>
  html {
    scroll-behavior: smooth;
  }

  .snap-y {
    scroll-snap-type: y mandatory;
  }

  .snap-section {
    scroll-snap-align: start;
  }

  .floating-nav {
    position: fixed;
    top: 80px;
    right: 20px;
    z-index: 50;
  }

  .floating-nav a {
    display: block;
    margin-bottom: 0.5rem;
    padding: 0.5rem 1rem;
    border-radius: 9999px;
    background-color: rgba(255, 255, 255, 0.8);
    font-weight: 600;
    color: #1f2937;
    transition: all 0.3s ease;
  }

  .floating-nav a:hover {
    background-color: #facc15;
    color: #111827;
  }

  .image-tile {
    transition: transform 0.5s ease;
  }

  .image-tile:hover {
    transform: scale(1.08);
  }
</style>

<!-- Floating Category Nav -->
<div class="floating-nav hidden md:block">
  <a href="#travel">Travel</a>
  <a href="#weddings">Weddings</a>
  <a href="#portraits">Portraits</a>
</div>

<main class="h-screen overflow-y-scroll snap-y">

  <?php 
    $sections = [
      'Travel' => [1, 6, 'bg-gray-200 text-black', 'travel'],
      'Weddings' => [7, 12, 'bg-gray-200 text-black', 'weddings'],
      'Portraits' => [13, 18, 'bg-gray-200 text-black', 'portraits']
    ];

    foreach ($sections as $title => [$start, $end, $classes, $id]):
  ?>
    <section id="<?= $id ?>" class="snap-section h-screen w-full <?= $classes ?> px-6 py-20 flex flex-col justify-center items-center">
      <h2 class="text-5xl font-extrabold mb-12 tracking-wide uppercase"><?= $title ?></h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl w-full">
        <?php for ($i = $start; $i <= $end; $i++): ?>
          <img 
            src="assets/images/portfolio/photo<?= $i ?>.jpg" 
            alt="<?= $title ?> <?= $i ?>" 
            class="image-tile w-full h-72 object-cover rounded-xl shadow-xl cursor-pointer enlargeable"
            data-src="assets/images/portfolio/photo<?= $i ?>.jpg"
          >
        <?php endfor; ?>
      </div>
    </section>
  <?php endforeach; ?>

  <!-- Modal -->
  <div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-90 flex justify-center items-center z-[999]">
    <span class="absolute top-6 right-10 text-white text-4xl font-bold cursor-pointer z-50 hover:text-yellow-500 close">&times;</span>
    <img class="max-w-[90%] max-h-[85%] rounded-lg shadow-2xl modal-content" id="modalImage" alt="Enlarged Image">
  </div>
</main>

<?php include 'includes/footer.php'; ?>
