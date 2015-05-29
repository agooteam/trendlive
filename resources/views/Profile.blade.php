@extends('Profile.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_content_header">
            <div class="block3_content_header_txt">Мои подборки</div>
        </div>
        <div class="left_menu">
            <div class="left_menu_header">Профиль</div>
            <div class="left_menu_punkt_active" onclick="location.href='#';">Мои подборки</div>
            <div class="left_menu_punkt" onclick="location.href='#';">Изменить пароль</div>
            <div class="left_menu_punkt_end" onclick="location.href='#';">Выход</div>
            <div class="left_menu_punkt_add" onclick="location.href='#';">Новая подборка</div>
        </div>
        <div class="catalog_content">
            <div class="catalog_prod">
                <div class="prod_img"><img src="/img/prod/1.png"/></div>
                <div class="prod_info">
                    <div class="prod_header">Ошибочно полагают, что в бедности, часто становятся дл я друзей.  А если будет много текста, то появится дополнительная строка.</div>
                    <div class="prod_txt">Прошлых ошибок, от чего достигнете. Вознаградить тяжелый труд своих сотрудников, и еще долгое время для них подходящее. Слову сказать, в бизнесе всегда делаем то, что вы хотите быть предпринимателем.</div>
                    <div class="prod_btn">
                        <div class="btn_edit" onclick="location.href='#';">
                            Редактировать</div>
                        <div class="btn_del" onclick="location.href='#';">
                            Удалить</div>
                    </div>
                </div>
            </div> <div class="catalog_prod">
                <div class="prod_img"><img src="/img/prod/1.png"/></div>
                <div class="prod_info">
                    <div class="prod_header">Ошибочно полагают, что в бедности, часто становятся дл я друзей.  А если будет много текста, то появится дополнительная строка.</div>
                    <div class="prod_txt">Прошлых ошибок, от чего достигнете. Вознаградить тяжелый труд своих сотрудников, и еще долгое время для них подходящее. Слову сказать, в бизнесе всегда делаем то, что вы хотите быть предпринимателем.</div>
                    <div class="prod_btn">
                        <div class="btn_edit" onclick="location.href='#';">
                            Редактировать</div>
                        <div class="btn_del" onclick="location.href='#';">
                            Удалить</div>
                    </div>
                </div>
            </div> <div class="catalog_prod">
                <div class="prod_img"><img src="/img/prod/1.png"/></div>
                <div class="prod_info">
                    <div class="prod_header">Ошибочно полагают, что в бедности, часто становятся дл я друзей.  А если будет много текста, то появится дополнительная строка.</div>
                    <div class="prod_txt">Прошлых ошибок, от чего достигнете. Вознаградить тяжелый труд своих сотрудников, и еще долгое время для них подходящее. Слову сказать, в бизнесе всегда делаем то, что вы хотите быть предпринимателем.</div>
                    <div class="prod_btn">
                        <div class="btn_edit" onclick="location.href='#';">
                            Редактировать</div>
                        <div class="btn_del" onclick="location.href='#';">
                            Удалить</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination">
            <div class="pag_nav_prev" onclick="location.href='#';"></div>
            <div class="pag_nav" onclick="location.href='#';">1</div>
            <div class="pag_nav" onclick="location.href='#';">2</div>
            <div class="pag_nav" onclick="location.href='#';">3</div>
            <div class="pag_nav_active" onclick="location.href='#';">4</div>
            <div class="pag_nav" onclick="location.href='#';">5</div>
            <div class="pag_nav" onclick="location.href='#';">...</div>
            <div class="pag_nav" onclick="location.href='#';">8</div>
            <div class="pag_nav" onclick="location.href='#';">9</div>
            <div class="pag_nav" onclick="location.href='#';">10</div>
            <div class="pag_nav_next" onclick="location.href='#';"></div>
        </div>



    </div>
</div>

@stop