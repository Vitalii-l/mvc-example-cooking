<?php
/* 
 * вывод списка recipes
 * в модели сформировать масси recipes, из controller отправить массив
 * на вывод $books_list придет из контроллера
 */
ob_start();
?>
<?php
foreach ($recipesList as $recipeOne) {
    echo '<article>';
    echo '<h3>';
    echo '<a href="recipe?title='.$recipeOne['recipename'].'">'.$recipeOne['recipe'].'</a>';
    echo '</h3>';
    echo '<img src="public/images/'.$recipeOne['image'].'">';
    echo '<p>Author(s): '.$recipeOne['author'].'</p>';
    # echo '<p>Price: '.$bookOne['price'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="recipe?title='.$recipeOne['recipename'].'" role="button"> Содержание &raquo;</a>';
    echo '</p>';
    echo '</article>';
    echo '<div style="clear:both;"></div>';
}
?>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';