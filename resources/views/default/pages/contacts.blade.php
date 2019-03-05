@extends('default.layouts.default')

@section('content')
    <div class="section section_size_xs">
        <div class="inner">
            <div class="title title_size_xl">Контакты</div>
            <div class="breadcrumbs mobile mobile_hide"><a class="breadcrumbs__link link" href="/">Главная</a><span class="breadcrumbs__separator"></span><a class="breadcrumbs__link link link_disable" href="/contacts/">Контакты</a></div>
        </div>
    </div>
    <div class="section section_no-padding">
        <div class="grid inner">
            <div class="grid__row">
                <div class="grid__col grid__col_6 grid__col_m_12">
                    <div class="definition">
                        <div class="definition__left">
                            <div class="definition__title">Телефон/факс:</div>
                        </div>
                        <div class="definition__right">
                            <div class="definition__text">
                                <a class="definition__link" href="tel:0037322225488">+373 (22) 22-54-88</a>
                            </div>
                        </div>
                    </div>
                    <div class="definition">
                        <div class="definition__left">
                            <div class="definition__title">Консультация:</div>
                        </div>
                        <div class="definition__right">
                            <div class="definition__text">
                                <a class="definition__link" href="tel:0037322223985">+373 (22) 22-39-85</a>
                            </div>
                        </div>
                    </div>
                    <div class="definition">
                        <div class="definition__left">
                            <div class="definition__title">e-mail:</div>
                        </div>
                        <div class="definition__right">
                            <div class="definition__text">
                                <a class="definition__link" href="mailto:cont@cont.md" target="blank">cont@cont.md</a>
                                - вопросы общего характера
                            </div>
                            <div class="definition__text">
                                <a class="definition__link" href="mailto:prof@cont.md" target="blank">prof@cont.md</a>
                                - отдел программного обеспечения
                            </div>
                        </div>
                    </div>
                    <div class="definition">
                        <div class="definition__left">
                            <div class="definition__title">Адрес:</div>
                        </div>
                        <div class="definition__right">
                            <div class="definition__text">МД 2012, г. Кишинев, Ул. Митрополит Варлаам,</div>
                            <div class="definition__text">65 оф. 420, 4-й этаж</div>
                        </div>
                    </div>
                </div>
                <div class="grid__col grid__col_6 grid__col_m_12">
                    <div class="definition">
                        <div class="definition__left">
                            <div class="definition__title">Реквизиты:</div>
                        </div>
                        <div class="definition__right">
                            <div class="definition__text">Название: "AIS-TEHNOLOGII" SRL</div>
                            <div class="definition__text">Ф/К: 1012600013024</div>
                            <div class="definition__text">НДС: 0208453</div>
                            <div class="definition__text">ВС: "Victoriabank" SA fil.N11 Chisinau</div>
                            <div class="definition__text">C/B: VICBMD2X883</div>
                            <div class="definition__text">C/D: MD84VI022241100000108MDL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_theme_map section_size_s">
        <div class="inner">
            <form class="feedback" method="POST" action="/local/components/custom/feedback/component.php" name="feedback">
                <input type="hidden" name="sessid" id="sessid" value="bd69d390b16e7af50f023f9183238a2a">
                <div class="feedback__group">
                    <input class="feedback__input feedback__input_size_s" type="text" placeholder="Ваше имя" name="name" required="">
                    <input class="feedback__input feedback__input_size_s" type="tel" placeholder="Телефон" name="phone" required="">
                </div>
                <input class="feedback__input feedback__input_size_l" type="email" placeholder="E-mail" name="email" required="">
                <input class="feedback__input feedback__input_size_l" type="text" placeholder="Название вашей организации" name="organization">
                <input class="feedback__input feedback__input_size_l" type="text" placeholder="Задайте ваш вопрос" name="message" required="">
                <input type="hidden" name="email_to" value="cont@cont.md, booordo@mail.ru">
                <input type="hidden" name="robot_check">
                <div class="feedback__group">
                    <div class="feedback__captcha g-recaptcha" data-sitekey="6Ld6sH4UAAAAANoN1qkiwEKLfpRQTNxbcDHhZ1Vh" data-callback="captchaProcessing">
                        <div style="width: 304px; height: 78px;">
                            <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ld6sH4UAAAAANoN1qkiwEKLfpRQTNxbcDHhZ1Vh&amp;co=aHR0cHM6Ly9jb250Lm1kOjQ0Mw..&amp;hl=ru&amp;v=v1550471573786&amp;size=normal&amp;cb=r96gzcyvxnq" width="304" height="78" role="presentation" name="a-c36bvdfouy75" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div>
                    </div>
                    <input class="feedback__submit button button_theme_3d" type="submit" name="submit" value="Отправить" style="display: none">
                </div>
            </form>
        </div>
    </div>
@endsection