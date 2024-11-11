<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExpresSkero - E-shop s konopnými produkty</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- GSAP CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollSmoother.min.js"></script>

        <!-- Inline Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Figtree', sans-serif;
                color: #333;
                background-color: #f4f4f4;
            }

            nav {
                background-color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 10px 0;
                list-style-type: none;
            }
            nav li::marker {
                content: none;
            }

            nav .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }

            nav .flex {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            nav .obrazek img {
                width: 200px;
                height: auto;
            }

            nav ul {
                display: flex;
                gap: 20px;
            }

            nav a {
                color: #333;
                text-decoration: none;
                transition: color 0.3s;
            }

            nav a:hover {
                color: #48bb78;
            }

            main {
                margin-top: 30px;
                padding: 20px;
            }

            .hero-section {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
                align-items: center;
            }

            .hero-section img {
                width: 100%;
                height: auto;
            }

            .hero-section .content {
                padding: 20px;
            }

            .hero-section .content p {
                font-size: 32px;
                font-weight: bold;
                color: #000;
                margin-bottom: 20px;
            }

            .hero-section .content a {
                text-decoration: none;
                background-color: black;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                transition: background-color 0.3s, color 0.3s;
            }

            .hero-section .content a:hover {
                background-color: #48bb78;
                color: black;
            }

            #produkt {
                padding: 40px 0;
            }

            #produkt .grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
                align-items: center;
            }

            .produkt-item {
                background-color: white;
                border-radius: 10px;
                padding: 20px;
                display: flex;
                align-items: center;
                gap: 20px;
                margin: 20px;
            }

            .produkt-item img {
                width: 50px;
                height: 50px;
            }

            .produkt-item h2 {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .produkt-item p {
                font-size: 16px;
                color: #555;
            }

            .features {
                text-align: center;
                margin-top: 50px;
            }

            .features img {
                width: 800px;
                height: auto;
                margin-bottom: 20px;
            }

            .features .feature {
                display: inline-block;
                font-size: 24px;
                font-weight: bold;
                margin: 0 20px;
                padding: 10px;
            }

            .features .feature div {
                display: inline-block;
                width: 4px;
                height: 40px;
                background-color: black;
                margin: 0 10px;
            }

            .features ul {
                list-style: none;
                display: flex;
                justify-content: center;
                gap: 10px;
                align-items: center;
                padding: 0;
                margin: 0;
            }

            .features li {
                display: flex;
                align-items: center;
            }

            .features li:not(:last-child)::after {
                content: "|";
            }

            #kontakt {
                text-align: center;
                margin-top: 40px;
            }

            #kontakt a {
                font-size: 24px;
                font-weight: bold;
                padding: 20px 0;
                display: inline-block;
                color: #333;
                text-decoration: none;
            }

            footer {
                background-color: black;
                color: white;
                padding: 20px 0;
                text-align: center;
            }
            #kontakt {
        text-align: center;
        margin-top: 40px;
    }

    #kontakt h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    #kontakt form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input, .form-group textarea {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group button {
        background-color: #48bb78;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    .form-group button:hover {
        background-color: #4caf50;
    }
        </style>
    </head>
    <body class="text-gray-800">

        <!-- Navigation Bar -->
        <nav>
            <div class="container">
                <div class="flex">
                    <div class="obrazek">
                        <a href="/"><img src="{{ asset('img/logoskero.png') }}" alt="ExpresSkero Logo"></a>
                    </div>
                    <ul>
                        <li><a href="/">Domů</a></li>
                        <li><a href="#produkt">Produkty</a></li>
                        <li><a href="#kontakt">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <main>
            <div class="hero-section">
                <img src="{{ asset('img/bannerweed.jpg') }}" alt="Konopný produkt">

                <div class="content">
                    <p>ExpresSkero</p>
                    <p>Rychlá a bezpečná dodávka konopných produktů přímo k vám.</p>
                    <a href="#produkt">Zjistit více</a>
                </div>
            </div>

            <!-- Produkt Section -->
            <div id="produkt">
                <div class="grid">
                    <img src="{{ asset('img/produktos.jpg') }}" alt="Produkt 1">
                    <div>
                        <div class="produkt-item">
                            <img src="{{ asset('img/weed1.jpg') }}" alt="Květina">
                            <div>
                                <h2>Konopné květy</h2>
                                <p>Vysoce kvalitní květy pro vaši pohodu.</p>
                            </div>
                        </div>
                        <div class="produkt-item">
                            <img src="{{ asset('img/olejos.png') }}" alt="Konopný olej">
                            <div>
                                <h2>Konopný olej</h2>
                                <p>Prémiový olej s přírodními účinky.</p>
                            </div>
                        </div>
                        <div class="produkt-item">
                            <img src="{{ asset('img/cartrige1.png') }}" alt="Vape">
                            <div>
                                <h2>Carts</h2>
                                <p>Vape s esencemi z konopí pro relaxaci.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="features">
                <img src="{{ asset('img/logoskero.png') }}" alt="ExpresSkero Logo">
                <ul class="features-list">
                    <li><span class="feature">Rychlá Doručení</span></li>
                    <li><span class="feature">Bezpečné Platby</span></li>
                    <li><span class="feature">Discreetní</span></li>
                    <li><span class="feature">Kvalitní Produkty</span></li>
                </ul>
            </div>
        </main>

        <div id="kontakt">
            <h2>Kontaktujte nás</h2>
            <form action="/odeslat-zpravu" method="POST">
                <div class="form-group">
                    <label for="name">Vaše jméno</label>
                    <input type="text" id="name" name="name" required placeholder="Zadejte vaše jméno">
                </div>
                <div class="form-group">
                    <label for="email">Váš e-mail</label>
                    <input type="email" id="email" name="email" required placeholder="Zadejte váš e-mail">
                </div>
                <div class="form-group">
                    <label for="message">Objednávka</label>
                    <textarea id="message" name="message" required placeholder="Napište nám..." rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Odeslat zprávu</button>
                </div>
            </form>
        </div>
        <!-- Footer -->
        <footer>
            <p>&copy; 2024 ExpresSkero. Všechna práva vyhrazena.</p>
        </footer>

        <script>
            gsap.registerPlugin(ScrollTrigger);

            ScrollSmoother.create({
                smooth: 1.5,
                effects: true
            });
        </script>
    </body>
</html>
