<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartShoes | SmartStep</title>

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
                color: black;
                background-color: #00031c;
            }

            /* Navigation Styles */
            nav {
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 10px 0;
                list-style-type: none;
            }
            nav li::marker {
                content: none; /* Zruší jakýkoli marker, který by mohl být zobrazen */
            }

            nav .container {
                max-width: 1650px;
                margin: 0 auto;
                padding: 0 20px;
            }

            nav .flex {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            nav .obrazek img {
                width: 170px;
                height: auto;
            }

            nav ul {
                display: flex;
                gap: 20px;
            }

            nav a {
                color: white;
                text-decoration: none;
                transition: color 0.3s;
            }

            nav a:hover {
                color: grey;
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
                padding: 150px;
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
                color: white;
                margin-bottom: 20px;
            }

            .hero-section .content a {
                text-decoration: none;
                background-color: #020943;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                transition: background-color 0.3s, color 0.3s;
            }

            .hero-section .content a:hover {
                background-color: white;
                color: black;
            }

            /* Produkt Section */

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
                    opacity: 0; /* Skrytí prvků */
                    transition: opacity 1s ease; /* Plynulý přechod pro zobrazení */
                    animation: fadeIn 1s ease forwards; /* Použití animace pro zobrazení */
                }
                /* Definice animace pro zobrazení */
                @keyframes fadeIn {
                    to {
                        opacity: 1; /* Prvky se zobrazí */
                    }
                }
            }

            .produkt-item .img {
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
            .features p {
                text-align: center;
                margin-top: 50px;
                color:white;
                font-family: 'Figtree', sans-serif;
                font-size: 2rem;
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
                color: white;
            }


            .features li {
                display: flex;
                align-items: center;
            }

            .features li:not(:last-child)::after {
                content: "|";
            }

            /* Footer Styles */
            footer {
                background-color: black;
                color: white;
                padding: 20px 0;
                text-align: center;
            }
        footer a{
        color: white;
        }
        footer a:hover{
            transition: 0.3s;
            color: gray;
        }
        </style>
    </head>
    <body class="text-gray-800">

        <!-- Navigation Bar -->
        <nav>
            <div class="container">
                <div class="flex">
                    <div class="obrazek">
                        <a href="/"><img src="/images/logo.png" alt="Logo" /></a>
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
                <img src="<?php echo e(asset('/images/modrabota.png')); ?>" alt="Logo">

                <!-- Content on the right -->
                <div class="content">
                    <p>SmartShoes.</p>
                    <p>Modernizované boty pro každého, kdo ztrácí boty nebo sám sebe. S GPS lokátorem.</p>
                    <a href="#produkt">Zjistit více</a>
                </div>
            </div>

            <!-- Produkt Section -->
            <div id="produkt">
                <div class="grid">
                    <img src="/images/blender-smartspet-boty.trans.png" alt="Product Image" />
                    <div>
                        <div class="produkt-item">
                            <img src="/images/1314324-200.png" style="width: auto; height: 70px;" alt="Watering Can" />
                            <div>
                                <h2>SmartStep.</h2>
                                <p>Aplikace, která Vám poskytne potřebné údaje k Vašemu životnímu stylu. Propojená se SmartShoes.</p>
                            </div>
                        </div>
                        <div class="produkt-item">
                            <img src="/images/cipkbote.png" style="width: auto; height: 70px;" alt="Solar Panel" />
                            <div>
                                <h2>GPS lokátor furt u sebe.</h2>
                                <p>Vložka, pod kterou lokátor je, lze jednoduše vytáhnout. Výměna baterie je jednoduchá.</p>
                            </div>
                        </div>
                        <div class="produkt-item">
                            <img src="/images/bezovabota.png" style="width: auto; height: 70px;" alt="Fertilization" />
                            <div>
                                <h2>Více barev? Žádný problém.</h2>
                                <p>Nemáme jen klasické barvy, máme také béžovou, růžovou modrou a spoustu dalších.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="features">
                <p>Cena začíná na 1 899 Kč. Za tuhle cenu Vám ale poskytujeme:</p>
                <ul class="features-list">
                    <li><span class="feature">Bezpečnost</span></li>
                    <li><span class="feature">Elegance</span></li>
                    <li><span class="feature">Pohodlí</span></li>
                </ul>
            </div>
        </main>

        <!-- Footer -->
        <footer id="kontakt">
            <p>&copy; 2024 Daniel Mahďák, Barbora Šťávová, Alena Lišková</p>
            <a class="footer-mail" href="mailto:hello@smartstep.com">Email: hello@smartstep.com</a>
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

// Features section animation without ScrollTrigger (appears on page load)
gsap.from(".features .feature", {
    duration: 4,          // Trvání animace 4 sekundy
    opacity: 0,           // Začíná s průhledností 0
    x: 200,               // Začíná 200px vpravo
    stagger: 0.2,         // Zpoždění mezi animacemi jednotlivých prvků
    ease: "power3.out"    // Způsob průběhu animace
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
<?php /**PATH C:\Users\PC\OneDrive\Plocha\Coding\Škola\SmartStep_Laravel\resources\views/welcome.blade.php ENDPATH**/ ?>