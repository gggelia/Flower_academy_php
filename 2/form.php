<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Academy</title>
    <link rel="shortcut icon" href="../img/FA.png">
    <link rel="stylesheet" href="form1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="../index.php">Flower Academy</a>
            </div>
            <nav>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-menu">
                    <li><a href="../index.php#about">О нас</a></li>
                    <li><a href="../index.php#instructors">Преподаватели</a></li>
                    <li><a href="../index.php#courses">Курсы</a></li>
                    <li><a href="../index.php#reviews">Отзывы</a></li>
                    <li><a href="../index.php#contact">Обратная связь</a></li>
                    <!-- Проверяем, авторизован ли пользователь -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="dashboard.php">Личный кабинет</a></li>
                    <li><a href="logout.php">Выйти</a></li>
                <?php else: ?>
                    <li><a href="login.php">Вход</a></li>
                    <li><a href="reg.php">Регистрация</a></li>
                <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
        <section class="hero">
            <h1>Углубленный курс: Выращивание домашних растений</h1>
            <p>Преобразуйте свой дом в зеленый рай с помощью нашего курса</p>
        </section>
 <main>
        <section class="course-content" >
            <h2 style="text-align: center;">Что Вы изучите на курсе</h2>
            <ul class="checkmark-list">
                <li>Классификация и биология комнатных растений</li>
                <li>Правильный уход: полив, подкормка, пересадка</li>
                <li>Диагностика и лечение болезней и вредителей</li>
                <li>Размножение растений (черенками, семенами, делением)</li>
                <li>Дизайн и композиции с комнатными растениями</li>
                <li>Особенности ухода за разными группами растений</li>
                <li>Выбор и приобретение здоровых растений</li>
                <li>Создание оптимальной среды для растений</li>
            </ul>
            <h3>После прохождения курса вы получите сертификат! <br>
                Углубленный курс дает профессиональные навыки и экспертные знания, открывая новые карьерные возможности.</h3>
        </section>
        <section class="instructor" style="text-align: center;">
            <h2>Ваши преподаватели</h2>
            <div class="instructor-info">
                <img src="../img/flor4.png" alt="Фото преподавателя">
                <h3>Максим Федоров</h3>
                <p>Специалист по домашним растениям с опытом более 10 лет</p>
            </div>
            <div class="instructor-info">
                <img src="../img/flor7.png" alt="Фото преподавателя">
                <h3>Юко Исида</h3>
                <p>Преподаватель флористики</p>
            </div>
        </section>
        <section class="application" >
            <h2 style="text-align: center;">Подать заявку на курс</h2>
            <form id="myForm" method="post">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Почему вы хотите пройти этот курс?</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit" id="submitBtn" class="btn">Отправить заявку</button>
            </form>
        </section>
 </main>
        <footer>
            <p>&copy; 2024 Flower Academy. Все права защищены.</p>
        </footer>
        <button id="scrollToTopBtn" class="scroll-to-top-btn">
            <i class="fas fa-chevron-up"></i>
        </button>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        //скроллинг наверх
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
});

scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

//для шапки адаптив
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const dropdownLinks = document.querySelectorAll('.dropdown a');

navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

dropdownLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        window.location.href = event.target.href;
    });
});

dropdownLinks.forEach(link => {
    link.addEventListener('click', () => {
        link.parentElement.classList.toggle('active');
    });
});

//для корректной работы формы
document.addEventListener("DOMContentLoaded", function () {
  const BtnForm = document.getElementById('submitBtn');
  const Email = document.getElementById('email');
  const Name = document.getElementById('name');
  const Msg = document.getElementById('message');

  BtnForm.addEventListener('click', (event) => {
    event.preventDefault(); // Предотвращаем отправку формы

    let Names = Name.value;
    let Emails = Email.value;
    let Msgs = Msg.value;

    if (isValid(Names) || !isValidEmail(Emails) || isValid(Msgs)) {
      alert("Пожалуйста, проверьте введенные данные");
    } else {
      window.location = '../3/index3.php';
    }
  });

  function isValid(value) {
    return value.trim() === "";
  }

  function isValidEmail(email) {
    // Простое регулярное выражение для проверки email-адреса
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
});
    </script>
</body>
</html>