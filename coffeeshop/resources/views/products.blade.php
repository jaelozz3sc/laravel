<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products — Roast & Ember</title>

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

        .menu-list {
            max-width: 650px;
            margin: auto;
            text-align: left;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            padding: 18px 0;
            border-bottom: 1px solid #d9c9b6;
        }

        .menu-item span.desc {
            color: #78604e;
            font-size: 14px;
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
        <h2>Our Products</h2>
        <p>Freshly brewed, made with love.</p>
    </section>

    <section class="about">
        <div class="menu-list">

            <div class="menu-item">
                <div>
                    <strong>Espresso</strong><br>
                    <span class="desc">Rich, bold, perfectly extracted.</span>
                </div>
                <span>₱90</span>
            </div>

            <div class="menu-item">
                <div>
                    <strong>Caramel Latte</strong><br>
                    <span class="desc">Smooth, sweet, house-made caramel.</span>
                </div>
                <span>₱150</span>
            </div>

            <div class="menu-item">
                <div>
                    <strong>Cold Brew</strong><br>
                    <span class="desc">Slow-steeped for eighteen hours.</span>
                </div>
                <span>₱140</span>
            </div>

            <div class="menu-item">
                <div>
                    <strong>Butter Croissant</strong><br>
                    <span class="desc">Baked fresh every morning.</span>
                </div>
                <span>₱120</span>
            </div>

        </div>
    </section>

    <section class="hero">
        <a href="{{ route('contact') }}" class="button">Contact Us</a>
    </section>

    <footer>
        <p>Roast & Ember</p>
        <p>Good Coffee, Great Moments, Endless Bliss.</p>
        <p>&copy; 2026 Roast & Ember. All Rights Reserved.</p>
    </footer>

</body>
</html>