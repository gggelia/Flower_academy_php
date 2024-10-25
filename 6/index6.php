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
    <link rel="stylesheet" href="style6.css">
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
        <h1>Базовый курс: Композиции из сухоцветов</h1>
        <p>Научитесь создавать красивые и долговечные композиции из сухоцветов</p>
    </section>  
    <main>
      <section class="tips">
        <h2>Базовые советы для новичков в сборке букетов из сухоцветов:</h2>
        <ul class="flower-list">
          <li>Собирайте растения в сухую погоду в первой половине дня.</li>
          <br>
          <li>Выбирайте неповреждённые и красивые экземпляры.</li>
          <br>
          <li>Используйте естественный метод сушки на воздухе или ускоренную сушку в микроволновке (для крепких бутонов).</li>
          <br>
          <li>Комбинируйте различные виды сухоцветов и природного декора.</li>
          <br>
          <li>Формируйте букеты параллельным или спиральным методом, перевязывая композицию натуральными материалами.</li>
          <br>
          <li>Начинайте с маленьких монобукетов, затем переходите к более сложным композициям.</li>
          <br>
          <li>Позаботьтесь об оптимальной влажности воздуха в помещении, чтобы сухоцветы дольше сохраняли свой вид.</li>
          <br>
          <li>Учитывайте естественное освещение, избегайте прямых солнечных лучей, чтобы букет не выцветал.</li>
          <br>
          <li>Соблюдайте меры безопасности, не размещайте букет рядом с источниками тепла или открытым огнём.</li>
          <br>
          <li>Оцените размер помещения и другие элементы декора перед составлением букета, чтобы он гармонично вписался в интерьер.</li>
        </ul>
      </section>
  
      <section class="videos">
        <h2>Обучающие видеоролики</h2>
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/vEBmxeEAlm8?si=oycX_ZhRf4Yjem6d" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/lbS5t3Z0LkM?si=n9zrLsrx4Jevzg-R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>
  
      <section class="articles">
        <h2>Статьи, которые могут Вам пригодиться:</h2>
        <article>
          <h3>Украшаем квартиру сухоцветами: советы, идеи, примеры</h3>
          <p>В этой статье мы расскажем о видах сухоцветов, поделимся простыми советами для новичков и покажем стильные интерьерные решения. <a href="https://realty.ya.ru/journal/post/ukrashaem-kvartiru-sukhotsvetami-sovety-i-referensy/"> Читать статью</a></p>
        </article>
        <article>
          <h3>Как собрать букет из сухоцветов</h3>
          <p>В статье мы поговорим о том, как собрать букет из сухоцветов, чтобы он получился гармоничным и долговечным.<a href="https://zveroboy-flowers.ru/kak-sobrat-buket-iz-suhotsvetov"> Читать статью</a></p>
        </article>
      </section>
      <div class="buttons-container">
        <a href="../index.php#courses" class="btn btn-primary">Вернуться к выбору курса</a>
        <a href="form3.php" class="btn btn-primary">Перейти к углубленному курсу</a>
      </div>
    </main>
    <footer>
      <p>&copy; 2024 Flower Academy. Все права защищены.</p>
  </footer>
  <button id="scrollToTopBtn" class="scroll-to-top-btn">
      <i class="fas fa-chevron-up"></i>
  </button>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="js6.js"></script>
</body>
</html>