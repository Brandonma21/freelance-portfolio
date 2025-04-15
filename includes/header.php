<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          }
        }
      }
    }
  </script>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white text-gray-800 font-montserrat m-0">
  <header class="flex justify-between items-center bg-black text-white py-4 px-8">
    <div class="text-xl font-bold">📸 PhotoSnap Studio</div>
    <nav>
      <ul class="flex gap-4 list-none m-0 p-0">
        <li><a href="/index.php" class="text-white hover:text-primary transition">Home</a></li>
        <li><a href="/about.php" class="text-white hover:text-primary transition">About</a></li>
        <li><a href="/services.php" class="text-white hover:text-primary transition">Services</a></li>
        <li><a href="/portfolio.php" class="text-white hover:text-primary transition">Gallery</a></li>
        <li><a href="/booking.php" class="text-white hover:text-primary transition">Book</a></li>
        <li><a href="/contact.php" class="text-white hover:text-primary transition">Contact</a></li>
      </ul>
    </nav>
  </header>
