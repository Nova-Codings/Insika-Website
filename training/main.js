// Modal functionality
function openModal(event) {
    event.preventDefault();
    const modal = document.getElementById('bookingModal');
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
    updateCalendar();
}

function closeModal() {
    const modal = document.getElementById('bookingModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('bookingModal');
    if (event.target === modal) {
        closeModal();
    }
}

// Calendar functionality
// Calendar functionality
let currentDate = new Date(); // This will be used for displaying the month
let today = new Date(); // This will be used for highlighting today's date

function updateCalendar() {
    const calendar = document.getElementById('calendar');
    const currentMonth = document.getElementById('currentMonth');
    
    // Clear existing calendar
    calendar.innerHTML = '';
    
    // Update month display
    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'];
    currentMonth.textContent = `${monthNames[currentDate.getMonth()]} ${currentDate.getFullYear()}`;
    
    // Add day headers
    const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    days.forEach(day => {
        const dayHeader = document.createElement('div');
        dayHeader.className = 'calendar-day header';
        dayHeader.textContent = day;
        calendar.appendChild(dayHeader);
    });
    
    // Get first day of month and total days
    const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
    
    // Add blank spaces for days before start of month
    for (let i = 0; i < firstDay.getDay(); i++) {
        const blank = document.createElement('div');
        calendar.appendChild(blank);
    }
    
    // Add days of month
    for (let i = 1; i <= lastDay.getDate(); i++) {
        const dayDiv = document.createElement('div');
        dayDiv.className = 'calendar-day';
        dayDiv.textContent = i;

        // Highlight current day if it's in the current month view
        if (currentDate.getMonth() === today.getMonth() && 
            currentDate.getFullYear() === today.getFullYear() && 
            i === today.getDate()) {
            dayDiv.classList.add('current');
            dayDiv.style.backgroundColor = '#df8207';
            dayDiv.style.color = 'white';
            dayDiv.style.borderRadius = '50%';
            dayDiv.style.padding = '8px';
        }

        calendar.appendChild(dayDiv);
    }
}

function previousMonth() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
}

function nextMonth() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    updateCalendar();
}

function selectDate(day) {
    selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
    updateCalendar();
    // You can add additional logic here for what happens when a date is selected
}

// Form handling with validation
document.getElementById('loginForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    // Add your login validation and submission logic here
});

document.getElementById('registerForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    // Add your registration validation and submission logic here
});

// Initialize modal
document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to all booking buttons
    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('click', openModal);
    });   
});
document.addEventListener('DOMContentLoaded', function() {
    const flipContainer = document.querySelector('.flip-container');
    const showLoginLink = document.getElementById('showLogin');
    const showRegisterLink = document.getElementById('showRegister');

    if (showLoginLink) {
        showLoginLink.addEventListener('click', function(e) {
            e.preventDefault();
            flipContainer.classList.add('flipped');
        });
    }

    if (showRegisterLink) {
        showRegisterLink.addEventListener('click', function(e) {
            e.preventDefault();
            flipContainer.classList.remove('flipped');
        });
    }
});

// Enrollment Popup Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Create popup elements
    const overlay = document.createElement('div');
    overlay.className = 'enroll-overlay';
    
    const popup = document.createElement('div');
    popup.className = 'enroll-popup';
    
    // Popup content
    popup.innerHTML = `
      <div class="enroll-close">&times;</div>
      <div class="enroll-content">
        <div class="enroll-header">
          <h2>Enroll in Course</h2>
          <p>Fill out the form below to start your learning journey</p>
        </div>
        <form class="enroll-form">
          <div class="form-group">
            <input type="text" id="fullName" placeholder=" " required>
            <label for="fullName">Full Name</label>
          </div>
          <div class="form-group">
            <input type="email" id="email" placeholder=" " required>
            <label for="email">Email Address</label>
          </div>
          <div class="form-group">
            <input type="tel" id="phone" placeholder=" " required>
            <label for="phone">Phone Number</label>
          </div>
          <div class="form-group">
            <select id="course" required>
              <option value="">Select a Course</option>
              <option value="horticulture1">Horticulture NQF Level 1</option>
              <option value="poultry2">Poultry Production NQF Level 2</option>
              <option value="plant1">Plant Production NQF Level 1</option>
              <option value="landscaping3">Landscaping NQF Level 3</option>
            </select>
          </div>
          <button type="submit" class="enroll-submit">
            Submit Application
          </button>
        </form>
      </div>
    `;
    
    // Add popup to document
    document.body.appendChild(overlay);
    document.body.appendChild(popup);
    
    // Event handlers
    const enrollButtons = document.querySelectorAll('.cta-button');
    const closeBtn = popup.querySelector('.enroll-close');
    
    function openPopup() {
      overlay.classList.add('active');
      popup.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
    
    function closePopup() {
      overlay.classList.remove('active');
      popup.classList.remove('active');
      document.body.style.overflow = '';
    }
    
    enrollButtons.forEach(button => {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        openPopup();
      });
    });
    
    closeBtn.addEventListener('click', closePopup);
    overlay.addEventListener('click', closePopup);
    
    popup.addEventListener('click', function(e) {
      e.stopPropagation();
    });
    
    // Form submission
    const form = popup.querySelector('.enroll-form');
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Add loading state
      const submitBtn = form.querySelector('.enroll-submit');
      submitBtn.textContent = 'Submitting...';
      submitBtn.disabled = true;
      
      // Simulate form submission (replace with actual API call)
      setTimeout(() => {
        submitBtn.textContent = 'Success!';
        submitBtn.style.background = '#22c55e';
        
        setTimeout(() => {
          closePopup();
          // Reset form and button
          form.reset();
          submitBtn.textContent = 'Submit Application';
          submitBtn.style.background = '';
          submitBtn.disabled = false;
        }, 1500);
      }, 2000);
    });
  });

  /* Transport page */
    // Animate course cards on scroll
    const courseCards = document.querySelectorAll(".course-card")
    const observerOptions = {
      root: null,
      rootMargin: "0px",
      threshold: 0.1,
    }
  
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1"
          entry.target.style.transform = "translateY(0)"
          observer.unobserve(entry.target)
        }
      })
    }, observerOptions)
  
    courseCards.forEach((card) => {
      card.style.opacity = "0"
      card.style.transform = "translateY(20px)"
      card.style.transition = "opacity 0.5s ease-out, transform 0.5s ease-out"
      observer.observe(card)
    })
  
    // Add parallax effect to hero section
    const hero = document.querySelector("#hero")
    window.addEventListener("scroll", () => {
      const scrollPosition = window.pageYOffset
      hero.style.backgroundPositionY = `${scrollPosition * 0.5}px`
    })
  
    // Add hover effect to course icons
    courseCards.forEach((card) => {
      const icon = card.querySelector(".course-icon i")
      card.addEventListener("mouseenter", () => {
        icon.style.transform = "scale(1.2) rotate(10deg)"
        icon.style.transition = "transform 0.3s ease"
      })
      card.addEventListener("mouseleave", () => {
        icon.style.transform = "scale(1) rotate(0deg)"
      })
    })
  /* End Transport page */