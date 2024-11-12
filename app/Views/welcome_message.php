<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bjaramillo PHP CodeIgniter</title>
        <meta name="description" content="Prueba Byron Jaramillo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/favicon.ico">
        <style {csp-style-nonce}>
            * {
                transition: background-color 300ms ease, color 300ms ease;
            }
            html, body {
                color: rgba(33, 37, 41, 1);
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
                font-size: 16px;
                margin: 0;
                padding: 0;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-rendering: optimizeLegibility;
            }
            header {
                background-color: #1d1e20;
                padding: .4rem 0 0;
                color: white;
            }
            .menu {
                padding: .4rem 2rem;
            }
            header ul {
                list-style-type: none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                text-align: right;
            }
            header li {
                display: inline-block;
            }
            header li a {
                border-radius: 5px;
                color: rgba(0, 0, 0, .5);
                display: block;
                height: 44px;
                text-decoration: none;
            }
            header li.menu-item a {
                border-radius: 5px;
                margin: 5px 0;
                height: 38px;
                line-height: 36px;
                padding: .4rem .65rem;
                text-align: center;
                color: white;
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: #FF3D4F;
                color: white;
            }
            header .logo {
                float: left;
                height: 44px;
                padding: .4rem .5rem;
            }
            header .menu-toggle {
                display: none;
                float: right;
                font-size: 2rem;
                font-weight: bold;
            }
            header .menu-toggle button {
                background-color: rgba(221, 72, 20, .6);
                border: none;
                border-radius: 3px;
                color: rgba(255, 255, 255, 1);
                cursor: pointer;
                font: inherit;
                font-size: 1.3rem;
                height: 36px;
                padding: 0;
                margin: 11px 0;
                overflow: visible;
                width: 40px;
            }
            header .menu-toggle button:hover,
            header .menu-toggle button:focus {
                background-color: rgba(221, 72, 20, .8);
                color: rgba(255, 255, 255, .8);
            }
            section {
                margin: 0 auto;
                max-width: 1100px;
                padding: 2.5rem 1.75rem 3.5rem 1.75rem;
            }
            section h1 {
                margin-bottom: 2.5rem;
            }
            section h2 {
                font-size: 120%;
                line-height: 2.5rem;
                padding-top: 1.5rem;
            }
            footer {
                background-color: rgba(221, 72, 20, .8);
                text-align: center;
            }
            footer .environment {
                color: rgba(255, 255, 255, 1);
                padding: 2rem 1.75rem;
            }
            footer .copyrights {
                background-color: #1d1e20;
                color: rgba(200, 200, 200, 1);
                padding: .25rem 1.75rem;
            }
            @media (max-width: 629px) {
                header ul {
                    padding: 0;
                }
                header .menu-toggle {
                    padding: 0 1rem;
                }
                header .menu-item {
                    background-color: rgba(244, 245, 246, 1);
                    border-top: 1px solid rgba(242, 242, 242, 1);
                    margin: 0 15px;
                    width: calc(100% - 30px);
                }
                header .menu-toggle {
                    display: block;
                }
                header .hidden {
                    display: none;
                }
                header li.menu-item a {
                    background-color: rgba(221, 72, 20, .1);
                }
                header li.menu-item a:hover,
                header li.menu-item a:focus {
                    background-color: rgba(221, 72, 20, .7);
                    color: rgba(255, 255, 255, .8);
                }
            }
        </style>
        <style>
            .logoBJ{
                max-width: 200px;
            }
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
        </style>
        
    </head>
    <body>

        <!-- HEADER: MENU SECTION -->
        <header>
            <div class="menu">
                <ul>
                    <li class="logo">
                        <a href="https://bjaramillo.cl" target="_blank">
                            <img class ="logoBJ" src="https://bjaramillo.cl/wp-content/uploads/2022/09/cropped-logo.png">
                        </a>
                    </li>
                    <li class="menu-toggle">
                        <button id="menuToggle">&#9776;</button>
                    </li>
                    <li class="menu-item hidden"><a href="#">Home</a></li>
                    <li class="menu-item hidden"><a href="<?=base_url();?>indicadores">Indicadores</a>
                </ul>
            </div>
        </header>

        <!-- CONTENT -->
        <section>
            <h1>¡Hola! Soy Byron Jaramillo, esta es una prueba por encargo realizada en Nov2024. Las tecnologías utilizadas fueron:</h1>
            <div class="row">
                <div style="float: left; width: 50%;">
                    <h2>- PHP 8.1.29</h2>
                    <h2>- CodeIgniter 4.5.5</h2>
                    <h2>- MySql 8</h2>
                </div>
                <div style="float: left; width: 50%;">
                    <h2>- Bootstrap 5.3</h2>
                    <h2>- Jquery 3.7</h2>
                    <h2>- Datatables 2.1</h2>
                </div>
            </div>
        </section>

        <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
        <footer>
            <div class="environment">
                <p>Page rendered in {elapsed_time} seconds using {memory_usage} MB of memory.</p>
                <p>Environment: <?= ENVIRONMENT ?></p>
            </div>
            <div class="copyrights">
                <p>&copy; <?= date('Y') ?> <a href="https://bjaramillo.cl" target="_blank" style="color:white;">bjaramillo.cl</a></p>
            </div>
        </footer>

        <!-- SCRIPTS -->
        <script {csp-script-nonce}>
            document.getElementById("menuToggle").addEventListener('click', toggleMenu);
            function toggleMenu() {
                var menuItems = document.getElementsByClassName('menu-item');
                for (var i = 0; i < menuItems.length; i++) {
                    var menuItem = menuItems[i];
                    menuItem.classList.toggle("hidden");
                }
            }
        </script>
    </body>
</html>
