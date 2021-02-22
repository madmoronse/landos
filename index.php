<?php
    require_once('function/teacher.php');
    $data = getMentors();

    list($item1, $item2) = array_chunk($data, ceil(count($data)/2));

    $option = array_merge($item1, $item2);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="icon" href="image/favicon.png" type="image/x-icon">
    <title>Школа дропшиппинга от OUTMAX</title>
</head>
<body>

<header>
    <div class="intro">
        <div class="left-content">
            <div class="intro-content">
                <div class="logo"><img src="image/logo.png" alt="логотип"></div>
                    <div class="intro-text">
                        <h1>Как запустить продажи кроссовок</h1>
                        <p>
                            <span class="yel-selector">удаленно</span> и получать прибыль на <br>
                            автомате <span class="yel-selector">без складов и сотрудников</span>
                        </p>
                        <h2> Вступай в школу дропшиппинга от bizoutmax</h2>
                        <a href="#form">
                            <button class="button">Записаться на бесплатное обучение</button>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <section class="graph">
        <div class="text-content">
            <h2>Продажи в оффлайне падают, а в онлайне растут</h2>
            <p>Примерно <span class="yel-selector">на 25% каждый месяц</span> благодаря кризису</p>
        </div>
        <div class="diagram">
            <img src="image/diagram.png" alt="">
            <p>Продавать онлайн сейчас выгодно как никогда</p>
        </div>
    </section>
</div>

<div class="container">
    <section class="about">
        <div class="text-content">
            <h2>поэтому bizoutmax запускает школу дропшиппинга</h2>
        </div>

        <div class="about-icon">
            <div class="about-item">
                <div class="icon">
                    <img src="image/icons/1.svg" alt="">
                </div>
                <div class="about-text">
                    <h2>Удобный формат обучения</h2>
                    <p>Вы можете начать обучение в любой день, из любой точки мира</p>
                </div>
            </div>

            <div class="about-item">
                <div class="icon">
                    <img src="image/icons/2.svg" alt="">
                </div>
                <div class="about-text">
                    <h2>Обучение с упором на практику</h2>
                    <p>60 практических заданий</p>
                </div>
            </div>

            <div class="about-item">
                <div class="icon">
                    <img src="image/icons/3.svg" alt="">
                </div>
                <div class="about-text">
                    <h2>Ваш личный <br> куратор</h2>
                    <p>Помощь в выполнении домашних заданий и ответы на вопросы</p>
                </div>
            </div>

            <div class="about-item">
                <div class="icon">
                    <img src="image/icons/4.svg" alt="">
                </div>
                <div class="about-text">
                    <h2>Обучение на вашем проекте</h2>
                    <p>Вы запустите свой продукт и получите первых клиентов уже в процессе обучения</p>
                </div>
            </div>

        </div>
    </section>
</div>

