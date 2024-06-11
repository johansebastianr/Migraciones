<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenido</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="styles.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>

            <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">
        <img src="{{ asset('imagenes/logo_texto-removebg-preview.png') }}" alt="Logo de tu página" width="150px" height="100px">
        </a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-3 px-lg-3 rounded" href="#inicio">Inicio</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-3 px-lg-3 rounded" href="#servicios">Servicios</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-3 px-lg-3 rounded" href="#comentarios">Comentarios</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-3 px-lg-3 rounded" href="#contact">Contactos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-3 px-lg-3 rounded" href="register">Registrarse</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<header id="inicio" class="masthead bg-primary text-white text-center" style="background-image: url('{{ asset('imagenes/fondo.png') }}'); background-size: cover; background-position: center center; margin-top: 100px; overflow-x: hidden">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <!-- Masthead Heading-->
        <h1 class="masthead-heading">Viaja rápido, seguro y eficaz</h1>

        <!-- Icon Divider-->
        <div class="divider-custom"></div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading">Asegurando su bienestar durante el trayecto</p>
        <!-- Portfolio Item Caption -->
        <div class="portfolio-item-caption d-flex align-items-left justify-content-left h-100 w-100">
                <div class="portfolio-item-caption-content text-left text-white"></div>
                <button type="button" class="btn btn-custom2" onclick="window.location.href='login'">Ingresar</button>
            </div>
        </div>
    </div>
</header>

<!--inicio-->
<section class="page-section bg-primary text-white mb-0">
    <div class="container">
        <!-- inicio Section Heading-->
        <h2 class="page-section-heading text-left text-black">Lo que nos <span style="color: #F28705">mueve</span></h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- inicio Section Content-->
        <div class="row">
            <div class="col-lg-8 ms-autos">
                <p class="lead" style="color:black">
                        En Brew Ride, nos dedicamos a conectar a usuarios particulares y empresas con servicios
                        de transporte que se adaptan a sus necesidades. Nuestro principal objetivo
                        es contribuir a la reducción de la tasa de accidentes en las ciudades y para lograrlo,
                        hemos desarrollado un software impulsado por sólidos principios éticos. Más que simplemente
                        ofrecer movilidad, nos esforzamos por promover la toma de decisiones responsables al volante.
                        Únete a nosotros en nuestro compromiso por un viaje más seguro y consciente.
                </p>
            </div>
            <!-- Cambiar este div por la imagen -->
            <div class="col-lg-4 me-autos">
                <img src="{{ asset('imagenes/taxi.jpg') }}"; alt="Interior del taxi" class="img-fluid" style="max-width: 100vh; height: 395px; border-radius: 10px;">
            </div>
        </div>
        <!-- inicio Section Button-->
        <div class="portfolio-item-caption d-flex align-items-left justify-content-left">
                <div class="portfolio-item-caption-content text-left text-white"></div>

                <button type="button" class="btn btn-custom" style="margin-top:20px; color:white; height: 59px; background: #262626" onclick="window.open('/nosotros')">Leer más</button>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section-->
