<?php
session_start();

// Проверяем, авторизован ли пользователь
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Пользователь авторизован, скрываем кнопку авторизации
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Заказы – Sova</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="wrapper">
      <header class="header-page">
        <div class="container">
          <div class="header-page__top">
            <div class="header-page__left-block">
              <a href="#" class="header-page__left-city">Москва</a>
              <a href="tel:+78001000750" class="header-page__left-phone"
                >8 800 1000 750</a
              >
            </div>
            <a href="index.php" class="header-page__logo">SOVÁ</a>
            <div class="header-page__right-block">
              <a href="dec-order.php" class="header-page__right-decor"
                >Украшения на заказ</a
              >
              <div class="header-page__right-block_account">
                <?php if($isLoggedIn): ?>
                <a href="favourites.php" class="header-page__right-favourite"
                  ><svg
                    width="20"
                    height="19"
                    viewBox="0 0 20 19"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M10.1 15.55L10 15.65L9.89 15.55C5.14 11.24 2 8.39 2 5.5C2 3.5 3.5 2 5.5 2C7.04 2 8.54 3 9.07 4.36H10.93C11.46 3 12.96 2 14.5 2C16.5 2 18 3.5 18 5.5C18 8.39 14.86 11.24 10.1 15.55ZM14.5 0C12.76 0 11.09 0.81 10 2.08C8.91 0.81 7.24 0 5.5 0C2.42 0 0 2.41 0 5.5C0 9.27 3.4 12.36 8.55 17.03L10 18.35L11.45 17.03C16.6 12.36 20 9.27 20 5.5C20 2.41 17.58 0 14.5 0Z"
                      fill="black"
                      fill-opacity="0.9"
                    />
                  </svg>
                </a>
                <a href="basket.php" class="header-page__right-basket"
                  ><svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H1.768C2.23533 0.000182706 2.68784 0.164012 3.04697 0.463045C3.4061 0.762078 3.64918 1.17743 3.734 1.637L3.986 3H17.743C18.0439 2.99996 18.341 3.06782 18.612 3.19852C18.8831 3.32923 19.1211 3.51941 19.3084 3.7549C19.4958 3.99039 19.6276 4.26512 19.694 4.55861C19.7604 4.8521 19.7597 5.1568 19.692 5.45L17.846 13.45C17.7442 13.8908 17.4959 14.2841 17.1418 14.5656C16.7876 14.8472 16.3484 15.0003 15.896 15H5.019C4.77904 15.0044 4.54549 14.9224 4.36098 14.769C4.17647 14.6155 4.05332 14.4008 4.014 14.164L1.768 2H1C0.734784 2 0.48043 1.89464 0.292893 1.70711C0.105357 1.51957 0 1.26522 0 1ZM5.832 13H15.897L17.743 5H4.355L5.832 13ZM6 16C5.46957 16 4.96086 16.2107 4.58579 16.5858C4.21071 16.9609 4 17.4696 4 18C4 18.5304 4.21071 19.0391 4.58579 19.4142C4.96086 19.7893 5.46957 20 6 20C6.53043 20 7.03914 19.7893 7.41421 19.4142C7.78929 19.0391 8 18.5304 8 18C8 17.4696 7.78929 16.9609 7.41421 16.5858C7.03914 16.2107 6.53043 16 6 16ZM16 16C15.4696 16 14.9609 16.2107 14.5858 16.5858C14.2107 16.9609 14 17.4696 14 18C14 18.5304 14.2107 19.0391 14.5858 19.4142C14.9609 19.7893 15.4696 20 16 20C16.5304 20 17.0391 19.7893 17.4142 19.4142C17.7893 19.0391 18 18.5304 18 18C18 17.4696 17.7893 16.9609 17.4142 16.5858C17.0391 16.2107 16.5304 16 16 16Z"
                      fill="black"
                      fill-opacity="0.9"
                    />
                  </svg>
                </a>
                <a href="profile.php" class="header-page__right-account">
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9 0C11.762 0 14 2.238 14 5C14 7.762 11.762 10 9 10C6.238 10 4 7.762 4 5C4 2.238 6.238 0 9 0ZM9 2C7.35 2 6 3.35 6 5C6 6.65 7.35 8 9 8C10.65 8 12 6.65 12 5C12 3.35 10.65 2 9 2ZM18 15V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V15C0 12.33 6.33 11 9 11C11.67 11 18 12.33 18 15ZM9 12.9C6.03 12.9 1.9 14.36 1.9 15V16.1H16.1V15C16.1 14.36 11.97 12.9 9 12.9Z"
                      fill="black"
                      fill-opacity="0.9"
                    />
                  </svg>
                </a>
            <?php else: ?>
                <a href="preauth.php" class="auth__btn-page">Авторизация</a>
            <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="header-page__second">
            <div class="header-page__second-left">
              <a href="catalog.php" class="header-page__second-catalog"
                >КАТАЛОГ</a
              >
              <a href="index.php#collections" class="header-page__second-collection">КОЛЛЕКЦИИ</a>
            </div>
            <div class="header-page__second-right">
              <a href="premium.php" class="header-page__second-premium"
                >PREMIUM</a
              >
              <a href="#" class="header-page__second-link">Акции</a>
              <a href="privilege.php" class="header-page__second-link">Подарочная карта</a>
            </div>
          </div>
        </div>
      </header>
      <main class="main">
        <div class="orders__wrapper">
          <h2 class="orders__title">Заказы</h2>
          <ul class="orders__inner">
          <?php
          // Замените параметры подключения к вашей базе данных
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "sova";

          // Создаем подключение к базе данных
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Проверяем соединение
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Id авторизованного пользователя
          $userId = $_SESSION['userId']; // Замените этот ID на реальный ID пользователя

          // Выбираем избранные товары для данного пользователя
          $sql = "SELECT * FROM orders WHERE userId = $userId;";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // Выводим каждый избранный товар
              while($row = $result->fetch_assoc()) {
                $considerationClass = ($row["consideration"] == "true") ? "orders__consideration--accept" : "orders__consideration--null";
                echo '
                <li class="orders__item">
                    <div class="orders-good">
                        <img class="orders__good-img" src="'.$row["goodImage"].'" alt="">
                        <div class="orders__good-info">
                            <h2 class="orders__good-title">'.$row["goodName"].'</h2>
                            <p class="orders__good-price">'.$row["goodPrice"].' р.</p>
                            <div class="basket__inner-size basket__inner-size--orders">'.$row["goodSize"].'</div>
                            <p class="orders__good-count">Количество: '.$row["goodCount"].'</p>
                        </div>
                        <div class="orders-controls">
                            <p class="orders__consideration '.$considerationClass.'">'.($row["consideration"] == "true" ? "Принято" : "На рассмотрении").'</p>
                            <a href="#" class="orders-controls_dismiss" data-id="'.$row["id"].'">Отменить</a>
                        </div>
                    </li>';
            }
          } else {
              echo "Пользователь не имеет заказов.";
          }

          $conn->close();
          ?>
          </ul>
        </div>
      </main>
      <footer class="footer-page">
        <div class="container">
          <div class="footer-page__inner">
            <div class="footer-page__copy">
              <a href="tel:+78007710105 " class="footer-page__copy-phone"
                >8 800 771 01 05 </a
              >
              <span class="footer-page__copy-copyright">© 2024 SOVÁ</span>
            </div>
            <ul class="footer-page__socials">
              <li class="footer-page__socials-item">
                <a href="#" class="footer-page__socials-link"
                  ><img src="img/icons/socials/tg.svg" alt="" />
                </a>
              </li>
              <li class="footer-page__socials-item">
                <a href="#" class="footer-page__socials-link"
                  ><img src="img/icons/socials/whatsapp.svg" alt="" />
                </a>
              </li>
              <li class="footer-page__socials-item">
                <a href="#" class="footer-page__socials-link"
                  ><img src="img/icons/socials/vk.svg" alt="" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </body>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="js/del-user-order.js"></script>
  <script src="js/main.js"></script>
