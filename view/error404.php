<?php ob_start() ?>
<h2>404 ошибка</h2>
<article>
    <p>По запрошенному URL страница не найдена</p>
</article>

<?php $content = ob_get_clean(); ?>
<?php include "view/templates/layout.php";