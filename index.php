<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>KAEcomp</title>
    <link rel="icon" href="/img/KAEicon.png" type="image/png">
    <link rel="preload" href="/font/Inter-VariableFont_opszwght.ttf" as="font" type="font/ttf" crossorigin>
</head>
<body>
    
    <header id="SectionHeader" class="header pt-3 bg-light fixed-top custom-underline">
        <div class="container text-center pb-3 px-0">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid text-center p-0">
                            <img src="img/KAEcomp.svg" class="img-fluid" alt="Logo">
                            <button class="navbar-toggler navbar-light border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span> <!-- This should display the hamburger icon -->
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item ms-32px">
                                        <a class="nav-link fs-18px ps-0 pe-0" href="#sectionAbout">О компании</a>
                                    </li>
                                    <li class="nav-item ms-32px">
                                        <a class="nav-link fs-18px ps-0 pe-0" href="#sectionService">Услуги</a>
                                    </li>
                                    <li class="nav-item ms-32px">
                                        <a class="nav-link fs-18px ps-0 pe-0" href="#sectionContact">Оставить заявку</a>
                                    </li>
                                </ul>
                                <div class="d-flex icons">
                                    <div class="icon"><a href="mailto: kaecompvisa@gmail.com"><img class="img-fluid" src="img/email.svg" alt="Email"></a></div>
                                    <!-- <div class="icon"><a href=""><img class="img-fluid" src="img/FB.svg" alt="Facebook"></a></div> -->
                                    <div class="icon"><a href="https://www.instagram.com/kaecomp?igsh=MWpuNmZmZzJ6Mm14MA==" target="_blank"><img class="img-fluid" src="img/INST.svg" alt="Instagram"></a></div>
                                    <div class="icon"><a href="https://t.me/kaecomp" target="_blank"><img class="img-fluid" src="img/TG.svg" alt="Telegram"></a></div>
                                    <div class="icon"><a href=""><img class="img-fluid" src="img/WP.svg" alt="WhatsApp"></a></div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <section id="sectionAbout" class="section about mt-132px">
    <div class="container p-0">
        <div class="row">
            <div class="col-lg-6 col-md-12 d-flex align-items-center">
                <div>
                    <h2 class="mb-3 fs-48px about_color">KAE Company — Live today, Love tomorrow</h2>
                    <p class="text-start fs-18px">Откройте новые горизонты с комфортом и профессионализмом! Мы обеспечим вам надежность на каждом этапе пути, позаботившись обо всех деталях. Подготовка, сопровождение документов и запись на получение визы в консульство США. Получение рабочей визы и визы инвестора в странах Персидского залива. Покупка или аренда жилья. Помощь в подборе автомобиля и отправка в страны бывшего СНГ</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 d-flex">
                <div class="image-wrapper d-flex">
                    <img src="img/about.webp" class="img-fluid br-16px" style="object-fit: cover; filter: brightness(40%)">
                    <div class="overlay-text position-absolute bottom-0 d-flex flex-column justify-content-center text-center text-white p-4">
                        <h3 style="width:100%"></h3>
                        <p style="width:100%"></p>
                    </div>
                    <!-- Стрелки -->
                    <button class="slider-arrow left-arrow" onclick="prevSlide()">&#10094;</button>
                    <button class="slider-arrow right-arrow" onclick="nextSlide()">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
</section>


    
    <section id="sectionService">
        <div class="container mb-42px">
            <div class="row mt-5">
                <div class="col-12 p-0">
                    <h2 class="text-left mb-32px services_color fs-32px">Услуги</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12" style="padding:0; width:250px;">
                    <a href="USA.html"><img src="img/USA.svg" class="img-fluid br-8px c_shadow" style="width:250px"></a>
                    <div class="buttonMore">
                        <a href="USA.html" class="btn-more fs-18px">Подробнее</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12" style="padding:0; width:250px;">
                    <a href="INVEST.html"><img src="img/INVEST.svg" class="img-fluid br-8px c_shadow" style="width:250px"></a>
                    <div class="buttonMore">
                        <a href="INVEST.html" class="btn-more fs-18px">Подробнее</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12" style="padding:0; width:250px;">
                    <a href="WORK.html"><img src="img/WORK.svg" class="img-fluid br-8px c_shadow" style="width:250px"></a>
                    <div class="buttonMore">
                        <a href="WORK.html" class="btn-more fs-18px">Подробнее</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12" style="padding:0; width:250px;">
                    <a href="APS.html"><img src="img/APS.svg" class="img-fluid br-8px c_shadow" style="width:250px"></a>
                    <div class="buttonMore">
                        <a href="APS.html" class="btn-more fs-18px">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="sectionContact" class="mb-32px contacts">
        <div class="container">
            <div class="row">
                <div class="image-container col-lg-6 col-md-12">
                    <img src="img/Contact.svg" alt="Contact" class="img-fluid">
                </div>
                <div class="form-section col-lg-6 col-md-12">
                    <h2 class="mt-96px mb-24px fs-48px contact_color text-end">Свяжитесь с нами!</h2>
                    <form id="contactForm" method="post" action="send.php">
                        <div class="form-group">
                            <input type="text" id="fio" name="fio" placeholder="Введите ваше имя" required pattern="[А-Яа-яЁё\s]+" title="Введите корректное ФИО (только буквы и пробелы)">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Введите ваш e-mail" required pattern=".*@.*" title="Введите ваш e-mail">
                        </div>
                        <div class="form-group">
                            <textarea spellcheck="true" id="message" name="message" placeholder="Введите ваше сообщение..." required minlength="10"  title="Сообщение должно содержать минимум 10 символов"></textarea>
                        </div>
                        <?php if ($_SESSION['message']) {
                            echo '<a class="fs-18px message">'.$_SESSION['message'].'</a>';
                            }
                            unset($_SESSION['message']);
                        ?>
                        <button type="submit" class="btn-form" onclick="myFunction()">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
        
    <script src="script/jquery.min.js"></script>
    <script src="script/bootstrap.bundle.min.js"></script>
    <script>
        // Получаем все ссылки навигации
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Закрываем бургер-меню
                const navbarCollapse = document.getElementById('navbarNav');
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    toggle: false // Не переключаем состояние
                });
                bsCollapse.hide(); // Закрываем меню
            });
        });


        // Пример новостей
        const newsSlides = [
            {
                title: "В ОАЭ продлили программу визовой амнистии до конца года",
                text: "После этого не получится решить миграционные проблемы без штрафа",
                img: "img/news1.webp"
            },
            {
                title: "International Airshow Bahrain 2024 пройдёт c 13 по 15 ноября ",
                text: "Основные тематические направления: авиация, авиационные технологии",
                img: "img/news2.webp"
            },
            {
                title: "Катар вводит безвизовый режим для 102 стран",
                text: "Инициатива упрощает поездки и стимулирует международный туризм",
                img: "img/news3.webp"
            }
        ];

        let currentSlide = 0;

        function showSlide(index) {
            const slide = newsSlides[index];
            document.querySelector(".image-wrapper img").src = slide.img;
            document.querySelector(".overlay-text h3").textContent = slide.title;
            document.querySelector(".overlay-text p").textContent = slide.text;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % newsSlides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + newsSlides.length) % newsSlides.length;
            showSlide(currentSlide);
        }

        // Показать первый слайд при загрузке страницы
        document.addEventListener("DOMContentLoaded", function() {
            showSlide(currentSlide);
        });
    </script>
</body>
</html>

