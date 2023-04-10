<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Title</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script type="module">
    import Swiper from "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js";

    const swiper1 = new Swiper(".swiper1", {
      slidesPerView: 4,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next1",
        prevEl: ".swiper-button-prev1",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 4,
        },
      },
    });

    const swiper2 = new Swiper(".swiper2", {
      slidesPerView: 4,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next2",
        prevEl: ".swiper-button-prev2",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 4,
        },
      },
    });

    const swiper3 = new Swiper(".swiper3", {
      slidesPerView: 2,
      loop: true,
      spaceBetween: 20,
      navigation: {
        nextEl: ".swiper-button-next3",
        prevEl: ".swiper-button-prev3",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 2,
        },
      },
    });
  </script>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container">
      <div class="header-wrapper">
        <div class="header-left-wrapper">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Logo" />
          </a>
          <nav>
            <ul>
              <li><a href="#">О Нас</a></li>
              <li><a href="#">Услуги</a></li>
              <li><a href="#">Мастера</a></li>
              <li><a href="#">Отзывы</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </nav>
        </div>
        <div class="header-right-wrapper">
          <a href="tel:995551001741"><img src="<?php echo get_template_directory_uri(); ?>/assets/call.svg" alt="Call" />
            +995 551 001 741</a>
          <button>RU</button>
        </div>
      </div>
      <div class="header-wrapper-mobile">
        <div class="header-block-mobile">
          <button class="header-menu">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/menu.svg" alt="Menu" />
          </button>
          <a href="#">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Logo" />
          </a>
        </div>
        <div class="header-block-mobile">
          <a href="tel:995551001741"><img src="<?php echo get_template_directory_uri(); ?>/assets/call-black.svg" alt="Call" />
            <p>+995 551 001 741</p>
          </a>
          <button class="language">RU</button>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section>
      <div class="container">
        <div class="section1-wrapper">
          <div class="instagram">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg" alt="Instagram" />
            </a>
            <span>I N S T A</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mouse.svg" alt="Scroll" />
          </div>
          <div class="wrapper-column">
            <p class="first-description">Наращивание волос в Батуми</p>
            <img class="first-image" src="<?php echo get_template_directory_uri(); ?>/assets/EXHAIR.svg" alt="EXHAIR" />
            <img class="second-image" src="<?php echo get_template_directory_uri(); ?>/assets/49169caf451c31bc3c232bf5fcc24bf8 1.png" alt="Image" />
            <p class="second-description">
              Воплощаем мечты о шикарных волосах<br />
              в реальность
            </p>
            <button class="primary-button">Получить консультацию</button>
            <p class="third-description">Батуми, ул. Луки Асатиани д. 39</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="section2-wrapper">
          <img src="<?php echo get_field("image", 6) ?>" alt="Studio" />
          <div class="wrapper-column">
            <div class="description-wrapper">
              <h2><?php echo get_field("title", 6) ?></h2>
              <p><?php echo get_field("description", 6) ?></p>
            </div>
            <button class="video-button">
              <p>Посмотрите видео о нашем салоне</p>
              <div class="wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/play.svg" alt="Play" />
              </div>
            </button>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="section3-wrapper">
        <div class="container">
          <div class="wrapper">
            <?php echo get_post_field("post_content", 9); ?>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="section4-wrapper">
          <h2>Услуги и цены</h2>
          <div class="wrapper">
            <ul class="tabs">
              <li href="#tab-1" class="bold-list-item active">
                <?php echo get_field("title", 19) ?>
              </li>
              <li href="#tab-2" class="default-list-item">
                <?php echo get_field("title", 29) ?>
              </li>
              <li href="#tab-3" class="default-list-item">
                Холодное испанское
              </li>
              <li href="#tab-4" class="default-list-item">Биолента</li>
              <li href="#tab-5" class="default-list-item">Голливудское</li>
              <li href="#tab-6" class="bold-list-item">Загущение</li>
              <li href="#tab-7" class="bold-list-item">Коррекция</li>
              <li href="#tab-8" class="bold-list-item">
                Снятие нарощенных волос
              </li>
            </ul>
            <div class="tabs-content">
              <div id="tab-1" class="tabs-content-item active">
                <div class="wrapper">
                  <h3><?php echo get_field("title", 19) ?></h3>
                  <p class="description">
                    <?php echo get_field("description", 19) ?>
                  </p>
                  <span><?php echo get_field("price", 19) ?></span>
                  <button class="primary-button"><?php echo get_field("button_text", 19) ?></button>
                </div>
                <img src="<?php echo get_field("image", 19) ?>" alt="Hair" />
              </div>
              <div id="tab-2" class="tabs-content-item">
                <div class="wrapper">
                  <h3><?php echo get_field("title", 29) ?></h3>
                  <p class="description">
                    <?php echo get_field("description", 29) ?>
                  </p>
                  <span><?php echo get_field("price", 29) ?></span>
                  <button class="primary-button"><?php echo get_field("button_text", 29) ?></button>
                </div>
                <img src="<?php echo get_field("image", 29) ?>" alt="Hair" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="swiper-anchor">
      <div class="container">
        <div class="section5-wrapper">
          <h2>Мастера</h2>
          <div class="swiper swiper1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/master-1.png" alt="Master-1" />
                <div class="swiper-slide-wrapper">
                  <h3>Евгения</h3>
                  <p>Топ-мастер</p>
                  <p>Опыт работы более 5 лет</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/master-2.png" alt="Master-2" />
                <div class="swiper-slide-wrapper">
                  <h3>Анастасия</h3>
                  <p>Топ-мастер</p>
                  <p>Опыт работы более 4 лет</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/master-1.png" alt="Master-3" />
                <div class="swiper-slide-wrapper">
                  <h3>Евгения</h3>
                  <p>Топ-мастер</p>
                  <p>Опыт работы более 5 лет</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/master-2.png" alt="Master-4" />
                <div class="swiper-slide-wrapper">
                  <h3>Анастасия</h3>
                  <p>Топ-мастер</p>
                  <p>Опыт работы более 4 лет</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/master-1.png" alt="Master-5" />
                <div class="swiper-slide-wrapper">
                  <h3>Евгения</h3>
                  <p>Топ-мастер</p>
                  <p>Опыт работы более 5 лет</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/master-2.png" alt="Master-6" />
                <div class="swiper-slide-wrapper">
                  <h3>Евгения</h3>
                  <p>Топ-мастер</p>
                  <p>Опыт работы более 5 лет</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-left.svg" alt="Left" />
      </div>
      <div class="swiper-button-next1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Right" />
      </div>
    </section>
    <section>
      <div class="section6-wrapper">
        <div class="container">
          <div class="wrapper">
            <div class="wrapper-column">
              <h2>Хочешь стать мастером?</h2>
              <p>Обучаю мастеров с нуля и влюбляю в свое дело</p>
            </div>
            <form class="small-form">
              <input type="text" placeholder="Имя" />
              <input type="text" placeholder="Телефон" />
              <button class="secondary-button">Отправить</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="swiper-anchor">
      <div class="container">
        <div class="section7-wrapper">
          <h2>Наши работы</h2>
          <div class="wrapper">
            <p>Больше работ смотрите в нашем <a href="#">Instagram</a></p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg" />
          </div>
          <div class="swiper swiper2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <video id="1">
                  <source src="<?php echo get_template_directory_uri(); ?>/assets/video-1.mp4" type="video/mp4" />
                  Your browser does not support the video tag.
                </video>
                <div id="video-controls" class="controls" data-state="hidden">
                  <button class="play">
                    <svg width="49" height="58" viewBox="0 0 49 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.8124 21.5834L10.2826 1.31354C9.29551 0.720201 8.17146 0.402952 7.02464 0.394043C5.22186 0.394043 3.49293 1.12169 2.21817 2.4169C0.943415 3.71212 0.227264 5.46881 0.227264 7.30052V50.8032C0.227494 52.0187 0.548192 53.212 1.15602 54.2589C1.76384 55.3059 2.63659 56.1683 3.68354 56.7565C4.73048 57.3447 5.91339 57.6372 7.10926 57.6036C8.30514 57.5699 9.47032 57.2115 10.4837 56.5654L45.0537 34.3747C46.1287 33.6912 47.011 32.7364 47.6147 31.6034C48.2184 30.4704 48.5229 29.1978 48.4986 27.9096C48.4743 26.6215 48.122 25.3617 47.476 24.253C46.83 23.1443 45.9123 22.2246 44.8124 21.5834Z" fill="white" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="swiper-slide">
                <video id="2">
                  <source src="<?php echo get_template_directory_uri(); ?>/assets/video-1.mp4" type="video/mp4" />
                  Your browser does not support the video tag.
                </video>
                <div id="video-controls" class="controls" data-state="hidden">
                  <button class="play">
                    <svg width="49" height="58" viewBox="0 0 49 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.8124 21.5834L10.2826 1.31354C9.29551 0.720201 8.17146 0.402952 7.02464 0.394043C5.22186 0.394043 3.49293 1.12169 2.21817 2.4169C0.943415 3.71212 0.227264 5.46881 0.227264 7.30052V50.8032C0.227494 52.0187 0.548192 53.212 1.15602 54.2589C1.76384 55.3059 2.63659 56.1683 3.68354 56.7565C4.73048 57.3447 5.91339 57.6372 7.10926 57.6036C8.30514 57.5699 9.47032 57.2115 10.4837 56.5654L45.0537 34.3747C46.1287 33.6912 47.011 32.7364 47.6147 31.6034C48.2184 30.4704 48.5229 29.1978 48.4986 27.9096C48.4743 26.6215 48.122 25.3617 47.476 24.253C46.83 23.1443 45.9123 22.2246 44.8124 21.5834Z" fill="white" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="swiper-slide">
                <video id="3">
                  <source src="<?php echo get_template_directory_uri(); ?>/assets/video-1.mp4" type="video/mp4" />
                  Your browser does not support the video tag.
                </video>
                <div id="video-controls" class="controls" data-state="hidden">
                  <button class="play">
                    <svg width="49" height="58" viewBox="0 0 49 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.8124 21.5834L10.2826 1.31354C9.29551 0.720201 8.17146 0.402952 7.02464 0.394043C5.22186 0.394043 3.49293 1.12169 2.21817 2.4169C0.943415 3.71212 0.227264 5.46881 0.227264 7.30052V50.8032C0.227494 52.0187 0.548192 53.212 1.15602 54.2589C1.76384 55.3059 2.63659 56.1683 3.68354 56.7565C4.73048 57.3447 5.91339 57.6372 7.10926 57.6036C8.30514 57.5699 9.47032 57.2115 10.4837 56.5654L45.0537 34.3747C46.1287 33.6912 47.011 32.7364 47.6147 31.6034C48.2184 30.4704 48.5229 29.1978 48.4986 27.9096C48.4743 26.6215 48.122 25.3617 47.476 24.253C46.83 23.1443 45.9123 22.2246 44.8124 21.5834Z" fill="white" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="swiper-slide">
                <video id="4">
                  <source src="<?php echo get_template_directory_uri(); ?>/assets/video-1.mp4" type="video/mp4" />
                  Your browser does not support the video tag.
                </video>
                <div id="video-controls" class="controls" data-state="hidden">
                  <button class="play">
                    <svg width="49" height="58" viewBox="0 0 49 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.8124 21.5834L10.2826 1.31354C9.29551 0.720201 8.17146 0.402952 7.02464 0.394043C5.22186 0.394043 3.49293 1.12169 2.21817 2.4169C0.943415 3.71212 0.227264 5.46881 0.227264 7.30052V50.8032C0.227494 52.0187 0.548192 53.212 1.15602 54.2589C1.76384 55.3059 2.63659 56.1683 3.68354 56.7565C4.73048 57.3447 5.91339 57.6372 7.10926 57.6036C8.30514 57.5699 9.47032 57.2115 10.4837 56.5654L45.0537 34.3747C46.1287 33.6912 47.011 32.7364 47.6147 31.6034C48.2184 30.4704 48.5229 29.1978 48.4986 27.9096C48.4743 26.6215 48.122 25.3617 47.476 24.253C46.83 23.1443 45.9123 22.2246 44.8124 21.5834Z" fill="white" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="swiper-slide">
                <video id="5">
                  <source src="<?php echo get_template_directory_uri(); ?>/assets/video-1.mp4" type="video/mp4" />
                  Your browser does not support the video tag.
                </video>
                <div id="video-controls" class="controls" data-state="hidden">
                  <button class="play">
                    <svg width="49" height="58" viewBox="0 0 49 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.8124 21.5834L10.2826 1.31354C9.29551 0.720201 8.17146 0.402952 7.02464 0.394043C5.22186 0.394043 3.49293 1.12169 2.21817 2.4169C0.943415 3.71212 0.227264 5.46881 0.227264 7.30052V50.8032C0.227494 52.0187 0.548192 53.212 1.15602 54.2589C1.76384 55.3059 2.63659 56.1683 3.68354 56.7565C4.73048 57.3447 5.91339 57.6372 7.10926 57.6036C8.30514 57.5699 9.47032 57.2115 10.4837 56.5654L45.0537 34.3747C46.1287 33.6912 47.011 32.7364 47.6147 31.6034C48.2184 30.4704 48.5229 29.1978 48.4986 27.9096C48.4743 26.6215 48.122 25.3617 47.476 24.253C46.83 23.1443 45.9123 22.2246 44.8124 21.5834Z" fill="white" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="swiper-slide">
                <video id="6">
                  <source src="<?php echo get_template_directory_uri(); ?>/assets/video-1.mp4" type="video/mp4" />
                  Your browser does not support the video tag.
                </video>
                <div id="video-controls" class="controls" data-state="hidden">
                  <button class="play">
                    <svg width="49" height="58" viewBox="0 0 49 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.8124 21.5834L10.2826 1.31354C9.29551 0.720201 8.17146 0.402952 7.02464 0.394043C5.22186 0.394043 3.49293 1.12169 2.21817 2.4169C0.943415 3.71212 0.227264 5.46881 0.227264 7.30052V50.8032C0.227494 52.0187 0.548192 53.212 1.15602 54.2589C1.76384 55.3059 2.63659 56.1683 3.68354 56.7565C4.73048 57.3447 5.91339 57.6372 7.10926 57.6036C8.30514 57.5699 9.47032 57.2115 10.4837 56.5654L45.0537 34.3747C46.1287 33.6912 47.011 32.7364 47.6147 31.6034C48.2184 30.4704 48.5229 29.1978 48.4986 27.9096C48.4743 26.6215 48.122 25.3617 47.476 24.253C46.83 23.1443 45.9123 22.2246 44.8124 21.5834Z" fill="white" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-left.svg" alt="Left" />
      </div>
      <div class="swiper-button-next2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Right" />
      </div>
    </section>
    <section class="swiper-anchor">
      <div class="container">
        <div class="section8-wrapper">
          <h2>Что говорят о нашей работе</h2>
          <div class="swiper swiper3">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="swiper-slide-wrapper">
                  <div class="wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/avatar-1.png" alt="Avatar" />
                    <span>Елена</span>
                  </div>
                  <p>
                    Женечка, спешу поблагодарить тебя за свои прекрасные
                    волосы!) Я чувствую себя настоящей принцессой благодаря
                    тебе) все никак не могу оторваться от зеркала не первый
                    раз наращиваю у тебя волосы и совершенно не жалею) и
                    видишь, получается глупости говорят, что свои волосы очень
                    портятся.. я по своим такого не заметила) или может те,
                    кто говорят, ухаживать за собой и волосами не умеют)))
                    короче, спасибо тебе, моя волшебница!) До скорой
                    встречи)))
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-slide-wrapper">
                  <div class="wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/avatar-2.png" alt="Avatar" />
                    <span>Татьяна</span>
                  </div>
                  <p>
                    Наращивала я в первый раз) Длинные волосы - это было моей
                    мечтой уже давольно таки давно))) Во-первых Евгения
                    отлично подобрала цвет и текстуру волос, что бы они не
                    отличались от моих) Во-вторых качество работы просто на
                    мировом уровне))) В-третьих после первого мытья все
                    отлично)) Женечка, спасибо огромное за волосики)) Они
                    просто нереальные)) Никто даже не замечает, что волосы
                    нарощенные)Спасибо тебе!) Ты чудо мастер
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-slide-wrapper">
                  <div class="wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/avatar-1.png" alt="Avatar" />
                    <span>Елена</span>
                  </div>
                  <p>
                    Женечка, спешу поблагодарить тебя за свои прекрасные
                    волосы!) Я чувствую себя настоящей принцессой благодаря
                    тебе) все никак не могу оторваться от зеркала не первый
                    раз наращиваю у тебя волосы и совершенно не жалею) и
                    видишь, получается глупости говорят, что свои волосы очень
                    портятся.. я по своим такого не заметила) или может те,
                    кто говорят, ухаживать за собой и волосами не умеют)))
                    короче, спасибо тебе, моя волшебница!) До скорой
                    встречи)))
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-slide-wrapper">
                  <div class="wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/avatar-2.png" alt="Avatar" />
                    <span>Татьяна</span>
                  </div>
                  <p>
                    Наращивала я в первый раз) Длинные волосы - это было моей
                    мечтой уже давольно таки давно))) Во-первых Евгения
                    отлично подобрала цвет и текстуру волос, что бы они не
                    отличались от моих) Во-вторых качество работы просто на
                    мировом уровне))) В-третьих после первого мытья все
                    отлично)) Женечка, спасибо огромное за волосики)) Они
                    просто нереальные)) Никто даже не замечает, что волосы
                    нарощенные)Спасибо тебе!) Ты чудо мастер
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-left.svg" alt="Left" />
      </div>
      <div class="swiper-button-next3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Right" />
      </div>
    </section>
    <section>
      <div class="container">
        <div class="section9-wrapper">
          <div class="content">
            <h2>Контакты</h2>
            <div class="content-wrapper">
              <div class="wrapper">
                <div>
                  <span>Адрес</span>
                  <p>Батуми, ул. Луки Асатиани д. 39</p>
                </div>
                <div>
                  <span>Время работы</span>
                  <p>пн-вс: 10:00 - 21:00</p>
                </div>
              </div>
              <div class="wrapper">
                <div>
                  <span>Телефон:</span>
                  <a href="tel:995551001741">+995 551 001 741</a>
                </div>
              </div>
            </div>
            <button class="primary-button" id="appointment">
              Онлайн запись
            </button>
          </div>
          <div class="map"></div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container">
      <div class="footer-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/SOUL.svg" alt="Soul" />
        <ul>
          <li>
            <a href="#">О нас</a>
          </li>
          <li>
            <a href="#">Услуги</a>
          </li>
          <li>
            <a href="#">Мастера</a>
          </li>
          <li>
            <a href="#">Отзывы</a>
          </li>
          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
        <p>© Exhair Batumi 2023</p>
      </div>
    </div>
  </footer>
</body>

</html>