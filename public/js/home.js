 // Add floating class to navbar on scroll
 const navbar = document.querySelector('.floating-nav');
 window.addEventListener('scroll', () => {
     if (window.scrollY > 50) {
         navbar.classList.add('scrolled');
     } else {
         navbar.classList.remove('scrolled');
     }
 });

 // Back to Top functionality
 const backToTop = document.getElementById('back-to-top');
 window.addEventListener('scroll', () => {
     if (window.scrollY > 200) {
         backToTop.style.display = 'block';
     } else {
         backToTop.style.display = 'none';
     }
 });

 backToTop.addEventListener('click', () => {
     window.scrollTo({ top: 0, behavior: 'smooth' });
 });