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
    <link rel="stylesheet" href="style4.css">
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
        <h1>Базовый курс: Составление букетов</h1>
        <p>Научитесь создавать красивые и гармоничные букеты</p>
    </section>  
    <main>
      <section class="tips">
        <h2>Основные термины, используемые во флористике:</h2>
        <ul class="flower-list">
          <li><strong>Секатор</strong> — инструмент для обрезки стеблей цветов и других растений.</li>
          <br>
          <li><strong>Ножницы</strong> — инструмент для резки лент, бумаги и других материалов.</li>
          <br>
          <li><strong>Флористический нож</strong> — инструмент для обработки и подготовки растений.  </li>
          <br>
          <li><strong>Термопистолет</strong> — инструмент для склеивания элементов композиции.</li>
          <br>
          <li><strong>Проволока</strong> — материал для крепления и фиксации элементов букета.</li>
          <br>
          <li><strong>Степлер</strong> — инструмент для закрепления лент и других декоративных элементов.</li>
          <br>
          <li><strong>Цветовая гамма</strong> — система подбора цветов и оттенков для создания гармоничных композиций.</li>
          <br>
          <li><strong>Флористическая губка</strong> — основа для живых цветов, позволяющая им дольше сохранять свежесть.</li>
          <br>
          <li><strong>Тейп-лента</strong> — материал для обмотки стеблей, маскировки проволоки и упаковки букета.</li>
          <br>
          <li><strong>Гибкая проволока</strong> — материал для изготовления дополнительного декора и крепления композиции.</li>
          <br>
          <li><strong>Техническая упаковка</strong> — материал для транспортировки и защиты букета от повреждений.</li>
        </ul>
      </section>
  
      <section class="videos">
        <h2>Обучающие видеоролики</h2>
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/t7qlrjBj3rQ?si=3-GfpR_trzMwT2pw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/drisNyogaus?si=PUyLZCuAGaE7Whs9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>
  
      <section class="articles">
        <h2>Статьи, которые могут Вам пригодиться:</h2>
        <article>
          <h3>Флористика для начинающих</h3>
          <p>Что нужно знать начинающему флористу: правила и советы по флористике с нуля. <a href="https://микрос.рф/about/articles/floristika-dlya-nachinayushchikh/">Читать статью</a></p>
        </article>
        <article>
          <h3>Стили флористики</h3>
          <p>Ключевые тренды современной флористики. <a href="https://zveroboy-flowers.ru/stili-floristiki">Читать статью</a></p>
        </article>
      </section>
      <div class="buttons-container">
      <a href="../index.php#courses" class="btn btn-primary">Вернуться к выбору курса</a>
      <a href="form2.php" class="btn btn-primary">Перейти к углубленному курсу</a>
    </div>
  </main>
    <footer>
      <p>&copy; 2024 Flower Academy. Все права защищены.</p>
  </footer>
  <button id="scrollToTopBtn" class="scroll-to-top-btn">
      <i class="fas fa-chevron-up"></i>
  </button>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="js4.js"></script>
</body>
</html>