// Modal functionality
function openModal(event) {
    event.preventDefault();
    document.getElementById('bookingModal').style.display = 'block';
    generateCalendar();
}

function closeModal() {
    document.getElementById('bookingModal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
    if (event.target == document.getElementById('bookingModal')) {
        closeModal();
    }
}

// Calendar functionality
let currentDate = new Date();

function generateCalendar() {
    const calendar = document.getElementById('calendar');
    const currentMonthElement = document.getElementById('currentMonth');
    
    // Update month display
    currentMonthElement.textContent = currentDate.toLocaleString('default', { 
        month: 'long', 
        year: 'numeric' 
    });

    // Generate calendar grid
    const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
    
    // Clear previous calendar
    calendar.innerHTML = '';
    
    // Add day headers
    ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'].forEach(day => {
        const dayElement = document.createElement('div');
        dayElement.textContent = day;
        dayElement.style.fontWeight = 'bold';
        calendar.appendChild(dayElement);
    });

    // Add date cells
    let day = 1;
    const startDay = firstDay.getDay() || 7;

    for (let i = 0; i < 42; i++) {
        const dateElement = document.createElement('div');
        if (i >= startDay - 1 && day <= lastDay.getDate()) {
            dateElement.textContent = day;
            day++;
        }
        calendar.appendChild(dateElement);
    }
}

function previousMonth() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    generateCalendar();
}

function nextMonth() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    generateCalendar();
}

// Form validation
document.getElementById('loginForm').onsubmit = function(e) {
    e.preventDefault();
    // Add your login logic here
    console.log('Login submitted');
}

document.getElementById('registerForm').onsubmit = function(e) {
    e.preventDefault();
    // Add your registration logic here
    console.log('Registration submitted');
}