<section class="page-section portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-black" style="text-align: center">Discotecas <span style="color: #F28705">visitadas</span></h2>
                <br>
                <div class="row">
            <div class="page-section-heading text-center text-black">
                <p class="lead" style="color:black">
                ¡Aventúrate en una experiencia emocionante
                    y siempre renovada! Cada dos semanas
                    actualizaremos las discotecas de esta página
                </p>
            </div>

                <!-- Icon Divider-->
                <div class="divider-custom"></div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item mx-auto">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('imagenes/level.jpeg') }}" alt="Entrada de level" style="width:348px; height: 251.33px;background-color: transparent"/>
                        </div>
                    </div>

                    <!-- Portfolio Item 2-->

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('imagenes/fotoLevel.jpg') }}" alt="Interior de level" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>

                    <!-- Portfolio Item 3-->

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                    </div>
                        <img class="img-fluid" src="{{ asset('imagenes/tono.png') }}" alt="Tono" style="width:348px; height: 251.33px"/>
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white" style="text-align:center">
                    Level Club <br>
                    Cra. 9 #60 Norte-151
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 4-->

            <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                    </div>
                        <img class="img-fluid" src="{{ asset('imagenes/tono.png') }}" alt="Tono" style="width:348px; height: 251.33px"/>
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white" style="text-align:center">
                    Land Disco <br>
                    Av. Panamericana #14 Norte-2 a 14 Norte-82
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 5-->

            <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                        </div>
                            <img class="img-fluid" src="{{ asset('imagenes/fotoLand.jpg') }}" alt="Interior de land" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>

            <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('imagenes/land.jpg') }}" alt="Entrada de land" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>

                    <!-- Portfolio Item 7-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal7">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('imagenes/sandunga.jpg') }}" alt="Entrada de sandunga" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>

                    <!-- Portfolio Item 8-->

                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal8">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('imagenes/fotoSandunga.jpg') }}" alt="Interior de sandunga" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>

                    <!-- Portfolio Item 9-->

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal9">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                    </div>
                        <img class="img-fluid" src="{{ asset('imagenes/tono.png') }}" alt="Tono" style="width:348px; height: 251.33px"/>
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white" style="text-align:center">
                    Sandunga<br>
                    Av. Panamericana #14 Norte-2 a 14 Norte-82
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section-->
        <section class="pag-section portfolio" id="servicios">
            <div class="container" style="padding-left: 15px; padding-right: 15px;">
                <!-- About Section Heading-->
                <h2 class="pag-section-heading text-center text-black" style="text-align: center">Nuestros <span style="color: #F28705">servicios</span></h2>
                <br><br>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    <!-- Portfolio Item 1-->
                    <div class="row" style="justify-content: space-around; gap: 15px;">
                        <!-- Contenedor 1: Conductor -->
                        <div class="col-md-3 mb-5 margen" style="background-color: #eae7e7; border: 8px solid #ffffff; padding: 12px; border-radius: 21px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="page-section-heading text-center text-black">
                                <img class="img-fluid" src="{{ asset('imagenes/copas-de-vino.png') }}" alt="Copas de vino" style="width: 100px; height: 100px; display: block; margin: 30px auto; border-radius: 20%;" />
                                <p class="lead" style="color:black;text-align:center">
                                    <span style="font-size:1.50rem; font-weight: 600">Conductor</span>
                                </p>
                                <p class="lead" style="color:black; text-align:center;">
                                    Transporte seguro para tus noches de celebración
                                </p>
                            </div>
                        </div>
                    
                        <!-- Contenedor 2: Domicilio -->
                        <div class="col-md-3 mb-5" style="background-color: #eae7e7; border: 8px solid #ffffff; padding: 12px; border-radius: 21px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="page-section-heading text-center text-black">
                                <img class="img-fluid" src="{{ asset('imagenes/casa.png') }}" alt="Casa" style="width: 100px; height: 100px; display: block; margin: 30px auto; border-radius: 20%;" />
                                <p class="lead" style="color:black;text-align:center">
                                    <span style="font-size:1.50rem; font-weight:600">Domicilio</span>
                                </p>
                                <p class="lead" style="color:black; text-align:center;">
                                    Envía paquetes desde la comodidad de tu hogar
                                </p>
                            </div>
                        </div>
                    
                        <!-- Contenedor 3: Emergencias -->
                        <div class="col-md-3 mb-5" style="background-color: #eae7e7; border: 8px solid #ffffff; padding: 12px; border-radius: 20px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="page-section-heading text-center text-black">
                                <img src="{{ asset('imagenes/llamada emergencia.png') }}" alt="Llamada de emergencia" style="width: 100px; height: 100px; display: block; margin: 30px auto; border-radius: 20%;" />
                                <p class="lead" style="color: black; text-align: center;">
                                    <span style="font-size: 1.50rem; font-weight: 600;">Emergencias</span>
                                </p>
                                <p class="lead" style="color: black; text-align: center;">
                                    Recibe atención médica en el momento preciso que la necesitas
                                </p>
                            </div>
                        </div>
                    </div>
                    




        </section>

<!-- testimon Section-->

<section class="pag-section portfolio" id="servicios">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="pag-section-heading text-center text-black" style="text-align: center">Si vas a beber. <span style="color: #F28705"> Haz del regreso a casa un recuerdo seguro</span></h2>
                <!-- Icon Divider-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

    <div class="row">
        <div class="col-lg-8 ms-autos">
            <p class="lead" style="color:black;text-align:left">
                <img src="{{ asset('imagenes/manos.png') }}" alt="Icono de manos" id="manos" style="height: 60px; margin-right: 10px; background-color: #F28705; border-radius:7px">
                <span style="font-size:1.90rem; font-weight:450; color:black">Compromiso</span>
            </p>

            <p class="lead" style="color:black; text-align:left;">
                No te preocupes por tu bienestar, nosotros te cuidamos
            </p>

            <br>

            <p class="lead" style="color:black;text-align:left">
                <img src="{{ asset('imagenes/taxi.png') }}" alt="Icono de taxi" id="taxi" style="height: 70px; margin-right: 10px; background-color: #F28705; border-radius:7px">
                <span style="font-size:1.90rem; font-weight:450; color:black">Servicios 24 horas</span>
            </p>

            <p class="lead" style="color:black; text-align:left;">
                El servicio estará abierto durante las 24 horas del día
            </p>

            <br>

            <p class="lead" style="color:black;text-align:left">
                <img src="{{ asset('imagenes/seguridad.png') }}" alt="Icono de seguridad" id="seguridad" style="height: 70px; margin-right: 10px; background-color: #F28705; border-radius:7px">
                <span style="font-size:1.90rem; font-weight:450; color:black">Viaja sin preocupaciones</span>
            </p>

            <p class="lead" style="color:black; text-align:left;">
                Llega seguro a tu casa sin temor de que te suceda algo
            </p>
        </div>

            <!-- Cambiar este div por la imagen -->
            <div class="col-lg-4 me-autos">
                <img src="{{ asset('imagenes/logo-beber-carro.png') }}" alt="Prohibido beber" class="img-fluid" style="max-width: 78vh;">
            </div>
        </div>
    </div>
