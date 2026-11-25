<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us — Roast & Ember</title>

    <style>
        body {
            margin: 0;
            font-family: Georgia, serif;
            background-color: #f8f3eb;
            color: #4b3628;
        }

        header {
            background-color: #5c4033;
            color: #fff8ed;
            text-align: center;
            padding: 30px 15px;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 5px;
        }

        nav {
            margin-top: 20px;
        }

        nav a {
            color: #fff8ed;
            text-decoration: none;
            margin: 0 15px;
            font-size: 15px;
        }

        nav a:hover {
            color: #dfc29a;
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
        }

        .hero h2 {
            font-size: 30px;
            margin-top: 10px;
        }

        .hero p {
            font-size: 17px;
            color: #78604e;
        }

        .about {
            background-color: #eee3d5;
            text-align: center;
            padding: 45px 20px;
        }

        .about p {
            max-width: 650px;
            margin: auto;
            line-height: 1.8;
        }

        .contact-info {
            max-width: 650px;
            margin: auto;
            text-align: left;
        }

        .contact-info p {
            margin: 8px 0;
        }

        form {
            max-width: 450px;
            margin: auto;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d9c9b6;
            border-radius: 8px;
            background: #fff;
            font-family: Georgia, serif;
            font-size: 15px;
        }

        textarea {
            resize: none;
        }

        button {
            border: none;
            cursor: pointer;
            font-family: Georgia, serif;
            font-size: 15px;
        }

        .button {
            display: inline-block;
            background-color: #8b5e3c;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 25px;
            margin-top: 15px;
        }

        .button:hover {
            background-color: #5c4033;
        }

        footer {
            background-color: #5c4033;
            color: #fff8ed;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Roast & Ember</h1>
        <p>Good Coffee, Great Moments, Endless Bliss.</p>

        <nav>
            <a href="{{ route('index') }}">Landing Page</a>
            <a href="{{ route('about') }}">Company Profile</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact Us</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Contact Us</h2>
        <p>We'd love to hear from you.</p>
    </section>

    <section class="about">
        <div class="contact-info">
            <h3>Visit Us</h3>
            <p>123 Coffee Lane<br>Brew District, Agusan del Norte</p>

            <p><strong>Phone:</strong> +63 912 345 6789</p>
            <p><strong>Email:</strong> roastandember@gmail.com</p>
            <p><strong>Facebook:</strong> @RoastAndEmber</p>
            <p><strong>Instagram:</strong> @roastandember.cafe</p>
            <p><strong>Hours:</strong> Mon – Sun, 12PM – 12 AM</p>
        </div>
    </section>

    <section class="hero">
        <h2>Send Us a Message</h2>

        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5"></textarea>

            <button type="button" class="button">Send Message</button>
        </form>

        <p style="font-size:13px; color:#78604e; margin-top:15px;">
            * Form is for display only.
        </p>
    </section>

    <footer>
        <p>Roast & Ember</p>
        <p>Good Coffee, Great Moments, Endless Bliss.</p>
        <p>&copy; 2026 Roast & Ember. All Rights Reserved.</p>
    </footer>

</body>
</html>