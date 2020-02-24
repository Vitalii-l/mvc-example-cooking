<?php

/* 
 * вывод одной recipe
 * в модель сформировать массив recipes, из controller отправить массив
 * на вывод $recipe придет из контроллера
 */
ob_start();
    echo '<article class="oneitem">';
    echo '<h3>'.$recipe['recipename'].'</h3>';
    echo '<img src="public/images/'.$recipe['image'].'">';
    echo '<p>Cousin: '.$recipe['cousin'].'</p>';
    echo '<p>Time: '.$recipe['time'].'</p>';
    echo '<p>Description: '.$recipe['description'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="recipes" role="button">&laquo; Back</a>';
    echo '</p>';
    echo '</article>';
    echo '<div style="clear:both;"></div>';
$content = ob_get_clean();
include 'view/templates/layout.php';
    
