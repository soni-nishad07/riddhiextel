<?php
$title = "Riddhielteksolutions - Contct us";
include "head.php";
?>

<body>

<?php
include "nav.php"; 
?>

<section class="breadcrumbs" style="background-image: url('./images/contact_bg.png');">
    <div class="b_overlay" style="background-image: url('./images/layer2.png');">
        <div class="brdcrm-content">
            <h1>Contact Us</h1>
        </div>
    </div>
</section>



<section class="contact-section">
        <div class="container">
            <h2>Get In Touch With Us & Send Us Messages</h2>
            <div class="contact-container">
                <form class="contact-form"  action="https://formsubmit.co/riddhiteksolutions@gmail.com"  method="POST" onsubmit="showSuccessMessage(event)">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your EMail" required>
                    <input type="text" placeholder="Mobile number" required>
                    <textarea placeholder="Your Message" required></textarea>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">
                    <button type="submit">Send Message</button>
                </form>
                <div class="contact-info">
                    <p><strong>Address</strong></p>
                    <p>
                    <a href="tel:+917975618794">
                        <i class="fas fa-phone"></i> +91-7975618794
                </a>
                    </p>
                    <p>
                    <a href="tel:+918892898999">    
                    <i class="fas fa-phone"></i>  +91-8892898999
                </a>
                </p>
                    <p>
                    <a  href="mailto:riddhiteksolutions@gmail.com" >
                    <i class="fas fa-envelope"></i> riddhiteksolutions@gmail.com
                </a>
                    </p>
                    <p>
                    <a  href="mailto:Sales@riddhiteksolutions.com" >    
                    <i class="fas fa-envelope"></i> Sales@riddhiteksolutions.com
                </a>
                </p>

                    <p><i class="fas fa-map-marker-alt"></i> No.7, 1st main, 7th cross, Ganapathipura, Kanakapura Main Road, Bangalore: 560062</p>
                </div>
            </div>
        </div>
    </section>



<?php
include('footer.php');
?>

<script>
    // Function to show success message and redirect
    function showSuccessMessage(event) {
        event.preventDefault(); // Prevent the form from submitting right away

        const form = event.target;
        const successMessage = document.getElementById('success-message');

        // Set the success message text
        successMessage.textContent = 'Message has been sent successfully!';
        successMessage.style.display = 'block'; // Show the success message

        // Submit the form immediately
        form.submit(); 

        // Clear the form fields
        form.reset(); // Reset the form fields

        // Hide success message after 5 seconds and redirect
        setTimeout(function() {
            successMessage.style.display = 'none'; // Hide the message
            window.location.href = 'contact.php'; // Redirect to the contact page
        }, 5000); // 5 seconds delay
    }
</script>

</body>
</html>