<div class="full-container mentors">
    <section class="teaching">
        <div class="text-content">
            <h2>Наши наставники</h2>
        </div>

    <div class="teachers">
        <div class="cont s--inactive">
        <div class="slider">
            <div class="item">
                    <div class="cont__inner">
                        <?php foreach ($item1 as $value) {?>
                        <div class="el">
                            <div class="el__overflow">
                                <div class="el__inner">
                                    <div class="el__preview-cont">
                                        <div class="teacher" style="background-image: url(image/teacher/<?php echo $value['image']; ?>.png);">
                                            <div class="teacher-name"><?php echo $value['name']; ?></div>
                                            <div class="years">С нами: <?php echo $value['time']; ?></div>
                                        </div>
                                    </div>

                                    <div class="el__content">
                                        <div class="modal-content">
                                            <span class="close" style="display: none;">&times;</span>
                                            <div class="left-photo" style="background-image: url(image/teacher/<?php echo $value['image']; ?>.png);"></div>

                                            <div class="content-teacher">
                                                <div class="content-teacher-head">
                                                  <h2><?php echo $value['name']; ?></h2>
                                                  С нами: <?php echo $value['time']; ?></p>
                                                </div>
                                                <div class="content-teacher-text">
                                                      <p><?php echo $value['description']; ?></p>
                                                </div>
                                                <div class="content-teacher-btn">
                                                    <a href="<?php echo $value['link']; ?>" target="_blank">
                                                        <button class="button present">Смотреть презентацию</button>
                                                    </a>
                                                    <a href="#form">
                                                        <button value="<?php echo $value['name']; ?>" class="button button-value">Записаться на бесплатное обучение</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                      <div class="el__close-btn"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
            </div>

            <div class="item">
                    <div class="cont__inner">

                        <?php foreach ($item2 as $value) {?>
                        <div class="el">
                            <div class="el__overflow">
                                <div class="el__inner">
                                    <div class="el__preview-cont">
                                        <div class="teacher" style="background-image: url(image/teacher/<?php echo $value['image']; ?>.png);">
                                            <div class="teacher-name"><?php echo $value['name']; ?></div>
                                            <div class="years">С нами: <?php echo $value['time']; ?></div>
                                        </div>
                                    </div>

                                    <div class="el__content">
                                        <div class="modal-content">
                                            <span class="close" style="display: none;">&times;</span>
                                            <div class="left-photo" style="background-image: url(image/teacher/<?php echo $value['image']; ?>.png);"></div>

                                            <div class="content-teacher">
                                                <div class="content-teacher-head">
                                                  <h2><?php echo $value['name']; ?></h2>
                                                  С нами: <?php echo $value['time']; ?></p>
                                                </div>
                                                <div class="content-teacher-text">
                                                      <p><?php echo $value['description']; ?></p>
                                                </div>
                                                <div class="content-teacher-btn">
                                                    <a href="<?php echo $value['link']; ?>" target="_blank">
                                                        <button class="button present">Смотреть презентацию</button>
                                                    </a>
                                                    <a href="#form">
                                                        <button value="<?php echo $value['name']; ?>" class="button button-value">Записаться на бесплатное обучение</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                      <div class="el__close-btn"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-dots">
       <span class="slider-dots_item" onclick="currentSlide(1)"></span>
       <span class="slider-dots_item" onclick="currentSlide(2)"></span>
    </div>
    </section>
</div>

<div class="full-container info">
    <section class="information">
        <div class="info-icon">
            <img src="image/icon/info.png" alt="">
        </div>
        <div class="info-text">
            <p>Школа <span class="yel-selector">«DROPSHIPPING. OUTMAX»</span> даст вам полное понимание функционала и возможностей продаж товара по всей России и СНГ.  Вы научитесь с нуля создавать привлекательные рекламные объявления, настраивать рекламу и приводить поток клиентов на ваши торговые площадки.</p>
        </div>
        <div class="button">
            <a href="#form">Записаться на бесплатное обучение</a>
        </div>
    </section>
</div>

<div class="container">
    <section class="lessons">
        <div class="lesson-item">
            <img src="image/comp.png" alt="">
        </div>
        <div class="lesson-item-text">
            <h2>Что будет на онлайн обучении?</h2>
            <ul>
                <li>Групповые и индивидуальные созвоны с наставниками</li>
                <li>Скрипты, пошаговые чек-листы, кейсы и другие материалы</li>
                <li>Разбор каналов продвижения и продаж</li>
                <li>Возможность в любое время задать вопрос лично у наставника</li>
            </ul>
            <p>Вы уже видели десятки вебинаров, на которых было много воды и вам постоянно пытались продать обучающий курс.</p>
                <br>
            <p>
                Мы отличаемся тем, что открыто делимся личным опытом, который вы сразу можете проверить на практике. Нет никаких секретов.
                Есть технология, которую вы можете реализовать самостоятельно или с нашей помощью, и получить результат в виде первых продаж.
            </p>
        </div>
    </section>
</div>

<div class="full-container forms">
    <section class="section-form">
        <div class="form items" id="form_body">
            <h2>Запись на бесплатное обучение</h2>
            <form action="#" method="POST" class="form_body" id="form"> 
                <input type="text" name="name" value="" class="name req" placeholder="Введите имя"><br>
                <input type="tel" id="phone" name="phone" value="" class="phone req" placeholder="Введите телефон"><br>
                <input type="text" name="email" value="" class="email req" placeholder="Введите email"><br>
                <select name="mentors" id="mentors" class="select-filter req">
                        <option value="">Выберите наставника</option>
                    <?php foreach ($option as $value) {?>
                        <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                    <?php } ?>
                </select>
                <button type="submit" class="button">Отправить заявку</button>
            </form>
        </div>
        <div class="men items">
            <img src="image/d96c87b0a3b29708ea4c4f12d42874f3.png" alt="">
        </div>
    </section>
</div>

<footer>
    <div class="container footer">
        <div class="wrap">
            <span class="phone"><h2>+7 (391) 98-98-395</h2></span>
            <img src="image/logo-footer.png" alt="">
            <h2>maxoutmax@mail.ru</h2>
        </div>
    </div>
</footer>
    <div id="popup" class="popup">
        <div class="popup_body">
            <div class="popup_content">
                <div class="popup_text">
                    Заявка отправлена
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
</body>
</html>