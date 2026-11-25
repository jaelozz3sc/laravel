<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roast & Ember</title>

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

        .hero img {
            width: 80%;
            max-width: 650px;
            height: 300px;
            object-fit: cover;
            border-radius: 12px;
        }

        .hero h2 {
            font-size: 30px;
            margin-top: 25px;
        }

        .hero p {
            font-size: 17px;
            color: #78604e;
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

        <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1000"
             alt="Cozy coffee shop">

        <h2>Welcome to Roast & Ember</h2>

        <p>
            A cozy little corner for your favorite coffee,
            delicious treats, and beautiful moments.
        </p>

        <a href="{{ route('products') }}" class="button">
            Explore Our Products
        </a>

    </section>

    <section class="about">

        <h2>A Little Taste of Happiness</h2>

        <p>
            At Roast & Ember, we believe that every cup of coffee
            tells a story. We are dedicated to serving freshly
            prepared drinks and delicious treats in a warm and
            welcoming atmosphere. Whether you're studying,
            relaxing, or spending time with friends, there's
            always a place for you here.
        </p>

    </section>

    <footer>
        <p>Roast & Ember</p>
        <p>Good Coffee, Great Moments, Endless Bliss.</p>
        <p>&copy; 2026 Roast & Ember. All Rights Reserved.</p>
    </footer>

</body>
</html>