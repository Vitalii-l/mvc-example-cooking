<?php
/*
 * связать файлы массив книг booksArray.php
 */
class Model {
    // подготовка вывода всего списка
    public function getDishList() {
        include_once 'model/cookArray.php';
        return $dishes;        
    }
//-----------------------------------------------
    // вывод одной записи
    public function getDish($title) {
        $allBook = Model::getDishList();
        $i = 0;
        $test = array(FALSE);
        foreach ($allDishes as $oneDish) {
            if ($oneDish['dishname'] == $title){
                $test = array(true, $allCook[$i]);
                return $test;
            }
            $i++;
        }
        return $test;
    }
}// class