</section>


<div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

        <!-- testimon Section-->
        <section class="pag-section portfolio" id="comentarios">
            <div class="container">
            <h2 class="pag-section-heading text-center text-black" style="text-align: center">Comentarios</h2>
                <!-- About Section Heading-->
                <!-- Icon Divider-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                    <div id="commentCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- First comment -->

            <div class="carousel-item active">
                <div class="comment-card">
                    <div class="profile-details">
                            <img src="{{ asset ('imagenes/user-circle.svg')}}" class="rounded-circle profile-picture" alt="Profile Picture" width="180" height="150">
                            <h5>Johan Sebastián</h5>
                        </div><br>
                            <div class="comment-details">
                                <p>Brew Ride ha simplificado tanto mis desplazamientos que
                                    ya no puedo imaginar cómo era antes. La posibilidad
                                    de programar viajes con anticipación me ha salvado
                                    en más de una ocasión, especialmente en días de mucho
                                    trabajo o eventos importantes.
                                </p>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                </div>

        <!-- Second comment -->

                <div class="carousel-item">
                    <div class="comment-card">
                        <div class="profile-details">
                            <img src="{{ asset ('imagenes/user-circle.svg') }}" class="rounded-circle profile-picture" alt="Profile Picture" width="180" height="150">
                            <h5>Yilmer Alejandro</h5>
                        </div><br>
                        <div class="comment-details">
                            <p>Como conductor de Brew Ride, me encanta poder generar
                                ingresos adicionales de manera flexible. La plataforma
                                es transparente y justa, lo que me brinda tranquilidad
                                y confianza mientras brindo un servicio de calidad a
                                los usuarios. ¡Es una experiencia gratificante en todos
                                los sentidos!.
                            </p>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                </div>

        <!-- Three comment -->
                <div class="carousel-item">
                    <div class="comment-card">
                        <div class="profile-details">
                            <img src="{{asset ('imagenes/user-circle.svg') }}" class="rounded-circle profile-picture" alt="Profile Picture" width="180" height="150">
                            <h5>Felipe Gutierrez</h5>
                        </div><br>
                        <div class="comment-details">
                            <p>¡Qué maravilla es Brew Ride! Además de la comodidad y
                                la seguridad, también me encanta la variedad de
                                opciones que ofrece. Desde viajes compartidos hasta
                                autos de lujo, siempre puedo elegir la opción que mejor
                                se adapte a mis necesidades y presupuesto.
                            </p>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                </div>

        <!-- Four comment -->
                <div class="carousel-item">
                    <div class="comment-card">
                        <div class="profile-details">
                            <img src="{{ asset ('imagenes/user-circle.svg') }}" class="rounded-circle profile-picture" alt="Profile Picture" width="180" height="150">
                            <h5>Jose Perafan</h5>
                        </div><br>
                        <div class="comment-details">
                            <p>Lo que más me gusta de Brew Ride es la seguridad
                                que ofrece. Siempre puedo ver quién es mi conductor
                                y qué vehículo está utilizando. Además, sé exactamente
                                cuánto voy a pagar antes de subirme al auto.
                                ¡Es genial no tener sorpresas desagradables al
                                final del viaje!
                            </p>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                </div>

        <!-- Add more comments as needed -->
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#commentCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#commentCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <!-- Indicator -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#commentCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#commentCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#commentCarousel" data-bs-slide-to="2"></li>
                        <li data-bs-target="#commentCarousel" data-bs-slide-to="3"></li>
                        <!-- Add more indicators as needed -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section-->
