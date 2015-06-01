@extends('View_collection.template')

@section('content')
<div class="top_menu_bg">
    <div class="top_menu">
        <div class="logo"></div>
        <div class="menu_punkt" onclick="location.href='#';">Контакты</div>
        <div class="menu_punkt" onclick="location.href='#';">F.A.Q.</div>
        <div class="menu_punkt" onclick="location.href='#';">Личный кабинет</div>
        <div class="menu_punkt" onclick="location.href='#';">Каталог</div>
        <div class="menu_punkt" onclick="location.href='#';">Главная</div>
    </div>
</div>

<div class="block3">
<div class="block3_content">
<div class="block3_content_header">
    <div class="block3_content_header_txt">Просмотр курса</div>
</div>
<div class="left_menu">
    <div class="left_menu_header">Выберите тематику:</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Личностный рост</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Продажи и бизнес</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Инфобизнес</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Маркетинг, PR, реклама</div>
    <div class="left_menu_punkt_active" onclick="location.href='#';">Финансы</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Карьера и работа</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Инвестиции</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Женские курсы</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Мужские курсы</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Дизайн</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Создание сайта</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Продвижение сайтов</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Видеопроизводство</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Фотография</div>
    <div class="left_menu_punkt" onclick="location.href='#';">YouTube</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Программирование</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Компьютеры, программы</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Здоровье</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Спорт</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Музыка</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Хобби и увлечения</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Танцы</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Психология</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Иностранные языки</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Образование</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Ремонт и строительство</div>
    <div class="left_menu_punkt" onclick="location.href='#';">Разное</div>
</div>
<div class="kurs_content">
    <div class="left">
        <div class="img"><img src="img/kurs/kurs_img.png"></div>
        <div class="l-name">Автор:</div>
        <div class="name">Майская Марина</div>
        <div class="l-name">Количество уроков:</div>
        <div class="number">15</div>
        <div class="bal">4.13</div>
    </div>
    <div class="right">
        <div class="head">Курс "Сайт-Визитка За 15 уроков"</div>
        <div class="about">Описание курса:</div>
        <div class="about_txt">
            <p>Этот видеокурс задуман мной как решение, позволяющее быстро (менее, чем за 4 часа) создать простой сайт-визитку с нуля.</p>

            <p>Я прекрасно понимаю тех, кто не хочет сразу лезть в "дебри" сайтостроения, а пытается создать сначала что-то более простое.</p>

            <p>Именно такой подход и позволяет обрести уверенность в своих силах и понять, нужно ли тебе что-то большее.</p>

            <p>Сайт-визитка, который создается в процессе этого курса, хоть и является достаточно простым, тем не менее, использует базовые возможности языка PHP, что позволяет реализовать некоторые дополнительные возможности.</p>
        </div>
        <div class="head2">Уроки курса:</div>
        <div class="lessons">
            <div id="css3-animated-example">
                <h3>Урок №1: Название первого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №2: Название второго урока. Очень длинное название урока для примера на вде строки</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №3: Название третьего урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №4: Название четвертого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №5: Название пятого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №6: Название шестого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №7: Название седьмого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №8: Название восьмого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №9: Название девятого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №10: Название десятого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №11: Название одиннадцатого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №12: Название двенадцатого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №13: Название тринадцатого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №14: Название четырнадцатого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
                <h3>Урок №15: Название пятнадцатого урока</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/082NZ5K2jWQ" frameborder="0" allowfullscreen></iframe>
                        <h4>Описание урока:</h4>
                        <p>Как максимально разогнать видеокарту? В видео подробно по шагам я рассказал, как лично я это делаю. Всем приятного просмотра!</p>

                        <p>P.S. На некоторых видеокартах управление напряжением не разблокировать - только биос нужно переделывать. К примеру у меня на тесте была Gugabyte R9 280x - напряжение заблокировано биосом.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
</div>
@stop