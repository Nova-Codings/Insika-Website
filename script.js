/* Up button*/
document.addEventListener("DOMContentLoaded", function () {
    var scrollToTopBtn = document.getElementById("scroll-to-top");

    // Show/hide the "UP" link based on scroll position
    window.addEventListener("scroll", function () {
        var scrollPosition = window.scrollY || document.documentElement.scrollTop;

        // Toggle visibility based on scroll position
        if (scrollPosition > 20) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }

        // Change colors when near footer
        var footer = document.querySelector("footer");
        if (footer) {
            var footerTop = footer.offsetTop;
            if (scrollPosition + window.innerHeight >= footerTop) {
                scrollToTopBtn.style.backgroundColor = "black";
                scrollToTopBtn.style.color = "#df8207";
            } else {
                scrollToTopBtn.style.backgroundColor = "#df8207";
                scrollToTopBtn.style.color = "#000000";
            }
        }
    });

    // Smooth scroll to the top
    scrollToTopBtn.addEventListener("click", function (event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});
    /*End Up Scroll*/

//Navigation Functionality
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger-menu');
    const nav = document.querySelector('nav');
    const dropdowns = document.querySelectorAll('.dropdown');

    hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        nav.classList.toggle('active');
    });

    // Handle mobile menu interactions
    if (window.innerWidth <= 768) {
        dropdowns.forEach(dropdown => {
            // Keep hover functionality for dropdowns
            dropdown.addEventListener('mouseenter', function() {
                this.querySelector('.dropdown-content').style.display = 'block';
            });

            dropdown.addEventListener('mouseleave', function() {
                this.querySelector('.dropdown-content').style.display = 'none';
            });

            // Handle nested dropdowns
            const nestedDropdowns = dropdown.querySelectorAll('.nested-dropdown');
            nestedDropdowns.forEach(nested => {
                nested.addEventListener('mouseenter', function() {
                    this.querySelector('.nested-dropdown-content').style.display = 'block';
                });

                nested.addEventListener('mouseleave', function() {
                    this.querySelector('.nested-dropdown-content').style.display = 'none';
                });
            });
        });
    }

    // Reset menu state on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            hamburger.classList.remove('active');
            nav.classList.remove('active');
        }
    });
});

/* Hero section */
// Hero Slider
const heroSlider = document.querySelector('.hero-slider');
const slides = heroSlider.querySelectorAll('.slide');
const prevBtn = heroSlider.querySelector('.prev');
const nextBtn = heroSlider.querySelector('.next');
const progressBar = heroSlider.querySelector('.progress');

let currentSlide = 0;
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
    progressBar.style.width = `${((index + 1) / totalSlides) * 100}%`;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

prevBtn.addEventListener('click', prevSlide);
nextBtn.addEventListener('click', nextSlide);

// Auto-rotate slides
setInterval(nextSlide, 5000);

/* End Hero Section */

// Counter animation
const counters = document.querySelectorAll('.count');
const speed = 200;

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const inc = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + inc);
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
});

/* Video Section */
// Select elements
const playButton = document.getElementById("play-button");
const popupOverlay = document.getElementById("popup-overlay");
const closeButton = document.getElementById("close-button");
const youtubeVideo = document.getElementById("youtube-video");

// YouTube video link
const videoURL = "https://www.youtube.com/embed/2dX-7SWYcg8?autoplay=1";

// Show popup and set YouTube video source
playButton.addEventListener("click", () => {
    youtubeVideo.src = videoURL;
    popupOverlay.style.display = "flex";
});

// Close popup and stop video
closeButton.addEventListener("click", () => {
    youtubeVideo.src = "";
    popupOverlay.style.display = "none";
});

/* End of Video Section */

// Partners Slider
const slider = document.querySelector('.slider');
const Slides = Array.from(document.querySelectorAll('.Slide')); // Fixed class name inconsistency
const slideWidth = slides[0].offsetWidth + 40; // Including padding
let index = 0;

// Clone slides to create an infinite loop
function cloneSlides() {
  slides.forEach((slide) => {
    const clone = slide.cloneNode(true);
    slider.appendChild(clone);
  });
}

// Move the slider to the next position
function moveSlider() {
  index++;
  slider.style.transform = `translateX(-${index * slideWidth}px)`;

  // Reset the slider position when reaching the end
  if (index >= slides.length) {
    setTimeout(() => {
      slider.style.transition = 'none';
      slider.style.transform = 'translateX(0)';
      index = 0;
      setTimeout(() => {
        slider.style.transition = 'transform 0.5s ease-in-out';
      }, 50);
    }, 500); // Match this duration with the CSS transition time
  }
}

// Initialize slider
cloneSlides();
setInterval(moveSlider, 10000); // Slower interval for the slider

/* End of Partners Slider */

/* h2 Functionality */
document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('animate');
          }
      });
  }, {
      threshold: 0.1
  });

  // Observe all h2 elements
  document.querySelectorAll('h2').forEach(h2 => {
      observer.observe(h2);
  });
});

/* End h2 Functionality */

/* Horizontal Functionality */
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            if (entry.target.classList.contains('horizontal-square')) {
                entry.target.setAttribute('data-text', entry.target.textContent.trim());
                entry.target.innerHTML = `<span>${entry.target.textContent}</span>`;
            }
        }
    });
}, {
    threshold: 0.1
});

// Observe all horizontal squares
document.querySelectorAll('.horizontal-square').forEach(square => {
    observer.observe(square);
});

/* End horizontal functionality */

/* East London page */
document.addEventListener('DOMContentLoaded', () => {
  // Intersection Observer for animations
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.style.animationDelay = entry.target.dataset.delay || '0s';
              entry.target.style.animationPlayState = 'running';
              observer.unobserve(entry.target);
          }
      });
  }, {
      threshold: 0.1
  });

  // Observe all animated elements
  document.querySelectorAll('.fade-in, .slide-in, .slide-in-right, .zoom-in, .float-in').forEach((element, index) => {
      element.style.animationPlayState = 'paused';
      element.dataset.delay = `${index * 0.2}s`;
      observer.observe(element);
  });

  // Service items stagger animation
  const serviceItems = document.querySelectorAll('.service-group li');
  serviceItems.forEach((item, index) => {
      item.style.opacity = '0';
      item.style.transform = 'translateX(-20px)';
      setTimeout(() => {
          item.style.transition = 'all 0.3s ease';
          item.style.opacity = '1';
          item.style.transform = 'translateX(0)';
      }, 500 + index * 100);
  });
});
/* End East London page */
