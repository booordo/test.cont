@extends('default.layouts.default')

@section('content')
    <div class="section section_size_xs section_theme_about">
        <div class="inner">
            <div class="title title_size_xl">История компании</div>
            <div class="breadcrumbs mobile mobile_hide"><a class="breadcrumbs__link link" href="/">Главная</a><span class="breadcrumbs__separator"></span><a class="breadcrumbs__link link link_disable" href="/about/history/">История компании</a></div>
        </div>
    </div>
    <div class="section section_no-padding section_theme_about">
        <div class="inner">
            <div class="about about_theme_first">
                <article class="about__article about__article_align_right about__article_align_top article article_theme_light">
                    <img class="article__image" src="{{ URL::asset('images/about_clock.png') }}" alt="" role="presentation">
                    <div class="article__title">История компании</div>
                    <div class="article__text">Компания Contabilizare была создана в январе 1997 года. Создателями и идейными вдохновителями компании были братья Решитко Эдуард и Дмитрий. На сегодняшний день компания является одним из ведущих разработчиков учетного программного обеспечения на рынке Молдовы. Как с самого своего рождения, так и по сей день мы позиционируем себя именно как разработчики программного обеспечения.</div>
                </article>
                <article class="about__article about__article_align_left about__article_align_bottom article article_theme_light">
                    <img class="article__image" src="{{ URL::asset('images/about_steps.png') }}" alt="" role="presentation">
                    <div class="article__title">Первые продукты, первые успехи</div>
                    <div class="article__text">В конце девяностых годов прошлого века рынок учетного программного обеспечения на базе «1С» представлял собой хаотическое предложение российских конфигураций с доработкой и адаптацией под молдавское законодательство. «Удовольствие» это было чрезвычайно дорогое идлительное по времени.</div>
                    <div class="article__text">В 1998 году мы первые предложили рынку типовое решение для 1С:Бухгалтерия для Молдовы. Это и предопределило бурный рост продаж и соответственно продвижения фирмы. До сих пор львиная доля пользователей 1С:Предприятия 7.7 – это пользователи наших конфигураций в различной интерпретации других фирм.</div>
                </article>
            </div>
        </div>
    </div>
    <div class="section section_no-padding section_theme_blue">
        <div class="inner">
            <div class="about about_theme_second">
                <article class="about__article about__article_align_right about__article_align_top article article_theme_dark">
                    <img class="article__image" src="{{ URL::asset('images/about_commet.png') }}" alt="" role="presentation">
                    <div class="article__title">Головокружение от успехов, упадок.</div>
                    <div class="article__text">Молодая психика такого бурного роста не перенесла, я как руководитель, возгордился и в результате компания так же быстро просела, как и взлетела. Наш программный продукт молниеносно распространился по всей республике, не две и не три фирмы сделали на нем бизнес, в результате инициатива нами была утеряна.</div>
                </article>
                <article class="about__article about__article_align_left about__article_align_bottom article article_theme_dark">
                    <img class="article__image" src="{{ URL::asset('images/about_cloud.png') }}" alt="" role="presentation">
                    <div class="article__title">А в это время…</div>
                    <div class="article__text">В Молдове создается целый холдинг фирм, способный оказывать комплексные услуги в различных областях. Кроме, Contabilizare-Prof – разработка, продажа, услуги адаптации и внедрения лицензионного программного обеспечения, Это, Contabilizare–Audit, услуги в сфере аудита, ведения бухгалтерского учета, консультирование по налогообложению. Это, Contabilizare–Com, компьютеры и различная оргтехника, сети и все с ним связанное. Это, Contabilizare-Studiere, авторизированный учебный центр, где можно было пройти курсы не только по программе, но и по программированию.</div>
                    <div class="article__text">В это время мы открываем филиалы фирмы в г. Москва и Бухарест. Создаем типовую конфигурацию для Румынии, которой аналога в данной ценовой нише нет. Однако и здесь нас ждало фиаско. Деньги закончились раньше, чем мы начали продавать. Но факт остается фактом – до сих пор аналога по совокупности функционал-цена в Румынии даже близко нет.</div>
                </article>
            </div>
        </div>
    </div>
    <div class="section section_no-padding section_theme_dark">
        <div class="inner">
            <div class="about about_theme_third">
                <article class="about__article about__article_align_left about__article_align_top article article_theme_dark">
                    <img class="article__image" src="{{ URL::asset('images/about_lamp.png') }}" alt="" role="presentation">
                    <div class="article__title">Уникальность просто так не потеряешь…</div>
                    <div class="article__text">Не смотря на все сложности мы создаем новое, комплексное типовое решение для Молдовы на базе платформы 1С: Предприятие 8. Не решение работающее на Платформе 8 (что в реальности просто конвертированная 7.7), а созданное именно инструментарием Платформы 8. Мы были первыми и случилось это в 2005 году. Стоит упомянуть, что аналогов в Молдове нет до сих пор.</div>
                </article>
                <article class="about__article about__article_align_right about__article_align_bottom article article_theme_dark">
                    <img class="article__image" src="{{ URL::asset('images/about_diamond.png') }}" alt="" role="presentation">
                    <div class="article__title">И вновь продолжается бой…</div>
                    <div class="article__text">На сегодняшний день мы вполне ответственно можем заявить об интернациональности нашего решения Contabilizare. Сегодня на нем работают не только пользователи в Молдове, но и в Румынии. Программа в кратчайшие сроки может быть адаптирована под любое законодательство. </div>
                    <div class="article__text">Не смотря на то, что решение было создано 10 лет назад, его уникальность и преимущественность не вызывает сомнений. Тем не менее, мы готовимся в совсем недалеком будущем, выпустить следующее поколение решений, которое молдавский рынок опередит минимум лет на 7-10. </div>
                    <div class="article__text">Нет аналогов в Молдове нашему решение Time Accounting. Смотрите на www.mytime.md </div>
                    <div class="article__text">Мы единственные, кто предлагает цивилизованные облачные учетные решения в Молдове. Сегодня реально воспользоваться облаком на www.clouds.md на достаточно высоком профессиональном и организационном уровне.</div>
                    <div class="article__text">И самая главная наша ценность и успех – это Люди. На сегодняшний день мы обладаем высококлассными специалистами, которые способны решать бизнес задачи самого высокого уровня сложности.</div>
                </article>
            </div>
        </div>
    </div>   
@endsection