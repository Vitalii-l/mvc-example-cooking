<?php
class Controller {
    
    // функция запускает проект
    public function StartSite(){
        include 'view/main.php';
    }
    // -------------------------list
    public function RecipesList() {
        // получить массив recipes для вывода данных
        // $recipehList - хранит массив dishes
        $recipesList = Model::getRecipesList();
        
        // деалем вывод на страницу списка
        include 'view/recipesList.php';
    }
    //--------------------------one
    public function recipeOne($title){
        // $title - название блюда в адресной строке
        $test = Model::getRecipe($title);
        
        // делаем вывод на страницу одного рецепта
        if($test[0] == true){
            $recipe = $test[1];
            include 'view/recipeOne.php';
        } else {
            include 'view/error404.php';
        }
    }
    //--------------------------error
    public function error404(){
        include 'view/error404.php';
    }
   } //class