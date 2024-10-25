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
    <link rel="stylesheet" href="style2.css">
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
        <h1>Базовый курс: Выращивание домашних растений</h1>
        <p>Научитесь ухаживать за своими комнатными растениями</p>
    </section>  
    <main>
      <section class="tips">
        <h2>Полезные советы по уходу за домашними растениями:</h2>
        <ul class="flower-list">
          <li>Обеспечьте подходящую температуру: большинство цветов предпочитают температуру 13–24 °C.</li>
          <br>
          <li>Поддерживайте оптимальную влажность воздуха: летом и весной влажность выше 50 %, зимой воздух сухой из-за отопления.</li>
          <br>
          <li>Обеспечьте достаточное освещение: поставьте цветы у окна или используйте искусственное освещение.</li>
          <br>
          <li>Выберите подходящий грунт: почва должна быть питательной, воздухо- и водопроницаемой, со слабокислой или нейтральной реакцией (pH 5,5–6,5).</li>
          <br>
          <li>Подберите правильный горшок: он должен быть немного больше предыдущего и иметь дренажные отверстия.</li>
          <br>
          <li>Регулярно поливайте растения: следите за состоянием почвы и поливайте, когда она подсохнет.</li>
          <br>
          <li>Удобряйте растения: используйте специальные удобрения для домашних цветов согласно инструкции.</li>
          <br>
          <li>Пересаживайте растения по мере необходимости: молодые растения пересаживайте ежегодно, взрослые — каждые 2–3 года.</li>
          <br>
          <li>Обрабатывайте растения от вредителей и болезней: регулярно осматривайте растения и при необходимости применяйте средства защиты.</li>
        </ul>
      </section>
  
      <section class="videos">
        <h2>Обучающие видеоролики</h2>
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/7PYcE1zKiyc?si=cgLi_bt2ho4E6Yes" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/RHG8WriZFrs?si=3UgqJDYkMv0oBE0U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>
  
      <section class="articles">
        <h2>Статьи, которые могут Вам пригодиться:</h2>
        <article>
          <h3>Цветок "женское счастье": все об уходе, пересадке и размножении</h3>
          <p>Спатифиллум — это многолетнее вечнозеленое растение, которому приписывают способность улучшает энергетику в доме.    <a href="https://ria.ru/20201229/spatifillum-1591406914.html">Читать статью</a></p>
        </article>
        <article>
          <h3>Самые долгоживущие комнатные растения — 11 надёжных вариантов</h3>
          <p>Взгляните на нашу подборку распространенных комнатных растений, которые будут украшать ваш дом долгие годы.    <a href="https://www.botanichka.ru/article/samye-dolgozhivushhie-komnatnye-rasteniya-11-nadyozhnyh-variantov/">Читать статью</a></p>
        </article>
      </section>
      <div class="buttons-container">
      <a href="../index.php#courses" class="btn btn-primary">Вернуться к выбору курса</a>
      <a href="form.php" class="btn btn-primary">Перейти к углубленному курсу</a>
    </div>
    </main>
    <footer>
      <p>&copy; 2024 Flower Academy. Все права защищены.</p>
  </footer>
  <button id="scrollToTopBtn" class="scroll-to-top-btn">
      <i class="fas fa-chevron-up"></i>
  </button>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="js2.js"></script>
</body>
</html>