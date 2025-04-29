<!DOCTYPE html>
<html lang="uz">
<head>
    <!-- Sahifa kodirovkasi va responsivlik sozlamalari -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Nurmuhammad</title>

    <!-- Bootstrap CSS ni ulash (CDN orqali) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">




    <!-- Maxsus stil yozish uchun fayl -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Navigatsiya menyusi -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Logotip yoki isming -->
        <a class="navbar-brand" href="#">Nurmuhammad To'lqinov</a>

        <!-- Responsive menyu tugmasi -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menyu bo'limlari -->
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Bosh sahifa</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Men haqimda</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Aloqa</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Intro qismi (Hero section) -->
<section id="home" class="d-flex align-items-center text-center" style="height: 100vh; background: #f8f9fa;">
    <div class="container">
        <!-- Ism va kasbingiz -->
        <h1 class="display-4 fw-bold">Salom, men Nurmuhammad</h1>
        <p class="lead">Junior Full Stack Web Dasturchiman</p>

        <!-- Tugmalar: Men haqimda, Portfolio, Aloqa -->
        <a href="#about" class="btn btn-primary m-2">Men haqimda</a>
        <a href="#contact" class="btn btn-outline-secondary m-2">Bog‘lanish</a>
    </div>
</section>

<!-- Men haqimda bo‘limi -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Chap taraf: rasm -->
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <img src="/images/men.jpg" alt="Men" class="img-fluid rounded-circle shadow" width="200">
            </div>
            <!-- O'ng taraf: matn -->
            <div class="col-md-8">
                <h2 class="mb-3">Men haqimda</h2>
                <p>
                    Salom! Men <strong>Nurmuhammad To'lqinov</strong>, Junior Full Stack Web Dasturchiman.
                    <br> Kadirov Dev’da Akmal Kadirov ustozligida kursni muvaffaqiyatli yakunlaganman.
                    PHP, MySQL, HTML, Bootstrap, Git, va API Platform bilan ishlayman.
                </p>
                <p>
                    Mening maqsadim – kuchli jamoada o‘rganishda davom etish va haqiqiy loyihalarda tajriba orttirish.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Ko‘nikmalar (Skills) bo‘limi -->
<section id="skills" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Ko‘nikmalarim</h2>

        <div class="row">
            <!-- Har bir texnologiya uchun alohida card -->
            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/html5.svg" alt="HTML5" width="60">
                <p class="mt-2">HTML5</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/css3.svg" alt="CSS3" width="60">
                <p class="mt-2">CSS3</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/bootstrap.svg" alt="Bootstrap" width="60">
                <p class="mt-2">Bootstrap</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/php.svg" alt="PHP" width="60">
                <p class="mt-2">PHP</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/mysql.svg" alt="MySQL" width="60">
                <p class="mt-2">MySQL</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/git.svg" alt="Git" width="60">
                <p class="mt-2">Git</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/api.png" alt="API" width="60">
                <p class="mt-2">API Platform</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/Vue.js_Logo_2.svg.png" alt="API" width="60">
                <p class="mt-2">Vue.Js</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/symfony.png" alt="API" width="60">
                <p class="mt-2">Symfony</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/JavaScript-logo.png" alt="API" width="60">
                <p class="mt-2">JavaScript</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/tailwinds.png" alt="API" width="60">
                <p class="mt-2">Tailwindcss</p>
            </div>

            <div class="col-md-3 col-6 mb-4 text-center">
                <img src="images/phpstorm.png" alt="API" width="60">
                <p class="mt-2">PhpStorm</p>
            </div>

        </div>
    </div>
</section>


<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Bog‘lanish</h2>
        <div class="row">
            <!-- Chap taraf: Aloqa info -->
            <div class="col-md-5 mb-4">
                <div class="p-4 bg-white shadow rounded">
                    <h4 class="mb-4">Aloqa ma’lumotlari</h4>
                    <p><i class="bi bi-geo-alt-fill me-2 text-primary"></i> Tashkent, Uzbekistan</p>
                    <p><i class="bi bi-telephone-fill me-2 text-primary"></i> +998 88 800 85 35</p>
                    <p><i class="bi bi-envelope-fill me-2 text-primary"></i> nurmuhammadtulqinov51@gmail.com</p>
                </div>
            </div>

            <!-- O‘ng taraf: Forma -->
            <div class="col-md-7">
                <div class="p-4 bg-white shadow rounded">
                    <form method="POST" action="#">
                        <div class="mb-3">
                            <label class="form-label">Ism</label>
                            <input type="text" class="form-control" placeholder="Ismingizni kiriting" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email manzilingiz" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mavzu</label>
                            <input type="text" class="form-control" placeholder="Xabar mavzusi" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Xabar</label>
                            <textarea class="form-control" rows="5" placeholder="Xabaringizni yozing..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Yuborish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">

            <!-- Logo / Intro -->
            <div class="col-md-4 mb-4">
                <h4 class="fw-bold">Nurmuhammad</h4>
                <p class="text-muted">Junior Full Stack Web Developer. Portfolio saytimga xush kelibsiz!</p>
            </div>

            <!-- Navigatsiya -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold">Bo‘limlar</h5>
                <ul class="list-unstyled">
                    <li><a href="#home" class="text-white text-decoration-none">Bosh sahifa</a></li>
                    <li><a href="#skills" class="text-white text-decoration-none">Ko‘nikmalar</a></li>
                    <li><a href="#contact" class="text-white text-decoration-none">Bog‘lanish</a></li>
                </ul>
            </div>

            <!-- Ijtimoiy tarmoqlar -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold">Ijtimoiy tarmoqlar</h5>
                <a href="https://t.me/nurmuhammad_tulkinovv" class="text-white me-3 fs-4" target="_blank"><i class="bi bi-telegram"></i></a>
                <a href="https://instagram.com/nurmuhammad_tulkinovv" class="text-white me-3 fs-4" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://github.com/NurmuhammadTulkinov" class="text-white me-3 fs-4" target="_blank"><i class="bi bi-github"></i></a>
                <a href="mailto:nurmuhammadtulqinov51@gmail.com" class="text-white fs-4"><i class="bi bi-envelope-fill"></i></a>
            </div>

        </div>

        <hr class="border-top border-secondary my-4">
        <p class="text-center mb-0 text-light">&copy; 2025 | Barcha huquqlar himoyalangan.</p>


    </div>
</footer>





<!-- Bootstrap JS fayllarini ulash -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
