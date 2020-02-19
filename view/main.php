<?php
ob_start();
?>
<h2>Проект MVS технологии. Рецепты</h2>
<article>
    <p>
        Просмотр списка рецептов и детальной информации по одному рецепту
    </p>
</article>
<?php $content = ob_get_clean(); ?>
<?php include "view/templates/layout.php";
