<?php
/*
 * связать файлы массив книг booksArray.php
 */
class Model {
    // подготовка вывода всего списка
    public function getRecipesList() {
        include_once 'model/recipeArray.php';
        return $recipes;        
    }
//-----------------------------------------------
    // вывод одной записи
    public function getRecipe($title) {
        $allRecipes = Model::getRecipesList();
        $i = 0;
        $test = array(FALSE);
        foreach ($allRecipes as $oneRecipe) {
            if ($oneRecipe['recipename'] == $title){
                $test = array(true, $allRecipes[$i]);
                return $test;
            }
            $i++;
        }
        return $test;
    }
}// class