//image modal section
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('imageModal');
  const modalImg = document.getElementById('modalImage');
  const closeBtn = document.querySelector('.close');

  // When any image with class "enlargeable" is clicked
  document.querySelectorAll('.enlargeable').forEach(img => {
    img.addEventListener('click', () => {
      const src = img.getAttribute('data-src');
      modal.classList.remove('hidden');
      modalImg.src = src;
    });
  });

  // Close modal when close button is clicked
  closeBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
    modalImg.src = ''; // clear image
  });

  // Close modal when clicking outside the image
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.add('hidden');
      modalImg.src = '';
    }
  });

  // Optional: close modal on pressing ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
      modal.classList.add('hidden');
      modalImg.src = '';
    }
  });
});

//Testimonial section
document.addEventListener('DOMContentLoaded', () => {
  const testimonials = document.querySelectorAll('.testimonial');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  let current = 0;

  function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
      testimonial.classList.toggle('hidden', i !== index);
      testimonial.classList.toggle('block', i === index);
    });
  }

  prevBtn.addEventListener('click', () => {
    current = (current - 1 + testimonials.length) % testimonials.length;
    showTestimonial(current);
  });

  nextBtn.addEventListener('click', () => {
    current = (current + 1) % testimonials.length;
    showTestimonial(current);
  });

  // Initialize on page load
  showTestimonial(current);
});

