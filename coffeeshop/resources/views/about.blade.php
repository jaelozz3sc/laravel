<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile — Roast & Ember</title>

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
        <h2>Company Profile</h2>

        <p>
            Roast & Ember started as a small dream — a warm corner
            where people could slow down and enjoy a good cup of coffee.
        </p>
    </section>

    <section class="about">
        <h2>Our Story</h2>
        <p>
            What began as a tiny coffee cart in 2020 has grown into a
            neighborhood favorite. Every drink is made with care, using
            freshly roasted beans and locally sourced ingredients.
        </p>
    </section>

    <section class="hero">
        <h2>Vision</h2>
        <p>
            To be a place where people feel at home — one cup at a time.
        </p>

        <h2 style="margin-top:40px;">Mission</h2>
        <p>
            To serve honest coffee and comforting treats in a space
            filled with warmth, kindness, and good moments.
        </p>

        <h2 style="margin-top:40px;">Our Goals</h2>
        <p>
            Support local farmers &middot; Reduce waste &middot;
            Create a cozy community space &middot; Keep every cup honest.
        </p>
    </section>

    <footer>
        <p>Roast & Ember</p>
        <p>Good Coffee, Great Moments, Endless Bliss.</p>
        <p>&copy; 2026 Roast & Ember. All Rights Reserved.</p>
    </footer>

</body>
</html>