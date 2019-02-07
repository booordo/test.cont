<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="./css/app.css">
    <title>Contabilizare</title>
</head>
<body>
    <div class="header">
        <div class="header__panel inner">
            <div class="header__logo">
                <a class="logo" href="/">
                    <div class="logo__image-box">
                        <img class="logo__image" src="./images/logo.png">
                    </div>
                    <div class="logo__title-box">
                        <div class="logo__title">CONTABILIZARE</div>
                        <div class="logo__subtitle">ПРОГРАММЫ ДЛЯ ВАШЕГО БИЗНЕСА</div>
                    </div>
                </a>
            </div>
            <div class="header__contact">
                <div class="contact">
                    <div class="contact__image-box">
                        <img class="contact__image" src="./images/clock.png">
                    </div>
                    <div class="contact__title-box">
                        <div class="contact__title">+373 (22) 22-54-88</div>
                        <div class="contact__subtitle">График: Пн-Пт 9:00-18:00</div>
                    </div>
                </div>
            </div>
            <div class="header__social">
                <div class="social">
                    <span class="social__text">Мы в соц. сетях:</span>
                    <a class="social__link social__link_facebook" href="https://www.facebook.com/contabilizare/" target="blank"></a>
                    <a class="social__link social__link_youtube" href="https://www.youtube.com/channel/UC-k_ZURfduwW_waM5ACOUWA"
                        target="blank"></a>
                </div>
            </div>
            <div class="header__action">
                <div class="navbar-toggler js-dropdown-toggler" data-target="navbar-top">
                    <div class="navbar-toggler__line"></div>
                    <div class="navbar-toggler__line"></div>
                    <div class="navbar-toggler__line"></div>
                </div>
            </div>
        </div>

        <div class="header__navbar" id="navbar-top">
            <div class="inner">
                <ul class="navbar navbar_top">
                    <li class="navbar__item navbar__item_top navbar__item_top_actived ">
                        <a class="navbar__link navbar__link_top" href="/">Главная</a>
                    </li>

                    <li class="navbar__item navbar__item_top navbar__item_top_multilevel">
                        <a class="navbar__link navbar__link_top">О компании</a>
                        <ul class="navbar__sublist navbar__sublist_top">
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/about/history/">История компании</a>
                            </li>
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/about/partners/">Партнерам</a>
                            </li>
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/about/developers/">Разработчикам</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar__item navbar__item_top navbar__item_top_multilevel">
                        <a class="navbar__link navbar__link_top">Решения</a>
                        <ul class="navbar__sublist navbar__sublist_top">
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/solutions/upravlenie-selkhoz-predpriyatiem/">Управление
                                    сельхоз. предприятием</a>
                            </li>
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/solutions/upravlenie-stroitelnym-predpriyatiem/">Управление
                                    строительным предприятием</a>
                            </li>
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/solutions/korporativnyy-universitet/">Корпоративный
                                    университет</a>
                            </li>
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/solutions/roznitsa/">Розница</a>
                            </li>
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/solutions/vodokanal/">Водоканал</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar__item navbar__item_top navbar__item_top_multilevel">
                        <a class="navbar__link navbar__link_top">ERP-система</a>
                        <ul class="navbar__sublist navbar__sublist_top">
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/erp/erp/">ERP-система</a>
                            </li>
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/erp/finansovyy-uchet/">Финансовый
                                    учет</a>
                            </li>
                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/erp/upravlencheskiy-uchet/">Управленческий
                                    учет</a>
                            </li>

                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/erp/upravlenie-prodazhami/">Управление
                                    продажами</a>
                            </li>

                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/erp/roznichnaya-torgovlya/">Розничная
                                    торговля</a>
                            </li>

                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/erp/internet-torgovlya/">Интернет
                                    торговля</a>
                            </li>

                            <li class="navbar__subitem navbar__subitem_top">
                                <a class="navbar__sublink navbar__sublink_top" href="/erp/uchet-proizvodstva/">Учет
                                    производства</a>
                            </li>

                        </ul>
                    </li>
                    <li class="navbar__item navbar__item_top ">
                        <a class="navbar__link navbar__link_top" href="/news/">Новости</a>
                    </li>

                    <li class="navbar__item navbar__item_top ">
                        <a class="navbar__link navbar__link_top" href="/otzyvy/">Отзывы</a>
                    </li>

                    <li class="navbar__item navbar__item_top ">
                        <a class="navbar__link navbar__link_top" href="/contacts/">Контакты</a>
                    </li>

                    <li class="navbar__item navbar__item_top mobile mobile_hide">
                        <a class="navbar__link navbar__link_top" href="/price-list/">Прайс-лист</a>
                    </li>

                    <li class="navbar__item navbar__item_top ">
                        <a class="navbar__link navbar__link_top" href="http://www.clouds.md">Аренда 1С</a>
                    </li>

                    <li class="navbar__item navbar__item_top navbar__item_top_download">
                        <a class="navbar__link navbar__link_top" href="/upload/docs/Price_Cont_4_0_с_01_11_2016.doc">Прайс-лист</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="section section_theme_erp">
            <div class="section__inner inner">
                <svg class="puzzle" id="puzzle" style="height: 800px">
                    <defs>
                        <path d="M 690 607.8460969082653 
                    A 240 240 0 0 0 810 400" id="pathSjrs5hm4o7"></path>
                        <path d="M 700 625.166604983954 
                    A 240 240 0 0 0 830 400" id="pathSjrs5hm4oa"></path>
                        <path d="M 450.00000000000006 607.8460969082653 
                    A 240 240 0 0 0 690 607.8460969082653"
                            id="pathSjrs5hm4of"></path>
                        <path d="M 440.00000000000006 625.1666049839541 
                    A 240 240 0 0 0 700 625.166604983954"
                            id="pathSjrs5hm4oi"></path>
                        <path d="M 330 400.00000000000006 
                    A 240 240 0 0 0 450.00000000000006 607.8460969082653"
                            id="pathSjrs5hm4on"></path>
                        <path d="M 310 400.00000000000006 
                    A 240 240 0 0 0 440.00000000000006 625.1666049839541"
                            id="pathSjrs5hm4oq"></path>
                        <path d="M 330 400.00000000000006 
                    A 240 240 0 0 1 449.9999999999999 192.15390309173478"
                            id="pathSjrs5hm4ov"></path>
                        <path d="M 350 400 
                    A 240 240 0 0 1 459.9999999999999 209.47441116742354"
                            id="pathSjrs5hm4oy"></path>
                        <path d="M 449.9999999999999 192.15390309173478 
                    A 240 240 0 0 1 690 192.15390309173475"
                            id="pathSjrs5hm4o13"></path>
                        <path d="M 459.9999999999999 209.47441116742354 
                    A 240 240 0 0 1 680 209.4744111674235"
                            id="pathSjrs5hm4o16"></path>
                        <path d="M 690 192.15390309173475 
                    A 240 240 0 0 1 810 399.99999999999994"
                            id="pathSjrs5hm4o1b"></path>
                        <path d="M 680 209.4744111674235 
                    A 240 240 0 0 1 790 399.99999999999994"
                            id="pathSjrs5hm4o1e"></path>
                    </defs>
                    <g transform="matrix(1,0,0,1,0,0)" id="sectorGroup">
                        <g>
                            <path d="M 900 400
                A 330 330 0 0 1 735 685.7883832488648
                L 696.25 618.6714144555708
                C 682.5691942669732 656.2591192870071 644.3576898795117 590.0748522542825 683.75 597.0207793609598
                L 645 529.9038105676658
                A 150 150 0 0 0 693.2102479215627 485.55252659686374
                C 706.8910536545894 523.1402314283001 745.0880954720975 456.9810143015429 705.6957853516092 463.92694140822016
                A 150 150 0 0 0 720 400
                L 797.5 400
                C 771.7884956125384 430.6417777247591 848.2115043874616 430.6417777247591 822.5 400
                Z"
                                fill="rgba(255,255,255,0.4)" stroke="#ffffff" style="stroke-width: 3px;" class="puzzle__sector"></path><text
                                class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4o7" startOffset="50%" style="text-anchor: middle;">Розничная</textPath>
                            </text><text class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4oa" startOffset="50%" style="text-anchor: middle;">торговля</textPath>
                            </text>
                        </g>
                        <g>
                            <path d="M 735 685.7883832488648
                A 330 330 0 0 1 405.0000000000001 685.7883832488648
                L 443.75000000000006 618.6714144555708
                C 404.3576898795117 625.617341562248 442.5691942669733 559.4330745295234 456.25000000000006 597.0207793609598
                L 495 529.9038105676658
                A 150 150 0 0 0 557.5144625699535 549.479468005084
                C 531.8029581824919 580.121245729843 608.1970418175081 580.121245729843 582.4855374300465 549.479468005084
                A 150 150 0 0 0 645 529.9038105676658
                L 683.75 597.0207793609598
                C 644.3576898795117 590.0748522542825 682.5691942669732 656.2591192870071 696.25 618.6714144555708
                Z"
                                fill="rgba(255,255,255,0.4)" stroke="#ffffff" style="stroke-width: 3px;" class="puzzle__sector"></path><text
                                class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4of" startOffset="50%" style="text-anchor: middle;">Управленческий</textPath>
                            </text><text class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4oi" startOffset="50%" style="text-anchor: middle;">учет</textPath>
                            </text>
                        </g>
                        <g>
                            <path d="M 405.0000000000001 685.7883832488648
                A 330 330 0 0 1 240 400.00000000000006
                L 317.5 400.00000000000006
                C 291.78849561253844 369.35822227524096 368.21150438746156 369.3582222752409 342.5 400
                L 420 400
                A 150 150 0 0 0 434.3042146483908 463.9269414082202
                C 394.9119045279025 456.981014301543 433.10894634541063 523.1402314283001 446.7897520784374 485.55252659686374
                A 150 150 0 0 0 495 529.9038105676658
                L 456.25000000000006 597.0207793609598
                C 442.5691942669733 559.4330745295234 404.3576898795117 625.617341562248 443.75000000000006 618.6714144555708
                Z"
                                fill="rgba(255,255,255,0.4)" stroke="#ffffff" style="stroke-width: 3px;" class="puzzle__sector"></path><text
                                class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4on" startOffset="50%" style="text-anchor: middle;">Интернет</textPath>
                            </text><text class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4oq" startOffset="50%" style="text-anchor: middle;">торговля</textPath>
                            </text>
                        </g>
                        <g>
                            <path d="M 240 400.00000000000006
                A 330 330 0 0 1 404.9999999999999 114.2116167511353
                L 443.7499999999999 181.32858554442927
                C 457.4308057330266 143.74088071299292 495.6423101204882 209.92514774571745 456.2499999999999 202.97922063904025
                L 494.99999999999994 270.0961894323342
                A 150 150 0 0 0 446.7897520784374 314.4474734031363
                C 433.10894634541063 276.8597685717 394.9119045279025 343.0189856984571 434.3042146483908 336.07305859177984
                A 150 150 0 0 0 420 400
                L 342.5 400
                C 368.21150438746156 369.3582222752409 291.78849561253844 369.35822227524096 317.5 400.00000000000006
                Z"
                                fill="rgba(255,255,255,0.4)" stroke="#ffffff" style="stroke-width: 3px;" class="puzzle__sector"></path><text
                                class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4ov" startOffset="50%" style="text-anchor: middle;">Управление</textPath>
                            </text><text class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4oy" startOffset="50%" style="text-anchor: middle;">продажами</textPath>
                            </text>
                        </g>
                        <g>
                            <path d="M 404.9999999999999 114.2116167511353
                A 330 330 0 0 1 735 114.21161675113524
                L 696.25 181.32858554442925
                C 735.6423101204883 174.38265843775199 697.4308057330268 240.56692547047655 683.75 202.97922063904022
                L 645 270.0961894323342
                A 150 150 0 0 0 582.4855374300465 250.52053199491607
                C 608.1970418175081 219.87875427015695 531.8029581824918 219.87875427015697 557.5144625699534 250.5205319949161
                A 150 150 0 0 0 494.99999999999994 270.0961894323342
                L 456.2499999999999 202.97922063904025
                C 495.6423101204882 209.92514774571745 457.4308057330266 143.74088071299292 443.7499999999999 181.32858554442927
                Z"
                                fill="rgba(255,255,255,0.4)" stroke="#ffffff" style="stroke-width: 3px;" class="puzzle__sector"></path><text
                                class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4o13" startOffset="50%" style="text-anchor: middle;">Финансовый</textPath>
                            </text><text class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4o16" startOffset="50%" style="text-anchor: middle;">учет</textPath>
                            </text>
                        </g>
                        <g>
                            <path d="M 735 114.21161675113524
                A 330 330 0 0 1 900 399.99999999999994
                L 822.5 399.99999999999994
                C 848.2115043874616 430.64177772475904 771.7884956125384 430.6417777247591 797.5 399.99999999999994
                L 720 399.99999999999994
                A 150 150 0 0 0 705.6957853516092 336.07305859177984
                C 745.0880954720975 343.018985698457 706.8910536545893 276.8597685716999 693.2102479215625 314.4474734031362
                A 150 150 0 0 0 645 270.0961894323342
                L 683.75 202.97922063904022
                C 697.4308057330268 240.56692547047655 735.6423101204883 174.38265843775199 696.25 181.32858554442925
                Z"
                                fill="rgba(255,255,255,0.4)" stroke="#ffffff" style="stroke-width: 3px;" class="puzzle__sector"></path><text
                                class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4o1b" startOffset="50%" style="text-anchor: middle;">Учет</textPath>
                            </text><text class="puzzle__text">
                                <textPath xlink:href="#pathSjrs5hm4o1e" startOffset="50%" style="text-anchor: middle;">производства</textPath>
                            </text>
                        </g>
                        <g id="circle">
                            <path d="M 720 399.99999999999994 A 150 150 0 0 0 705.6957853516092 336.07305859177984
                C 745.0880954720975 343.018985698457 706.8910536545893 276.8597685716999 693.2102479215625 314.4474734031362
                A 150 150 0 0 0 645 270.0961894323342 A 150 150 0 0 0 582.4855374300465 250.52053199491607
                C 608.1970418175081 219.87875427015695 531.8029581824918 219.87875427015697 557.5144625699534 250.5205319949161
                A 150 150 0 0 0 494.99999999999994 270.0961894323342 A 150 150 0 0 0 446.7897520784374 314.4474734031363
                C 433.10894634541063 276.8597685717 394.9119045279025 343.0189856984571 434.3042146483908 336.07305859177984
                A 150 150 0 0 0 420 400 A 150 150 0 0 0 434.3042146483908 463.9269414082202
                C 394.9119045279025 456.981014301543 433.10894634541063 523.1402314283001 446.7897520784374 485.55252659686374
                A 150 150 0 0 0 495 529.9038105676658 A 150 150 0 0 0 557.5144625699535 549.479468005084
                C 531.8029581824919 580.121245729843 608.1970418175081 580.121245729843 582.4855374300465 549.479468005084
                A 150 150 0 0 0 645 529.9038105676658 A 150 150 0 0 0 693.2102479215627 485.55252659686374
                C 706.8910536545894 523.1402314283001 745.0880954720975 456.9810143015429 705.6957853516092 463.92694140822016
                A 150 150 0 0 0 720 400 "
                                fill="#2a2a2b" stroke="#ffffff" style="stroke-width: 3px;"></path><text x="570" y="400.0000000000001"
                                fill="#ffffff" class="puzzle__circle-title" transform="matrix(1,0,0,1,0,41.5)">ERP</text><text
                                x="569.9921875" y="343.5" fill="#f1c40f" class="puzzle__circle-choice">Выберите
                                раздел</text><text x="569.9921875" y="466.5" textLength="185" fill="#ffffff"
                                class="puzzle__circle-subtitle" transform="matrix(1,0,0,1,0.0156,0)">Системы</text>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <div class="section section_theme_clouds mobile mobile_hide">
            <div class="container inner">
                <div class="container__header container__header_flex">
                    <img class="image image_mr" src="../images/1c.png" alt="" role="presentation">
                    <div class="title title_size_lg">В облаке</div>
                </div>
                <div class="container__body">
                    <div class="thumbnails">
                        <div class="thumbnails__item">
                            <div class="thumbnails__image-box">
                                <img class="thumbnails__image" src="../images/clouds_look_video.png"
                                    alt="" role="presentation">
                            </div>
                            <a class="thumbnails__button button button_theme_flat button_size_l js-video-open" href="#"
                                data-target="LmoOdYlUU9A">смотрите видео</a>
                        </div>
                        <div class="thumbnails__item">
                            <div class="thumbnails__image-box">
                                <img class="thumbnails__image" src="../images/clouds_cont_4.png" alt=""
                                    role="presentation">
                            </div>
                            <a class="thumbnails__button button button_theme_flat button_size_l" href="http://clouds.md"
                                target="_blank">Contabilizare 4.0</a>
                        </div>
                        <div class="thumbnails__item">
                            <div class="thumbnails__image-box">
                                <img class="thumbnails__image" src="../images/clouds_cont_5.png" alt=""
                                    role="presentation">
                            </div>
                            <a class="thumbnails__button button button_theme_flat button_size_l js-open-modal" data-src="cont_5_clouds">Contabilizare
                                5.0</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section_theme_dark">
            <div class="container inner">
                <div class="container__header">
                    <h1 class="title title_align_center title_size_lg title_color_white">contabilizare 5.0</h1>
                    <span class="subtitle subtitle_align_center subtitle_color_white">Ознакомьтесь с нашим новым
                        предложением</span>
                </div>
                <div class="container__body">
                    <div class="thumbnails">
                        <div class="thumbnails__item">
                            <div class="thumbnails__image-box">
                                <img class="thumbnails__image" src="../images/cont_5_demo.png" alt=""
                                    role="presentation">
                            </div>
                            <a class="thumbnails__button button button_theme_3d-reverse button_size_m" href="http://www.mycont.md/cont5demo/DEMO/ru_RU/"
                                target="_blank">Демо</a>
                        </div>
                        <div class="thumbnails__item">
                            <div class="thumbnails__image-box">
                                <img class="thumbnails__image" src="../images/cont_5_work.png" alt=""
                                    role="presentation">
                            </div>
                            <a class="thumbnails__button button button_theme_3d-reverse button_size_m js-open-modal"
                                data-src="cont_5_download">Скачать</a>
                        </div>
                        <div class="thumbnails__item">
                            <div class="thumbnails__image-box">
                                <img class="thumbnails__image" src="../images/cont_5_register.png"
                                    alt="" role="presentation">
                            </div>
                            <a class="thumbnails__button button button_theme_3d-reverse button_size_m js-open-modal"
                                data-src="cont_5_partner_">Зарегистрироваться партнером</a>
                        </div>
                        <div class="thumbnails__item">
                            <div class="thumbnails__image-box">
                                <img class="thumbnails__image" src="../images/cont_5_tester.png" alt=""
                                    role="presentation">
                            </div>
                            <a class="thumbnails__button button button_theme_3d-reverse button_size_m" href="/registration/config.php">Зарегистрировать
                                конфигурацию</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section_theme_sky mobile mobile_hide">
            <div class="container inner">
                <div class="container__header">
                    <h1 class="title title_align_center title_size_lg title_color_white">Бизнес процессы</h1>
                    <span class="subtitle subtitle_align_center subtitle_color_white">Узнайте подробнее о
                        взаимодействии с бизнесом при помощи CRM-СИСТЕМЫ</span>
                </div>
                <div class="container__body">
                    <div class="rocket">
                        <a class="rocket__button button button_theme_simple-reverse button_size_s">Смотрите видео</a>
                        <a class="rocket__button button button_theme_simple-reverse button_size_s">Моделирование</a>
                        <a class="rocket__button button button_theme_simple-reverse button_size_s">Автоматизация</a>
                        <a class="rocket__button button button_theme_simple-reverse button_size_s">Управление</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section_theme_about mobile mobile_hide section_size_s">
            <div class="grid inner">
                <div class="grid__row grid__row_justify_sb">
                    <div class="grid__col grid__col_6">
                        <div class="container">
                            <div class="container__header">
                                <h2 class="title title_weight_light">Contabilizare 4.0</h2>
                                <a class="container__link container__link_color_black" href="/news/contabilizare-4-0/">Все
                                    релизы</a>
                            </div>
                            <div class="container__body">

                                <div class="card" id="bx_651765591_13251">
                                    <h4 class="card__title">Выход нового релиза Contabilizare 4.0.111</h4>
                                    <p class="card__text">Уважаемые друзья! Мы рады сообщить Вам о выходе нового релиза
                                        Contabilizare 4.0.111 на платформе 1С: Предприятие 8</p>
                                    <a class="card__link" href="/news/contabilizare-4-0/vykhod-novogo-reliza-contabilizare-4-0-111/">Читать
                                        далее...</a>
                                </div>
                                <div class="card" id="bx_651765591_13250">
                                    <h4 class="card__title">Выход нового релиза Contabilizare 4.0.110</h4>
                                    <p class="card__text">Уважаемые друзья! Мы рады сообщить Вам о выходе нового релиза
                                        Contabilizare 4.0.110 на платформе 1С: Предприятие 8</p>
                                    <a class="card__link" href="/news/contabilizare-4-0/vykhod-novogo-reliza-contabilizare-4-0-110/">Читать
                                        далее...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__col grid__col_6">
                        <div class="container">
                            <div class="container__header">
                                <h2 class="title title_weight_light">Contabilizare 5.0</h2>
                                <a class="container__link container__link_color_black" href="/news/contabilizare-5-0/">Все
                                    релизы</a>
                            </div>
                            <div class="container__body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section_theme_touch mobile mobile_hide">
            <div class="grid inner">
                <div class="grid__row">
                    <div class="grid__col grid__col_5">
                        <div class="subscribe">
                            <div class="subscribe__image-box">
                                <img class="subscribe__image" src="../images/subscribe.png" alt=""
                                    role="presentation">
                            </div>
                            <div class="subscribe__text">Подписывайтесь на наш канал и смотрите обзоры новинок нашей
                                компании.</div>
                            <a class="subscribe__button button button_theme_3d button_size_l" href="https://www.youtube.com/channel/UCi_3YfeBbjBNtIkN9lZzKMA/featured"
                                target="_blank">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal_info" id="cont_5_download">
            <div class="modal__inner">
                <div class="modal__header">
                    <h3 class="modal__title">Дорогие друзья!</h3>
                </div>
                <div class="modal__body">
                    <p class="modal__text">Рады представить Вам наше новое решение для автоматизации бухгалтерского и
                        оперативного учета Contabilizare 5.0. Данная конфигурация предназначена для платформы
                        1С:Предприятие 8.3 (с релиза 8.3.13).</p>
                    <p class="modal__text modal__text_alert">Внимание! Без регистрации конфигурация будет работать 60
                        минут, после чего запросит регистрацию. Вы можете просто перезапустить программу и сможете
                        работать следующие 60 минут.</p>
                    <p class="modal__text">С условиями регистрации Вы можете ознакомиться в разделе <a class="modal__link"
                            href="/registration/config.php">«Регистрация конфигурации»</a>.</p>
                    <p class="modal__text">Информация по телефону: 067-701-442</p>
                </div>
                <div class="modal__footer">
                    <a class="modal__button" href="/download.php">Скачать</a>
                    <a class="modal__button modal__button_cancel">Отмена</a>
                </div>
            </div>
        </div>
        <div class="modal" id="cont_5_partner">
            <div class="modal__inner">
                <h3 class="modal__title">Дорогие друзья!</h3>
                <div class="modal__text-area">
                    <p class="modal__text">Contabilizare приглашает вас стать нашими партнерами как в продвижении
                        конфигурации Contabilizare 5.0, так и взять данную конфигурацию за основу своих авторских
                        разработок и ведения собственного бизнеса.</p>
                    <p class="modal__text">Партнерская программа предполагает, прежде всего, систему скидок при
                        регистрации или приобретении конфигурации. Общая скидка – до 50%, для постоянных партнеров до
                        60%.</p>
                    <p class="modal__text">Новый партнер первую закупку делает по цене для конечного пользователя.</p>
                    <p class="modal__text">Партнер делает заказ на поставку или регистрацию конфигурации через свой <a
                            class="modal__link" href="/personal">«Личный кабинет»</a>.</p>
                    <p class="modal__text">Данная партнерская программа распространяется только на приобретение
                        конфигурации Contabilizare 5.0. При необходимости приобретения полного пакета программного
                        обеспечения (с платформой 1С:Предприятие 8.3) действует другая система агентского
                        вознаграждения.</p>
                    <p class="modal__text">Информация по телефону: 067-701-442</p>
                </div>
                <div class="modal__button-box">
                    <a class="modal__button">OK</a>
                </div>
            </div>
        </div>
        <div class="modal modal_alert" id="cont_5_clouds">
            <div class="modal__inner">
                <div class="modal__header">
                    <h3 class="modal__title">Функционал в разработке</h3>
                </div>
                <div class="modal__footer">
                    <a class="modal__button">OK</a>
                </div>
            </div>
        </div>
        <div class="modal modal_alert" id="cont_5_partner_">
            <div class="modal__inner">
                <div class="modal__header">
                    <h3 class="modal__title">Функционал в разработке</h3>
                </div>
                <div class="modal__footer">
                    <a class="modal__button">OK</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer mobile mobile_hide">
        <div class="footer__navbar">
            <div class="grid inner">
                <div class="grid__row">
                    <div class="grid__col grid__col_8 grid">
                        <div class="grid__row">
                            <div class="grid__col grid__col_4">
                                <h3 class="title title_size_xs title_weight_light">
                                    <span class="title__accent">Категории</span>
                                    меню
                                </h3>

                                <ul class="navbar navbar_bottom">

                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/">Главная</a>
                                    </li>


                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/about/">О компании</a>
                                    </li>


                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/news/">Новости</a>
                                    </li>


                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/otzyvy/">Отзывы</a>
                                    </li>


                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/contacts/">Контакты</a>
                                    </li>


                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/price-list/">Прайс-лист</a>
                                    </li>


                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="http://www.clouds.md">Аренда
                                            1С</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="grid__col grid__col_4">
                                <h3 class="title title_size_xs title_weight_light">
                                    <span class="title__accent">ERP</span>
                                    система
                                </h3>

                                <ul class="navbar navbar_bottom">
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/erp/erp/">ERP-система</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/erp/finansovyy-uchet/">Финансовый
                                            учет</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/erp/upravlencheskiy-uchet/">Управленческий
                                            учет</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/erp/upravlenie-prodazhami/">Управление
                                            продажами</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/erp/roznichnaya-torgovlya/">Розничная
                                            торговля</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/erp/internet-torgovlya/">Интернет
                                            торговля</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/erp/uchet-proizvodstva/">Учет
                                            производства</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="grid__col grid__col_4">
                                <h3 class="title title_size_xs title_weight_light">
                                    <span class="title__accent">Наши</span>
                                    решения
                                </h3>

                                <ul class="navbar navbar_bottom">
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/solutions/upravlenie-selkhoz-predpriyatiem/">Управление
                                            сельхоз. предприятием</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/solutions/upravlenie-stroitelnym-predpriyatiem/">Управление
                                            строительным предприятием</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/solutions/korporativnyy-universitet/">Корпоративный
                                            университет</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/solutions/roznitsa/">Розница</a>
                                    </li>
                                    <li class="navbar__item navbar__item_bottom">
                                        <a class="navbar__link navbar__link_bottom" href="/solutions/vodokanal/">Водоканал</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid__col grid__col_4">
                        <h3 class="title title_size_xs title_weight_light">
                            <span class="title__accent">Связаться</span>
                            с нами
                        </h3>
                        <div class="enum">
                            <div class="enum__item">
                                <span class="enum__name">Адрес:</span>
                                <span class="enum__desc">МД 2012, г. Кишинев, Ул. Митрополит Варлаам, 65 оф. 420, 4-й
                                    этаж</span>
                            </div>
                            <div class="enum__item">
                                <span class="enum__name">Основной телефон/факс:</span>
                                <span class="enum__desc">(373 22) 22-54-88</span>
                            </div>
                            <div class="enum__item">
                                <span class="enum__name">Линия консультаций:</span>
                                <span class="enum__desc">(373 22) 22-39-85</span>
                            </div>
                            <div class="enum__item">
                                <span class="enum__name">Email:</span>
                                <span class="enum__desc">cont@cont.md</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__panel inner">
            <div class="rights">
                <div class="rights__text">Contabilizare © 2019. All rights reserved.</div>
            </div>
            <div class="social">
                <span class="social__text">Мы в соц. сетях:</span>
                <a class="social__link social__link_facebook" href="https://www.facebook.com/contabilizare/" target="blank"></a>
                <a class="social__link social__link_youtube" href="https://www.youtube.com/channel/UC-k_ZURfduwW_waM5ACOUWA"
                    target="blank"></a>
            </div>
        </div>
    </div>
    <script async src="js/app.js"></script>
</body>
</html>