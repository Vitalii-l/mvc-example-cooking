<?php

/* 
 * вывод одной recipe
 * в модель сформировать массив recipes, из controller отправить массив
 * на вывод $recipe придет из контроллера
 */
ob_start();
    echo '<article>';
    echo '<h3>'.$recipe['recipename'].'</h3>';
    echo '<img src="public/images/'.$recipe['image'].'">';
    echo '<p>Author(s): '.$recipe['author'].'</p>';
    echo '<p>Time: '.$recipe['time'].'</p>';
    echo '<p>Содержание: '.$recipe['description'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="recipes" role="button">Back &raquo;</a>';
    echo '</p>';
    echo '</article>';
    echo '<div style="clear:both;"></div>';
$content = ob_get_clean();
include 'view/templates/layout.php';
    
