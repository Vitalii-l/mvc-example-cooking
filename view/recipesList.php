<?php
/* 
 * вывод списка recipes
 * в модели сформировать массив recipes, из controller отправить массив
 * на вывод $recipesList придет из контроллера
 */
ob_start();

foreach ($recipesList as $recipeOne) {
    echo '<article>';
    echo '<h3>';
    echo '<a href="recipe?title='.$recipeOne['recipename'].'">'.$recipeOne['recipename'].'</a>';
    echo '</h3>';
    echo '<img src="public/images/'.$recipeOne['image'].'">';
    echo '<p>Cousin: '.$recipeOne['cousin'].'</p>';
    echo '<p>Time: '.$recipeOne['time'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="recipe?title='.$recipeOne['recipename'].'" role="button"> Содержание &raquo;</a>';
    echo '</p>';
    echo '</article>';
    echo '<div style="clear:both;"></div>';
}

$content = ob_get_clean();
include 'view/templates/layout.php';