</html>





















      
            <!-- <li class="orders__item">
              <div class="orders-good">
                <img class="orders__good-img" src="img/brilliant-page/11.png" alt="">
                <div class="orders__good-info">
                  <h2 class="orders__good-title">Что-то там из брилланта</h2>
                  <p class="orders__good-price">30000 р.</p>
                  <div class="basket__inner-size basket__inner-size--orders">20</div>
                  <p class="orders__good-count">Количество: 2</p>
                </div>
              <div class="orders-controls">
                <p class="orders__consideration orders__consideration--null">На рассмотрении</p>
                <a href="#" class="orders-controls_dismiss" name="'.$row["id"].'">Отменить</a>
              </div>
            </li>
            <li class="orders__item">
              <div class="orders-good">
                <img class="orders__good-img" src="img/brilliant-page/11.png" alt="">
                <div class="orders__good-info">
                  <h2 class="orders__good-title">Что-то там из брилланта</h2>
                  <p class="orders__good-price">30000 р.</p>
                  <div class="basket__inner-size basket__inner-size--orders">20</div>
                  <p class="orders__good-count">Количество: 2</p>
                </div>
              <div class="orders-controls">
                <p class="orders__consideration orders__consideration--null">На рассмотрении</p>
                <a href="#" class="orders-controls_dismiss" name="'.$row["id"].'">Отменить</a>
              </div>
            </li>
            <li class="orders__item">
              <div class="orders-good">
                <img class="orders__good-img" src="img/brilliant-page/11.png" alt="">
                <div class="orders__good-info">
                  <h2 class="orders__good-title">Что-то там из брилланта</h2>
                  <p class="orders__good-price">30000 р.</p>
                  <div class="basket__inner-size basket__inner-size--orders">20</div>
                  <p class="orders__good-count">Количество: 2</p>
                </div>
              <div class="orders-controls">
                <p class="orders__consideration orders__consideration--null">На рассмотрении</p>
                <a href="#" class="orders-controls_dismiss" name="'.$row["id"].'">Отменить</a>
              </div>
            </li>
            <li class="orders__item">
              <div class="orders-good">
                <img class="orders__good-img" src="img/brilliant-page/11.png" alt="">
                <div class="orders__good-info">
                  <h2 class="orders__good-title">Что-то там из брилланта</h2>
                  <p class="orders__good-price">30000 р.</p>
                  <div class="basket__inner-size basket__inner-size--orders">20</div>
                  <p class="orders__good-count">Количество: 2</p>
                </div>
              <div class="orders-controls">
                <p class="orders__consideration orders__consideration--accept">Принят</p>
                <a href="#" class="orders-controls_dismiss" name="'.$row["id"].'">Отменить</a>
              </div>
            </li>
            <li class="orders__item">
              <div class="orders-good">
                <img class="orders__good-img" src="img/brilliant-page/11.png" alt="">
                <div class="orders__good-info">
                  <h2 class="orders__good-title">Что-то там из брилланта</h2>
                  <p class="orders__good-price">30000 р.</p>
                  <div class="basket__inner-size basket__inner-size--orders">20</div>
                  <p class="orders__good-count">Количество: 2</p>
                </div>
              <div class="orders-controls">
                <p class="orders__consideration orders__consideration--null">На рассмотрении</p>
                <a href="#" class="orders-controls_dismiss" name="'.$row["id"].'">Отменить</a>
              </div>
            </li>
            <li class="orders__item">
              <div class="orders-good">
                <img class="orders__good-img" src="img/brilliant-page/11.png" alt="">
                <div class="orders__good-info">
                  <h2 class="orders__good-title">Что-то там из брилланта</h2>
                  <p class="orders__good-price">30000 р.</p>
                  <div class="basket__inner-size basket__inner-size--orders">20</div>
                  <p class="orders__good-count">Количество: 2</p>
                </div>
              <div class="orders-controls">
                <p class="orders__consideration orders__consideration--null">На рассмотрении</p>
                <a href="#" class="orders-controls_dismiss" name="'.$row["id"].'">Отменить</a>
              </div>
            </li>
            <li class="orders__item">
              <div class="orders-good">
                <img class="orders__good-img" src="img/brilliant-page/11.png" alt="">
                <div class="orders__good-info">
                  <h2 class="orders__good-title">Что-то там из брилланта</h2>
                  <p class="orders__good-price">30000 р.</p>
                  <div class="basket__inner-size basket__inner-size--orders">20</div>
                  <p class="orders__good-count">Количество: 2</p>
                </div>
              <div class="orders-controls">
                <p class="orders__consideration orders__consideration--null">На рассмотрении</p>
                <a href="#" class="orders-controls_dismiss" name="'.$row["id"].'">Отменить</a>
              </div>
            </li>
           -->
