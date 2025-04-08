// ABNA TECH Website Scripts
document.addEventListener('DOMContentLoaded', function() {
  console.log("ABNA TECH website loaded");

  // Scroll to top button
  const scrollUpButton = document.getElementById('scrollUp');
  if (scrollUpButton) {
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        scrollUpButton.classList.add('show');
      } else {
        scrollUpButton.classList.remove('show');
      }
    });

    scrollUpButton.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Intersection Observer for scroll animations
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .zoom-in').forEach(element => {
    observer.observe(element);
  });

  // Contact form submission
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const formData = new FormData(contactForm);
      const formResponse = document.getElementById('formResponse');

      // Show loading indicator
      formResponse.innerHTML = '<div class="loading">Sending message...</div>';
      formResponse.style.display = 'block';

      fetch('process-contact.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          formResponse.innerHTML = `<div class="success-message">${data.message}</div>`;
          contactForm.reset();
        } else {
          formResponse.innerHTML = `<div class="error-message">${data.message}</div>`;
        }
      })
      .catch(error => {
        formResponse.innerHTML = '<div class="error-message">An error occurred. Please try again later.</div>';
        console.error('Error:', error);
      });
    });
  }

  // Portfolio filter functionality
  const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  if (filterButtons.length > 0 && portfolioItems.length > 0) {
    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));

        // Add active class to current button
        this.classList.add('active');

        const filterValue = this.getAttribute('data-filter');

        // Filter portfolio items
        portfolioItems.forEach(item => {
          if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }
  
  // Check if admin login link exists in the footer
  const adminLoginElement = document.getElementById('admin-login');
  if (adminLoginElement) {
    adminLoginElement.addEventListener('click', function(e) {
      e.preventDefault();
      window.location.href = 'admin/login.php';
    });
  }

  // Sticky navbar functionality
  const header = document.querySelector('header');
  window.addEventListener('scroll', function() {
    // Sticky navbar
    if (window.pageYOffset > 100) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  });
});