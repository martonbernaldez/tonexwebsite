<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact | My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    
</head>

    <body>

    <!-- HEADER -->
    <header>
        <h1>Contact Me</h1>
    </header>

    <!-- NAVIGATION -->
        <?php include 'includes/nav.php'; ?>


    <!-- MAIN CONTENT -->
    <main>

        <!-- Contact Information Card -->
        <section class="contact-card">
            <h2>Contact Information</h2>
            <div class="contact-info">
                <p>Email: martonbernaldez@gmail.com</p>
                <p>Phone: 09559549849</p>
                <p>Location: Camansi Badas, Mati City, Davao Oriental</p>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h2>Send Me a Message</h2>
                <form>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email">

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Your Message"></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>

            <!-- Social Media Links -->
            <div class="social-links">
                <h2>Find Me Online</h2>
                <a href="https://www.facebook.com/apa.choychoy.5" target="_blank">Facebook</a>
                <a href="https://www.instagram.com/martonbernaldez" target="_blank">Instagram</a>
            </div>

        </section>

    </main>

    <!-- FOOTER -->
        <?php include 'includes/footer.php'; ?>


</body>
</html>