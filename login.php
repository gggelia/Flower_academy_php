<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Авторизация</title>
  <link rel="shortcut icon" href="img/FA.png">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.php">Flower Academy</a>
            </div>
            <nav>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php#about">О нас</a></li>
                    <li><a href="index.php#instructors">Преподаватели</a></li>
                    <li><a href="index.php#courses">Курсы</a></li>
                    <li><a href="index.php#reviews">Отзывы</a></li>
                    <li><a href="index.php#contact">Обратная связь</a></li>
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
    <main style="display: flex; flex-direction: column; min-height: 76vh;">
        <div class="container">
        <h2>Авторизация</h2>
       <form method="post">
           <input type="text" name="username" placeholder="Логин" required>
           <input type="password" name="password" placeholder="Пароль" required>
           <button type="submit">Войти</button>
           <?php
            include './connect.php';

            session_start();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php"); // Перенаправляем на личный кабинет
            exit();
            } else {
            echo "Неверный логин или пароль!";
        }
        }
            ?>
        </form>
          <p>Нет аккаунта? <a href="reg.php">Зарегистрироваться</a></p>
        </div>
      </main>
    <footer style="margin-top: auto;">
        <p>&copy; 2024 Flower Academy. Все права защищены.</p>
    </footer>
    <button id="scrollToTopBtn" class="scroll-to-top-btn">
        <i class="fas fa-chevron-up"></i>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
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

    </script>
</body>
</html>