<section class="pa-section portfolio" id="contact" style="background-image: url('{{ asset('imagenes/fondo2.png') }}'); background-size: cover; background-position: center center; margin-top: 100px; overflow-x: hidden">>
            <div class="container">
            <h2 class="pa-section-heading text-center text-white" style="text-align: left">Contactos</h2>
            <br>
                <!-- About Section Heading-->
                <!-- Icon Divider-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light"></div>
                <!-- Contact Section Form-->
                <div class="row justify-content-left">
                    <div class="col-lg-8 ">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="{{route('guardar.informacion')}}" method="POST">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" style="text-align:left; padding:12px;" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name" style="padding:15px; font-size:20px">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">*Campo obligatorio.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" style="text-align:left; padding:12px;" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email" style="padding:15px; font-size:20px">Correo</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">*Campo obligatorio.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" style="text-align:left; padding:12px;" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone" style="padding:15px; font-size:20px">Número telefónico</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">*Campo obligatorio.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="text-align:left; padding:12px;" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message" style="padding:15px; font-size:20px">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">*Campo obligatorio.</div>
                            </div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>

                            <!-- Submit error message-->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" type="submit" style="background: #8B4512; border: none; color: white; width: 196px; height: 57px">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Columna del logo -->
            <div class="col-lg-0 mb-5 mb-lg-0">
                <a href="http://127.0.0.1:8000/">
                    <img src="{{ asset('imagenes/logo_texto-removebg-preview.png') }}" alt="Logo" class="img-fluid" width="250px" height="250px">
                </a>
            </div>

            <!-- Columna de la compañía -->

            <div class="col-lg-1" style="text-align: left; margin-top: 24px">
                <h4 class="mb-4" style="color: #B8B1A9">Compañía</h4>

                <a href="/acerca" style="text-decoration: none">
                    <p class="lead efecto-color">Acerca de</p>
                </a>

                <a href="/privacidad" style="text-decoration: none">
                    <p class="lead efecto-color">Privacidad</p>
                </a>

                <a href="/términos" style="text-decoration: none">
                    <p class="lead efecto-color">Términos y Condiciones</p>
                </a>
            </div>

            <!-- Nuevo div al lado de la compañía -->
            <div class="col-lg-0" style="text-align: left; margin-top: 24px">
                <h4 class="mb-4" style="color: #B8B1A9">Contactos</h4>
                <p class="lead text" style="color: #7A7A7A">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span style="margin-left: 5px;">Diagonal 28 #17 - 147</span>
                </p>

                <p class="lead text" style="color: #7A7A7A">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span style="margin-left: 5px;">(+57)88 1206 2092</span>
                </p>

                <p class="lead text" style="color: #7A7A7A">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span style="margin-left: 5px;">brewride@gmail.com</span>
                </p>
            </div>
        <div class="col-lg-0" style="text-align:left">
    <h4 class="mb-4" style="color: #B8B1A9; margin-top:10px; padding: 0 1px; margin: 5px;">
        Para más información, ofertas y noticias
    </h4>

    <form action="{{ route('guardar.informacion') }}" method="POST">
    @csrf
        <div class="form-floating mb-3">
            <input class="form-control" id="emailFooter" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
            <label for="emailFooter">Ingrese su correo</label>
            <div class="invalid-feedback" data-sb-feedback="emailFooter:required">*Campo obligatorio.</div>
        </div>
        <button class="btn btn-primary btn-xl" type="submit" style="background: #8B4512; border: none; width: 186px; height: 57px">Enviar</button>
    </form>
</div>
        <div class="d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-facebook btn-social mx-1" href="https://www.facebook.com"><i class="fab fa-fw fa-facebook-f"></i></a>
            <a class="btn btn-outline-instagram btn-social mx-1" href="https://www.instagram.com"><i class="fab fa-fw fa-instagram" id="insta"></i></a>
            <a class="btn btn-outline-twitter btn-social mx-1" href="https://www.twitter.com"><img src="{{ asset('/imagenes/x-twitter.svg') }}" alt="Icono de twitter" style="width:24px; height:20px"></a>
        </div>
    </div>
</div>
</footer>

<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; Brew Ride: 2024. Todos los derechos reservados.</small></div>
</div>

<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->

<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-md"> <!-- Cambiado a modal-md para hacerlo más pequeño -->
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('/imagenes/level.jpeg') }}" alt="Level modal" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 2-->

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
    <div class="modal-dialog modal-md"> <!-- Cambiado a modal-md para hacerlo más pequeño -->
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('/imagenes/fotoLevel.jpg') }}" alt="Interior level modal" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 3-->

<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
    <div class="modal-dialog modal-md"> <!-- Cambiado a modal-md para hacerlo más pequeño -->
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="" alt="Dirección" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 4-->

<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="" alt="Dirección" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 5-->

<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagenes/fotoLand.jpg') }}" alt="Land interior modal" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 6-->

<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagenes/land.jpg') }}" alt="Land modal" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 7-->

<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" aria-labelledby="portfolioModal7" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagenes/sandunga.jpg') }}" alt="Sandunga modal" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 8-->

<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" aria-labelledby="portfolioModal8" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagenes/fotoSandunga.jpg') }}" alt="Sandunga interior modal" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 9-->

<div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" aria-labelledby="portfolioModal9" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="" alt="Dirección" style="width: 100%; height: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="script.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
