<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GrowPot</title>

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

            /* Body Styles */
            body {
                font-family: 'Figtree', sans-serif;
                color: #333;
                background-color: #f4f4f4;
            }

            /* Navigation Styles */
            nav {
                background-color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 10px 0;
                list-style-type: none;
            }
            nav li::marker {
                content: none; /* Zruší jakýkoli marker, který by mohl být zobrazen */
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
                width: 80px;
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
                color: #48bb78; /* Green color on hover */
            }

            /* Hero Section Styles */
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

            /* Produkt Section */
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

            /* Features Section */
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
                justify-content: center; /* Centrování položek */
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

            /* Contact Section */
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

            /* Footer Styles */
            footer {
                background-color: black;
                color: white;
                padding: 20px 0;
                text-align: center;
            }
        </style>
    </head>
    <body class="text-gray-800">

        <!-- Navigation Bar -->
        <nav>
            <div class="container">
                <div class="flex">
                    <div class="obrazek">
                        <a href="/"><img src="Eshop-Laravel/images/grow_pot_zeleny.png" alt="GrowPot Logo" /></a>
                    </div>
                    <ul>
                        <li><a href="/">Domů</a></li>
                        <li><a href="#produkt">Produkt</a></li>
                        <li><a href="#kontakt">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <main>
            <div class="hero-section">
                <!-- Image on the left -->
                <img src="{{ asset('images/Logo_pot.png') }}" alt="Logo">

                <!-- Content on the right -->
                <div class="content">
                    <p>GrowPot.</p>
                    <p>Automatický květináč, který zvlhčuje, měří teplotu, vlhkost, přizpůsobuje se květině, poháněný solárními panely.</p>
                    <a href="#produkt">Zjistit více</a>
                </div>
            </div>

            <!-- Produkt Section -->
            <div id="produkt">
                <div class="grid">
                    <img src="Eshop-Laravel/public/images/Kvetinac_1.png" alt="Product Image" />
                    <div>
                        <div class="produkt-item">
                            <img src="Eshop-Laravel/public/images/watering-can.png" alt="Watering Can" />
                            <div>
                                <h2>Automatizované zavlažování</h2>
                                <p>Zalévání Integrovaným zavlažovacím systémem.</p>
                            </div>
                        </div>
                        <div class="produkt-item">
                            <img src="Eshop-Laravel/public/images/solar-panel.png" alt="Solar Panel" />
                            <div>
                                <h2>Ekologické napájení</h2>
                                <p>Napájení pomocí solárních panelů.</p>
                            </div>
                        </div>
                        <div class="produkt-item">
                            <img src="Eshop-Laravel/public/images/test.png" alt="Fertilization" />
                            <div>
                                <h2>Automatické hnojení</h2>
                                <p>Napájen solárními panely, které efektivně využívají sluneční energii.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="features">
                <img src="Eshop-Laravel/public/images/Logo_pot.png" alt="GrowPot Logo">
                <ul class="features-list">
                    <li><span class="feature">Efektivní</span></li>
                    <li><span class="feature">Úsporný</span></li>
                    <li><span class="feature">Stylový</span></li>
                    <li><span class="feature">Praktický</span></li>
                </ul>
            </div>
        </main>

        <!-- Contact Section -->
        <div id="kontakt">
            <a href="mailto:growpot-contact@gmail.com">Email: growpot-contact@email.com</a>
        </div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Lubor Kaluža, Lukáš Juřena, Václav Frýbort</p>
        </footer>

        <!-- GSAP Animations-->
        <!-- GSAP Animations-->
        <!-- GSAP Animations-->
        <!-- GSAP Animations-->
        <script>
            gsap.registerPlugin(ScrollTrigger);

            // Hero section animation
            gsap.from(".hero-section img", {
                duration: 1,
                opacity: 0,
                x: -200,
                ease: "power3.out"
            });

            gsap.from(".hero-section .content", {
                duration: 1,
                opacity: 0,
                y: 50,
                ease: "power3.out",
                delay: 0.3
            });

            // Produkt items animation with ScrollTrigger
            gsap.from(".produkt-item", {
                duration: 1,
                opacity: 0,
                x: 200,  // Začíná 200px vpravo
                stagger: 0.3,  // Každý item se objeví postupně
                ease: "power3.out",
                scrollTrigger: {
                    trigger: "#produkt", // Cíl triggeru je sekce #produkt
                    start: "top 80%", // Začne, když je horní okraj sekce na 80% výšky okna
                    end: "top 10%", // Končí, když horní okraj sekce dojde k 10% výšky okna
                    scrub: true, // Plynulý pohyb se scrollováním
                    markers: false // Markery pro ladění
                }
            });

            // Features section animation with ScrollTrigger (moving elements from right to left)
            gsap.from(".features .feature", {
                duration: 1,
                opacity: 0,
                x: 200, // Začíná 200px vpravo
                stagger: 0.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".features", // Cíl triggeru je sekce features
                    start: "top 80%", // Začne, když je horní okraj sekce v 80% viditelnosti
                    end: "top 30%", // Končí, když je horní okraj sekce v 30% viditelnosti
                    scrub: true, // Plynulý pohyb se scrollováním
                    markers: false // Zobrazí markery pro ladění
                }
            });

            // Mouse move effect for the last image in the Features section
            const lastImage = document.querySelector('.features img');
            lastImage.style.transform = "translateX(0)"; // Initial position

            window.addEventListener('mousemove', (e) => {
                const mouseX = e.clientX / window.innerWidth - 0.5; // X position of the mouse relative to the screen
                const mouseY = e.clientY / window.innerHeight - 0.5; // Y position of the mouse relative to the screen

                gsap.to(lastImage, {
                    x: mouseX * 50, // Adjust the value (50) to change the movement sensitivity
                    y: mouseY * 50, // Adjust the value (50) to change the movement sensitivity
                    ease: "power3.out"
                });
            });
        </script>



        
    </body>
</html>
