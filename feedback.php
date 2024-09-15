<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="home.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('ricefield.jpeg');
    background-size: cover; /* This ensures that the background image covers the entire body */
    background-repeat: no-repeat; /* This prevents the background image from repeating */
}

header {
    background-color: green;
    color: white;
    padding: 20px;
    text-align: center;
}

main {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 20px;
}

.contact-info, .contact-form {
    background-color: white;
    padding: 20px;
    margin: 20px;
    border-radius: 5px;
}

.contact-info h2, .contact-form h2 {
    margin-top: 0;
}

.contact-info ul {
    list-style: none;
    padding: 0;
}

.contact-info ul li {
    margin-bottom: 10px;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form form label {
    font-weight: bold;
}

.contact-form form input[type="text"],
.contact-form form input[type="email"],
.contact-form form textarea {
    margin-bottom: 10px;
    padding: 5px;
    width: 100%;
}

.contact-form form textarea {
    resize: vertical;
}

.contact-form form button {
    padding: 10px;
    background-color: green;
    color: white;
    border: none;
    cursor: pointer;
}

footer {
    background-color: green;
    color: white;
    text-align: center;
    padding: 10px;
}


</style>
<body>
    <header>
    <div>
      <img src="da_logo.png" style="margin-top:0; margin-left: 5px; size:90px; height: 90px; width: 100px; float: left;">
      <img src="sane_logo.png" style="margin-top:0; margin-left: 10px; size:90px; height: 90px; width: 130px; float: left;">
  <p style="margin-top: 30px; margin-left: 50px; font-size: 25px; font-family:Arial;"><b>AN ONLINE APPLICATION FOR SAN ANTONIO RICEFIELD AGRICULTURE AND CUSTOMER SERVICE</b></p>  
    </div>
</header>
    <main>
        <h1>USER FEEDBACK</h1>
        <section class="contact-form">
            <h2>Send us a message</h2>
            <form action="#" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Department of Agriculture</p>
    </footer>
</body>
</html>
