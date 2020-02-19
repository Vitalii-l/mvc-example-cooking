<html>
<head>
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="public/css/mystyle.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="header clearfix">
	  <h2>Рецепты</h2>
        <h4 class="text-muted">
            <?php
              echo '<a href="./">Главная</a> &#187 ';
              echo '<a href="recipes">Рецепты</a> ';
              if (!empty($recipe['recipename'])) echo ' &$187 ' .$recipe['recipename'];
            ?>
        </h4>
      </div>	  
      <div id="content" style="padding-top:20px;">
	<?php
        // переменная $content - содержимое страницы,
        // получает значение в зависимости от выбора: ссылка, значение поля...
        // в нашем проекте это будет либо список, либо одна запись-рецепт
        // значение получает в файлах из папки view- представление
        echo $content;  ?>
      </div>
      <footer class="footer">
        <p>&copy; Year Design <i class="fa fa-child"></i></p>
      </footer>
    </div> <!-- container -->
</body>
</html>