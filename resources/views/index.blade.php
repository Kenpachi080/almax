<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo tegs -->
    <meta name="description" content="Транспортно - логистическая
    компания">
    <meta name="keywords" content="Логистика, Перевозки">
    <meta name="author" content="susha12">
    <title>Almax Asia</title>
    <!-- import css styles -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!-- вес саит  -->
<div class="main_content">
    <!-- форма отправки -->
    <div class="Contact_section">
        <div class="box_Contact">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="close_btn"
                 width="30" height="30" viewBox="0 0 24 24" style=" fill:rgba(132, 132, 132, 1);">
                <path
                    d="M 4.9902344 3.9902344 A 1.0001 1.0001 0 0 0 4.2929688 5.7070312 L 10.585938 12 L 4.2929688 18.292969 A 1.0001 1.0001 0 1 0 5.7070312 19.707031 L 12 13.414062 L 18.292969 19.707031 A 1.0001 1.0001 0 1 0 19.707031 18.292969 L 13.414062 12 L 19.707031 5.7070312 A 1.0001 1.0001 0 0 0 18.980469 3.9902344 A 1.0001 1.0001 0 0 0 18.292969 4.2929688 L 12 10.585938 L 5.7070312 4.2929688 A 1.0001 1.0001 0 0 0 4.9902344 3.9902344 z"></path>
            </svg>
            <div class="box_Contact__content">
                <div class="writhe_contents">
                    <div class="box_Contact__title">Оставьте заявку</div>
                    <p class="box_Contact__text">Наши менеджеры свяжутся
                        с Вами в ближайшее время</p>
                    <div class="box_Contact__inputs">
                        <div class="inputs">
                            <form action="#">
                                <input type="text" id="fname" name="fname" placeholder="Ваше Имя">
                                <input type="tel" name="tel" id="lname" placeholder="Номер телефона">
                            </form>
                        </div>
                        <div class="btn_send">Связаться</div>
                    </div>
                </div>
                <div class="send_contents">
                    <h2 class="send_content__title">Поздравляем!</h2>
                    <p class="send_content_text">Ваша заявка успешно отправлена</p>
                    <div class="send_content_btnHome">Вернуться на главную</div>
                </div>
            </div>
        </div>
    </div>

    <!-- шапка сайта -->
    <header>
        <img src="{{ \Illuminate\Support\Facades\Storage::url($main->image) }}" alt="headerBackground" id="header"
             class="header_background">
        <div class="header_box">
            <div class="nav_bar">
                <a href="#"><img src="img/logo.png" alt="logo.png" class="logo"></a>
                <ul class="nav_list">
                    <li><a href="#header">Главная</a></li>
                    <li><a href="#AboutCompany">О компании</a></li>
                    <li><a href="#Equipment">Оборудование</a></li>
                    <li><a href="#AboutCompany">Проектная логистика</a></li>
                    <li><a href="#IndustrySolutions" id="link_five">Отраслевые решения</a></li>
                    <li class="li_btn"><a href="#" class="btn">Связаться</a></li>
                </ul>
                <div class="nav_burger">
                    <div class="burger_img">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                             viewBox="0 0 50 50" style="fill:rgb(255, 255, 255);">
                            <path
                                d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"></path>
                        </svg>
                    </div>
                    <div class="burger_img__close">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                             viewBox="0 0 48 48" style=" fill:red;">
                            <path fill="#F44336" d="M21.5 4.5H26.501V43.5H21.5z"
                                  transform="rotate(45.001 24 24)"></path>
                            <path fill="#F44336" d="M21.5 4.5H26.5V43.501H21.5z"
                                  transform="rotate(135.008 24 24)"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- header_title -->
        <div class="header_title">
            <h1>{{ $main->title }}</h1>
            <div class="header_title__btns">
                <a href="#AboutCompany" class="header_btn__one">Подробнее</a>
                <a href="#" class="header_btn__two">Связаться</a>
            </div>
        </div>
        <!-- Transport and services -->
        <div class="Transport_box">
            <div class="Transport_services">
                <h2 class="Transport_services__title">{{ $main->footertitle }}</h2>
                <div class="Transport_text">
                    <p class="Transport_text__one">{{ $main->footercontent }}</p>
                    <div class="Transport_textImg_close">
                        <p class="Transport_text__two">{{ $main->popupcontent }}</p>
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($main->popupimage) }}"
                             alt="TransportServices.png" class="Transport_img">
                    </div>
                    <div class="btnTransport_close">Подробнее</div>
                </div>
            </div>
        </div>
    </header>
    <!-- Project logistics -->
    <div class="box_Project__logistics" id="AboutCompany">
        <h2 class="Project_title">{{ $log->title }}</h2>
        <div class="Project_box__cheked">
            <div class="box_cheked__one">
                <img src="img/Check.png" alt="Check.png" class="box_cheked__img">
                <p class="box_cheked__text">{{ $log->text1 }}</p>
            </div>
            <div class="box_cheked__one">
                <img src="img/Check.png" alt="Check.png" class="box_cheked__img">
                <p class="box_cheked__text">{{ $log->text2 }}</p>
            </div>
            <div class="box_cheked__one">
                <img src="img/Check.png" alt="Check.png" class="box_cheked__img">
                <p class="box_cheked__text">{{ $log->text3 }}</p>
            </div>
            <div class="box_cheked__one">
                <img src="img/Check.png" alt="Check.png" class="box_cheked__img">
                <p class="box_cheked__text">{{ $log->text4 }}</p>
            </div>
            <div class="box_cheked__one">
                <img src="img/Check.png" alt="Check.png" class="box_cheked__img">
                <p class="box_cheked__text">{{ $log->text5 }}</p>
            </div>
        </div>
        <!-- box Transportation -->
        <div class="box_transportation">
            <h2 class="transportation_title">{{ $transport->title }}</h2>
            <div class="transportation_section">
                <div class="transportation_section__one">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($transport->logo1) }}"
                         alt="ProjectLogisticsOne.png" class="transportation_section__img one">
                    <p class="transportation_section__text">{{ $transport->title1 }}</p>
                </div>
                <div class="transportation_section__one">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($transport->logo2) }}"
                         alt="ProjectLogisticsOne.png" class="transportation_section__img two">
                    <p class="transportation_section__text">{{ $transport->title2 }}</p>
                </div>
                <div class="transportation_section__one">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($transport->logo3) }}"
                         alt="ProjectLogisticsOne.png" class="transportation_section__img three">
                    <p class="transportation_section__text">{{ $transport->title3 }}</p>
                </div>
            </div>
            <h2 class="transportation_footer__title">{{ $consalt->header }}</h2>
        </div>
    </div>
    <!-- Industry Solutions box three -->
    <div class="Industry_Solutions__box" id="IndustrySolutions">
        <img src="{{ \Illuminate\Support\Facades\Storage::url($consalt->background) }}"
             alt="IndustrySolutionsBackground.png" class="Solutions_box__background">
        <div class="Solutions_box__content">
            <div class="box_content__one">
                <div class="content_one__left">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($consalt->image) }}"
                         alt="IndustrySolutionsImg.png" class="content_one__img">
                </div>
                <div class="content_one__right">
                    <h2 class="one_right__title">{{ $consalt->title }}</h2>
                    <p class="one_right__text">{{ $consalt->content }}</p>
                    <div class="one_right__btn">Подробнее</div>
                </div>
            </div>
            <div class="box_content__two">
                <div class="content_two__left">
                    @foreach($leftCard as $block)
                    <div class="two_left__one">
                        <h3 class="two_left__title">{{ $block->title }}</h3>
                        <img src="img/IndustrySolutionsImgBtn.png" alt="IndustrySolutionsImgBtn.png"
                             class="two_left__img">
                        <div class="two_left__text">{!! $block->content !!}</div>
                    </div>
                    @endforeach
                </div>
                <div class="content_two__right">
                    @foreach($rightCard as $block)
                    <div class="two_left__one active">
                        <h3 class="two_left__title">{{ $block->title }}</h3>
                        <img src="img/IndustrySolutionsImgBtn.png" alt="IndustrySolutionsImgBtn.png"
                             class="two_left__img active">
                        <div class="two_left__text">{!! $block->content !!}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="btn_close_block">Скрыть</div>
        </div>
    </div>
    <!-- Test equipment box -->
    <div class="Test_equipment" id="Equipment">
        <div class="Test_equipment__title">
            <h3 class="Test_equipment__titleOne">Испытательное оборудование</h3>
            <p class="Test_equipment__text">Мы поставляем испытательное оборудование для предприятий машиностроительной
                отрасли</p>
        </div>
        <div class="Test_equipment__container">
            <div class="Test_equipment_colump">
                <img src="img/TestTquipmentOne.png" alt="TestTquipmentOne.png" class="equipment_colump__img">
                <h4 class="quipment_colump__title">Ассортимент гидравлической продукции</h4>
                <p class="quipment_colump__text">Тележки для испытания систем, универсальные стенды, гидравлические
                    силовые установки</p>
                <div class="quipment_colump__btn">Подробнее</div>
            </div>

            <div class="Test_equipment_colump">
                <img src="img/TestTquipmentTwo.png" alt="TestTquipmentOne.png" class="equipment_colump__img">
                <h4 class="quipment_colump__title">Испытательные лаборатории</h4>
                <p class="quipment_colump__text">Система 1500 л.с. переменного тока 30000/3000 об./мин. привод с двумя
                    выходными валами</p>
                <div class="quipment_colump__btn">Подробнее</div>
            </div>

            <div class="Test_equipment_colump">
                <img src="img/TestTquipmentThree.png" alt="TestTquipmentOne.png" class="equipment_colump__img">
                <h4 class="quipment_colump__title">Экспериментальный стенд СИ</h4>
                <p class="quipment_colump__text">Система испытаний с ручным управлением</p>
                <div class="quipment_colump__btn">Подробнее</div>
            </div>
        </div>
    </div>
    <!-- footer box -->
    <footer>
        <img src="img/footerBackground.webp" alt="footerBackground.png" class="footer_background">
        <div class="footer_container">
            <div class="footer_container__absolute">
                <div class="footer_container__left">
                    <h3 class="footer_left__title">Контакты</h3>
                    <div class="footer_left__phoneOne">
                        <img src="img/IconPhone.png" alt="IconPhone.png" class="phoneOne">
                        <a href="tel:+7-705-433-54-56" class="phoneNumber">+7 705 433 54 56</a>
                    </div>

                    <div class="footer_left__phoneOne">
                        <img src="img/IconPhone.png" alt="IconPhone.png" class="phoneOne">
                        <a href="tel:+7-708-983-79-99" class="phoneNumber">+7 708 983 79 99</a>
                    </div>

                    <div class="footer_left__location">
                        <img src="img/IconLocation.png" alt="IconLocation.png" class="IconLocation">
                        <p class="location_text">Kazakhstan, Almaty
                            Auezov, 39</p>
                    </div>
                    <div class="footer_left__mail">
                        <img src="img/IconMail.png" alt="IconMail.png" class="mail">
                        <p class="mail_text"><a href="mailto:almaxasia@gmail.com">almaxasia@gmail.com</a></p>
                    </div>

                </div>
                <div class="footer_container__right">
                    <h3 class="footer_right__title">Остались вопросы?</h3>
                    <div class="footer_right__text">Оставьте заявку и мы сразу ответим</div>
                    <div class="footer_right__btn">Оставить заявку</div>

                    <div class="footer__alux">
                        <p>Разработано в</p>
                        <a href="https://www.a-lux.kz/" target="_blank">
                            <img src="img/ALUX2.png" alt="ALUX.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</div>
<!-- import js -->
<script src="js/main.js"></script>
</body>

</html>
