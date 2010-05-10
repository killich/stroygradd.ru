<?php
    function current_page($elem, $name){
        echo ($elem == $name) ? ' class="current" ' : '';
    }
    function menu($file_name){
    // Берем имя файлаб парсим его по слешу    
    // берем последний элемент - это имя самого файла
    // парсим по точке - первый элемент [0] - есть имя самого файла
    $delimiter = '\\';
    if($_SERVER["HTTP_HOST"] == 'stroygradd.ru') $delimiter = '/';
    
    $way = explode($delimiter, $file_name);
    $last_element_number = sizeof($way)-1;
    $elem = explode('.', $way[$last_element_number]);
    $elem = $elem[0];
    $index_page = "index.html";
    if($_SERVER["HTTP_HOST"] == 'stroygradd.ru') $index_page = 'http://stroygradd.ru';
    ?>
        <li><a href="<?php echo $index_page; ?>"    <?php  current_page($elem, 'index')     ?>  >Главная</a></li>
        <li><a href="company.html"                  <?php  current_page($elem, 'company')   ?>  >О компании</a></li>
        <li><a href="begin.html"                    <?php  current_page($elem, 'begin')     ?>  >С чего начать?</a></li>
        <li><a href="project-help.html"             <?php  current_page($elem, 'project-help')?>>Выбор проекта</a></li>
        <li><a href="place-help.html"               <?php  current_page($elem, 'place-help')?>  >Выбор земельного участка</a></li>
        <li><a href="low.html"                      <?php  current_page($elem, 'low')       ?>  >Согласование проекта</a></li>
        <li><a href="start.html"                    <?php  current_page($elem, 'start')     ?>  >Начало строительства</a></li>
        <li><a href="news.html"                     <?php  current_page($elem, 'news')      ?>  >Новости</a></li>
        <li><a href="interview.html"                <?php  current_page($elem, 'interview') ?>  >Интервью</a></li>
        
        <li class="multyline">
            <a href="album.html"                    <?php  current_page($elem, 'album')     ?>  >Фотоальбом (процесс&nbsp;строительства)</a>
        </li>
        <li class="multyline">
            <a href="primer.html"                   <?php  current_page($elem, 'primer')   ?>   >Примеры проектов с&nbsp;расчетом</a>
        </li>
        <li class="multyline">
            <a href="plans.html"                   <?php  current_page($elem, 'plans')   ?>   >Проекты домов</a>
        </li>
    <?php
    }
    /* <li><a href="classic.html"                  <?php  current_page($elem, 'classic')   ?>  >Проект дома "Классика"</a></li> */
?>