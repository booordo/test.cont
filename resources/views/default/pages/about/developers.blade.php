@extends('default.layouts.default')

@section('content')
    <div class="section section_size_xs">
        <div class="inner">
            <div class="title title_size_xl">Разработчикам</div>
            <div class="breadcrumbs mobile mobile_hide"><a class="breadcrumbs__link link" href="/">Главная</a><span class="breadcrumbs__separator"></span><a class="breadcrumbs__link link link_disable" href="/about/developers/">Разработчикам</a></div>
        </div>
    </div>
    <div class="section section_no-padding">
        <div class="inner">
            <div class="info">
                <h3 class="info__title">Почему с Contabilizare 5.0 выгодно работать?</h3>
                <ol class="info__list">
                    <li class="info__list-item">
                        <h5 class="info__subtitle">Документация</h5>
                        <p class="info__text">Конфигурация имеет встроенную онлайн справку, которая постоянно дополняется, и не вшита статично в метаданные.</p>
                    </li>
                    <li class="info__list-item">
                        <h5 class="info__subtitle">Интернационализация</h5>
                        <p class="info__text">Интерфейс решения на двух языках: Румынском и Русском. Все строки/сообщения вынесены в отдельный модуль.</p>
                    </li>
                    <li class="info__list-item">
                        <h5 class="info__subtitle">Скорость </h5>
                        <p class="info__text">Размер конфигурационного файла около 8мб. Размер имеет значение, и в данном случае, чем меньше, тем в разы лучше:</p>
                        <ul class="info__sublist">
                            <li class="info__sublist-item">Быстрее разрабатывать</li>
                            <li class="info__sublist-item">Быстрее тестировать </li>
                            <li class="info__sublist-item">Быстрее проводить сравнение/объединение/выгрузки/загрузки </li>
                            <li class="info__sublist-item">Быстрее копировать и передавать по интернету</li>
                        </ul>
                    </li>
                    <li class="info__list-item">
                        <h5 class="info__subtitle">Кодирование</h5>
                        <p class="info__text">Вы не увидите в конфигурации таких модулей и переменных. Решение написано на английском, с учетом контекста и выработанных соглашений. Решение написано по принципам экстремального программирования, все функции маленькие, имена простые, универсализация продумана с учетом сохранения разумного баланса между тем что нужно, и тем, что быть может будет нужно.</p>
                    </li>
                    <li class="info__list-item">
                        <h5 class="info__subtitle">Качество</h5>
                        <p class="info__text">Большая часть разработки покрыта сценарными тестами. Сценарные тесты - не секрет фирмы, и предоставляются зарегистрированным пользователям бесплатно. Наши сценарные тесты - это не тесты на 2+2=4, это наборы полноценных сценариев в количестве около 1000 штук. Все тесты разработаны при помощи бесплатного инструмента тестирования Тестер, с бесплатной поддержкой и потрясающей документацией в объеме 160 страниц.</p>
                    </li>
                    <li class="info__list-item">
                        <h5 class="info__subtitle">Простота </h5>
                        <p class="info__text">Решение написано для Молдовы, с нуля, без чрезмерной сложности.</p>
                    </li>
                </ol>
                <h3 class="info__title">Резюмируя</h3>
                <p class="info__text">Работая с Contabilizare 5.0, вы получаете элегантное решение, с которым легко работать, которое постоянно документируется, и имеет почти полное покрытие сценарными тестами.</p>
                <div class="info__button-box"><a class="info__button button button_size_l button_theme_flat-reverse" href="#">Зарегистрироваться партнером </a></div>
            </div>
        </div>
    </div>
@endsection