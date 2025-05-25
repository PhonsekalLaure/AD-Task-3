<?php
    function contactUs(){
        ?>
            <h2>Contact Us</h2>
            <form method="POST" action="about.php">
                <label for="name">Your Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                
                <label for="email">Your Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                
                <label for="message">Your Message:</label><br>
                <textarea id="message" name="message" rows="5" required></textarea><br>
                
                <button type="submit">Send</button>
            </form>
        <?php
    }
?>