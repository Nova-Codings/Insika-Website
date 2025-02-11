<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Insika Training Academy</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../img/insika_foundation_logo1.png" type="image/x-icon">
    <style>
        :root {
            --primary: #df8207;
            --dark: #333;
            --light: #fff;
            --gray: #f4f4f4;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            overflow-x: hidden;
        }

        /* Contact Section Styles */
        .contact-section {
            padding: 60px 0;
            background-color: var(--gray);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-container {
            background-color: var(--light);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
            margin-bottom: 60px;
        }

        .Contact-info {
            background-color: var(--primary);
            color: var(--light);
            padding: 50px;
            width: 40%;
            position: relative;
            overflow: hidden;
        }

        .Contact-info::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-color: rgba(255,255,255,0.1);
            transform: rotate(-45deg);
            z-index: 1;
        }

        .Contact-info h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .contact-details {
            position: relative;
            z-index: 2;
        }

        .contact-details div {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .contact-details i {
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .contact-form {
            width: 60%;
            padding: 50px;
            background-color: var(--dark);
        }

        .contact-form h2 {
            color: var(--primary);
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #df8207;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus, 
        .form-group textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 10px rgba(223,130,7,0.2);
            outline: none;
        }

        .form-group label {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: #fdfdfd;
        }

        .form-group label input[type="checkbox"] {
            margin-right: 10px;
            width: auto;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: var(--primary);
            color: var(--light);
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #b66606;
        }

        .map-container {
            width: 100%;
            height: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
            }

            .Contact-info, .contact-form {
                width: 100%;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes slideInRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .Contact-info, .contact-form {
            animation: fadeIn 1s ease-out;
        }

        .Contact-info h2, .contact-details {
            animation: slideInLeft 1s ease-out;
        }

        .contact-form h2, .form-group {
            animation: slideInRight 1s ease-out;
        }

        .popup {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 15px 25px;
    border-radius: 5px;
    z-index: 1000;
    display: none;
    animation: slideIn 0.5s ease-in-out;
}

.popup-success {
    background-color: #4CAF50;
    color: white;
}

.popup-error {
    background-color: #f44336;
    color: white;
}

@keyframes slideIn {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <a href="../index.html" ><img  src="../img/insika_foundation_logo1.png" alt="Insika Foundation Logo" class="logo"></a>
            <h5 class="heading">RE-ENGINEER YOUR CRAFT</h5>
            <ul class="nav-links">
                <li><a href="trainingacademy.html">Home</a></li>
                <li><a href="aboutus.html" >About Us</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li class="dropdown">
                    <a href="#courses">Training Courses</a>
                    <div class="dropdown-content">
                        <a href="unqf.html">Understanding the NQF</a>
                        <a href="agriculture.html">Agriculture</a>
                        <a href="#">Banking</a>
                        <a href="transportation.html">Transport</a>
                        <a href="#">Fibre Processing & Manufacturing</a>
                        <a href="#">Information Technology Systems</a>
                        <a href="#">Education & Training</a>
                        <a href="#">Cooking & Hospitality</a>
                        <a href="#">Local Government</a>
                    </div>
                </li>
                <li><a href="contact.html" class="active">Contact</a></li>
            </ul>
            <a href="#" class="btn" onclick="openModal(event)"><span></span>Book Now</a>
        </div>
        <div class="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>

    <br><br><br><br><br><br>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="Contact-info">
                    <h2>Contact Information</h2>
                    <p>If you require any information about training courses, 
                        costs for training courses or scheduled training dates, 
                        please fill in the brief form and Insika Training Foundation 
                        will get in touch with you.</p>
                        <br><br>
                    <div class="contact-details">
                        <div>
                            <a href="https://www.google.com/maps/search/?api=1&query=Elethu+House,+Building+23,+Thornhill+Office+Park,+94+Bekker+Road,+Midrand+1686" target="_blank" style="color: white; text-decoration: none;">
                              <i class="fas fa-map-marker-alt"></i>
                              <span>Elethu House, Building 23</span><br>
                              <span>Thornhill Office Park</span><br>
                              <span>94 Bekker Road, Midrand 1686</span>
                            </a>
                          </div>
                        <div>
                            <a style="color: white; text-decoration: none;" href="mailto:info@insikafoundation.co.za">
                              <i class="fas fa-envelope"></i> info@insikafoundation.co.za
                            </a>
                          </div>
                        <div>
                            <i class="fas fa-phone"></i>011 695 6800</div>
                        <div><i class="fas fa-clock"></i>Mon - Fri: 8:00am - 5:00pm<br>Sat & Sun: Closed</div>
                    </div>
                </div>
                <div class="contact-form">
                    <h2>Ready to Get Started?</h2>
                    <p style="color: #df8207;">In accordance with the POPI Act, Insika Foundation Training Academy 
                        respects the privacy of all learners and corporate institutions and 
                        has institutionalised organizational measures to secure the integrity, 
                        safety and confidentiality of all personal and company information 
                        collected from you to prevent any unlawful access to it. 
                        Your email address will not be published.
                        Required fields are marked <span style="color: red;">*</span></p>
                        <br><br>
                        <?php if (!empty($successMessage)): ?>
                        <div class="success-message" style="color: green; margin-bottom: 20px; text-align: center;">
                            <?php echo $successMessage; ?>
                        </div>
                        <?php endif; ?>
                    <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>
                            <?php if (isset($errors['name'])): ?>
                                <span class="error" style="color: red; font-size: 0.8rem;"><?php echo $errors['name']; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                            <?php if (isset($errors['email'])): ?>
                                <span class="error" style="color: red; font-size: 0.8rem;"><?php echo $errors['email']; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" rows="5" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                            <?php if (isset($errors['message'])): ?>
                                <span class="error" style="color: red; font-size: 0.8rem;"><?php echo $errors['message']; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="terms" <?php echo isset($terms) && $terms ? 'checked' : ''; ?> required>
                                I accept the terms and privacy policy
                            </label>
                            <?php if (isset($errors['terms'])): ?>
                                <span class="error" style="color: red; font-size: 0.8rem;"><?php echo $errors['terms']; ?></span>
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.7258908544936!2d28.112771314846462!3d-26.009795162414104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956f15c5be506b%3A0xfa84a4b5421d6362!2sInsika+foundation%2C+elethu+House!5e0!3m2!1sen!2sza!4v1563026499933!5m2!1sen!2sza" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Modal -->
<div id="bookingModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Online Booking</h2>
        
        <!-- Calendar Section -->
        <div class="calendar-section">
            <div class="calendar-header">
                <button onclick="previousMonth()">&lt;</button>
                <h3 id="currentMonth">February 2025</h3>
                <button onclick="nextMonth()">&gt;</button>
                <button>Filters</button>
            </div>
            <div class="calendar-grid" id="calendar">
                <!-- Calendar will be generated by JavaScript -->
            </div>
        </div>

     <!-- Auth Forms -->
<div class="auth-forms">
    <div class="flip-container">
        <div class="flipper">
            <!-- Register Form (Front) -->
            <div class="form-section front">
                <h3>Register</h3>
                <form id="registerForm">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" required>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox"> Want to become an instructor?
                        </label>
                    </div>
                    <button type="submit">Register</button>
                    <p><a href="#" class="flip-trigger" id="showLogin">Already have an account? Login</a></p>
                </form>
            </div>

            <!-- Login Form (Back) -->
            <div class="form-section back">
                <h3>Login</h3>
                <form id="loginForm">
                    <div class="form-group">
                        <label>Username or email</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" required>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit">Login</button>
                    <p><a href="#">Lost your password?</a></p>
                    <p><a href="#" class="flip-trigger" id="showRegister">Don't have an account? Register</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-grid">
                    <!-- Company Info -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <img src="../img/logo_footer.png" alt="Insika Foundation Logo">
                        </div>
                        <p class="company-description">A branch of Insika Foundation NPC focusing on skills development and professional growth.</p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="footer-widget">
                        <h3>Quick Links</h3>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="footer-widget">
                        <h3>Contact Us</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="https://www.google.com/maps/search/?api=1&query=Elethu+House,+Building+23+Thornhill+Office+Park+94+Bekker+Road+Midrand+1686" style="color: #ffffff; text-decoration: none;" target="_blank" rel="noopener noreferrer">
                                    Elethu House, Building 23 Thornhill Office Park<br>94 Bekker Road Midrand 1686
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>011 695 6800</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@insikafoundation.co.za" style="color: #ffffff; text-decoration: none;">info@insikafoundation.co.za</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="footer-widget">
                        <h3>Newsletter</h3>
                        <p>Subscribe to our newsletter for updates</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Enter your email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p>&copy; 2024 Insika Foundation Training Academy. Proudly Crafted by Nova Codings</p>
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <span class="separator">|</span>
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="main.js"></script>
    <script>
     const form = document.querySelector('#contactForm');
const popup = document.createElement('div');
popup.className = 'popup';
document.body.appendChild(popup);

function validateForm() {
    const name = form.querySelector('[name="name"]').value.trim();
    const email = form.querySelector('[name="email"]').value.trim();
    const message = form.querySelector('[name="message"]').value.trim();
    
    if (!name || !email || !message) {
        return false;
    }
    return true;
}

form.addEventListener('submit', async function(e) {
    e.preventDefault();
    
    // Clear previous errors
    const errorElements = form.querySelectorAll('.error-message');
    errorElements.forEach(element => element.remove());
    
    if (!validateForm()) {
        showPopup('Please fill in all required fields', 'error');
        return;
    }

    // Show loading state
    const submitButton = form.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    submitButton.innerHTML = 'Sending...';
    
    try {
        const formData = new FormData(this);
        const response = await fetch('Contact Form Handler.php', {
            method: 'POST',
            body: formData
        });
        
        const data = await response.json();
        
        if (data.success) {
            showPopup('Message sent successfully!', 'success');
            form.reset();
        } else {
            showPopup(data.message || 'Failed to send message', 'error');
        }
    } catch (error) {
        showPopup('An error occurred. Please try again.', 'error');
    } finally {
        submitButton.disabled = false;
        submitButton.innerHTML = 'Send Message';
    }
});

function showPopup(message, type) {
    popup.textContent = message;
    popup.className = `popup popup-${type}`;
    popup.style.display = 'block';
    
    setTimeout(() => {
        popup.style.display = 'none';
    }, 3000);
}
    </script>
</body>
</html>
<?php
$html = ob_get_clean();
echo $html;
?>