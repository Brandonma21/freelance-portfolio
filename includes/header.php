<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PhotoSnap Studio</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind font customization -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            montserrat: ['Montserrat', 'sans-serif'],
          },
          colors: {
            primary: '#f39c12',
            accent: '#ffdd57',
            dark: '#1f1f1f',
          },
        },
      },
    };
  </script>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="bg-white text-gray-800 font-montserrat">

<!-- HEADER -->
<header class="bg-gradient-to-r from-black via-gray-900 to-black text-white sticky top-0 z-50 shadow-lg">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    
    <!-- Logo -->
    <a href="/index.php" class="text-3xl font-extrabold flex items-center gap-2 hover:text-primary transition-all duration-300">
      📸 <span class="tracking-widest">PhotoSnap</span> <span class="text-primary">Studio</span>
    </a>

    <!-- Mobile Menu Button -->
    <button id="menuToggle" class="sm:hidden p-2 rounded-md hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-primary">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Nav Links -->
    <nav id="navMenu" class="hidden sm:flex gap-8 text-lg font-medium">
      <a href="/index.php" class="hover:text-primary transition duration-300">Home</a>
      <a href="/about.php" class="hover:text-primary transition duration-300">About</a>
      <a href="/services.php" class="hover:text-primary transition duration-300">Services</a>
      <a href="/portfolio.php" class="hover:text-primary transition duration-300">Gallery</a>
      <a href="/booking.php" class="hover:text-primary transition duration-300">Book</a>
      <a href="/contact.php" class="hover:text-primary transition duration-300">Contact</a>
    </nav>
  </div>

  <!-- Mobile Nav (Dropdown) -->
  <div id="mobileMenu" class="sm:hidden hidden flex-col gap-4 px-6 pb-6 bg-gradient-to-b from-gray-900 to-black text-white text-base font-medium border-t border-gray-700">
    <a href="/index.php" class="hover:text-primary transition">Home</a>
    <a href="/about.php" class="hover:text-primary transition">About</a>
    <a href="/services.php" class="hover:text-primary transition">Services</a>
    <a href="/portfolio.php" class="hover:text-primary transition">Gallery</a>
    <a href="/booking.php" class="hover:text-primary transition">Book</a>
    <a href="/contact.php" class="hover:text-primary transition">Contact</a>
  </div>
</header>

<script>
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
